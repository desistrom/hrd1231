<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Absen extends MY_Controller {



    function Absen()

    {

        parent::__construct();

        $this->load->model('teamlist_mod');

        $this->load->model('today_mod');

        $this->load->model('user_mod');

        $this->load->model('ende_mod');

        $this->clear_cache();

    }

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

    function _set_pagination()

{

    $config['next_link'] = 'Next';

    $config['prev_link'] = 'Prev';

    $config['next_tag_open'] = '<li class="custompagination paginate_button page-item next">';

    $config['next_tag_close'] = '</li>';

    $config['prev_tag_open'] = '<li class="custompagination paginate_button page-item previous">';

    $config['prev_tag_close'] = '</li>';

    $config['full_tag_open'] = '<ul class="pagination" style="justify-content: flex-end;">';

    $config['full_tag_close'] = '</ul>';

    $config['num_tag_open'] = '<li class="custompagination paginate_button page-item">';

    $config['num_tag_close'] = '</li>';

    $config['first_tag_open'] = '<li class="custompagination paginate_button page-item previous">';

    $config['first_tag_close'] = '</li>';

    $config['last_tag_open'] = '<li class="custompagination paginate_button page-item next">';

    $config['last_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a class="page-link">';

    $config['cur_tag_close'] = '</a></li>';



    return $config;

}



    function cek_login(){

        $id = $this->session->userdata('user_id');

        if (empty($id)) {

            $url = 'login?url='.uri_string();

            $url .= (!empty($_SERVER['QUERY_STRING'])) ? '?'.$_SERVER['QUERY_STRING'] : '';

            redirect(base_url().$url);

        }

    }



    function cek_rule(){

        $id = $this->session->userdata('user_id');

        if (empty($id)) {

            $url = 'login?url='.uri_string();

            $url .= (!empty($_SERVER['QUERY_STRING'])) ? '?'.$_SERVER['QUERY_STRING'] : '';

            redirect(base_url().$url);

        }

        else{

            $rule = $this->session->userdata('rule');

            if ($rule != 1 && $rule != 2) {

                redirect(base_url().'absen');

            }

        }

        

    }



    function Today()

    {

        parent::__construct();

        $this->load->model('today_mod');

        $this->load->model('ende_mod');

        

        $this->cek_login();

    }



    function index()

    {



        $this->cek_login();

        $rule = $this->session->userdata('rule');

        if ($rule == 1) {

            redirect(base_url().'absen/admin');

        }


        $now = date_now(true);

        $now_id = date_utc($now);

        $punch_date = format_date($now_id, "Y-m-d");

        $today = $this->today_mod->get(user_id(),$punch_date);

        

        $punch_in = '0';

        $punch_out = '0';

        $punch_work = '';

        $punch_in_time = '';

        $punch_out_time = '';

        $report = '';

        if($today)

        { 

            if(!empty($today->punch_in)){

               $punch_in = $today->punch_in > setting('punch_in') ? '2' : '1';

               $punch_in_time = $today->punch_in;

               $punch_work = $today->punch_work;

            }

            if(!empty($today->punch_out)){

               $punch_out = $today->punch_out < setting('punch_out') ? '2' : '1'; 

               $punch_out_time = $today->punch_out;

            }

            $report = $today->report;

        }

        

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('report', 'Report', 'required');

        $data["msg"] = '';

        if ($this->form_validation->run() == TRUE)

        {

            #Cek user sudah punch in apa belum

            if($today)

            {

                $report = $this->input->post('report');

                $data_update = array(

                    'report' => $report,

                    'modified' => $now

                );



                $this->today_mod->update($data_update,$today->id);

                redirect('absen');

            }

            $data["msg"] = 'Anda harus punch in terlebih dahulu untuk membuat report!';

        }

        

        $data['punch_in'] = $punch_in;

        $data['punch_out'] = $punch_out;

        $data['punch_work'] = $punch_work;

        $data['punch_in_time'] = $punch_in_time;

        $data['punch_out_time'] = $punch_out_time;

        $data['report'] = $report;

        $data['page'] = 'absen';

        $ambilid = $this->session->userdata('user_id');

        $data['ambil_absen'] = $this->today_mod->get_absen($rows=false,$where=array('user_id' => $ambilid),$limit=true,$skip=0,$take=5);

        $this->load->view('absen',$data);

    }

    function admin(){
        $this->cek_rule();
        // $data['a'] = $this->today_mod->get_absen_all();
        $data['ateam'] = $this->teamlist_mod->get_teamlist_adminv();
        $data['sakitrange'] = $this->teamlist_mod->get_sakit_now();
        $this->load->view('absen_admin',$data);

    }

    function timesheet($id_user=0){
        $this->cek_login();
        $where=array('user_id' => $id_user);
        $test = $this->today_mod->get_absen(false,$where);
        if (!$test) {
            redirect(base_url().'absen');
        }

        $id = $this->input->get('per_page');

        $url = '?';

        $config['base_url'] = base_url(FALSE).'absen/timesheet/'.$id_user.'?';



    $config['total_rows'] = $this->today_mod->get_absen(true,$where);



    $config['per_page'] = 25;



    $config['cur_page'] = empty($id) ? 0 : $id;



    $config['page_query_string'] = TRUE;



    foreach ($this->_set_pagination() as $key=>$val){



        $config[$key] = $val;



    }



    $this->pagination->initialize($config);


    $skip = $config['cur_page'];



    $take = $config['per_page'];



    $data['number'] = $config['cur_page'];



    $data['datacount'] = $this->today_mod->get_absen(true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['a'] = $this->today_mod->get_absen(false,$where,true,$skip,$take);
    $data['list'] = false;
    $this->load->view('timesheet',$data);

        
    }

    function daftar(){
    if (empty($this->session->userdata('user_id'))) {

        $url = 'login?url='.uri_string();

        $url .= (!empty($_SERVER['QUERY_STRING'])) ? '?'.$_SERVER['QUERY_STRING'] : '';

        redirect(base_url().$url);

    }
    $where=null;
    $searchname = null;

    // Pencarian Nama
    if (!empty($this->input->get('searchname')) && empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array('ds_users.name' => $this->input->get('searchname'));        
    }

    // Pencarian Bulan
    elseif (empty($this->input->get('searchname')) && !empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array('ds_today.punch_date' => '-'.$this->input->get('bulan').'-');       
    }

    // Pencarian Tahun
    elseif (empty($this->input->get('searchname')) && empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_today.punch_date' => $this->input->get('tahun').'-');       
    }

    // Pencarian Bulan dan Tahun
    elseif (empty($this->input->get('searchname')) && !empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_today.punch_date' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
    }

    // Pencarian Nama dan Bulan
    elseif (!empty($this->input->get('searchname')) && !empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array(
            'ds_users.name' => $this->input->get('searchname'),
            'ds_today.punch_date' => '-'.$this->input->get('bulan').'-'
        );        
    }

    // Pencarian Nama dan Tahun
    elseif (!empty($this->input->get('searchname')) && empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array(
            'ds_users.name' => $this->input->get('searchname'),
            'ds_today.punch_date' => $this->input->get('tahun').'-'
        );        
    }

    // Pencarian Nama dan Bulan dan Tahun
    elseif (!empty($this->input->get('searchname')) && !empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array(
            'ds_users.name' => $this->input->get('searchname'),
            'ds_today.punch_date' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-'
        );        
    }

    // elseif (!empty($this->input->get('searchname')) && !empty($this->input->get('tahun')) ) {
    //     $searchname = array(
    //         'ds_today.user_id' => $this->input->get('searchname'),
    //         'ds_today.punch_date' => $this->input->get('tahun')
    //     );
    //     $this->db->where('ds_today.user_id',$this->input->get('searchname'));        
    // }

    // elseif (!empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
    //     $searchname = array('ds_today.punch_date' => '-'.$this->input->get('bulan').'-');

    // }
    // elseif (empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
    //     $searchname = array('ds_today.punch_date' => $this->input->get('tahun').'-');
    // }
    // elseif (!empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
    //     $searchname = array('ds_today.punch_date' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
    // }

    $test = $this->today_mod->get_absen_all(false,$where);
    if (!$test) {
        redirect(base_url().'absen');
    }

    $id = $this->input->get('per_page');

    $url = '?';

    $config['base_url'] = base_url(FALSE).'absen/daftar?searchname='.$this->input->get('searchname').'&bulan='.$this->input->get('bulan').'&tahun='.$this->input->get('tahun');



    $config['total_rows'] = $this->today_mod->get_absen_all($searchname,true,$where);
    $config['per_page'] = 25;
    $config['cur_page'] = empty($id) ? 0 : $id;
    $config['page_query_string'] = TRUE;
    foreach ($this->_set_pagination() as $key=>$val){
        $config[$key] = $val;
    }
    $this->pagination->initialize($config);
    $skip = $config['cur_page'];
    $take = $config['per_page'];
    $data['number'] = $config['cur_page'];
    $data['datacount'] = $this->today_mod->get_absen_all($searchname,true,$where);
    $data['pagination'] = $this->pagination->create_links();

    $data['a'] = $this->today_mod->get_absen_all($searchname,false,$where,true,$skip,$take);
    $data['list'] = true;
    $data['ateam'] = $this->teamlist_mod->get_teamlist(false,$where,true,$skip,$take);
    $this->load->view('timesheet',$data);

    }

    function punch_in($work=null)

    {

        if(!$this->is_allow_ip()){

            redirect('punch-ip');

        }

        

        $now = date_now(true);

        $now_id = date_utc($now);

        $punch_date = format_date($now_id, "Y-m-d");

        $punch_time = format_date($now_id, "H:i:s");

        $today = $this->today_mod->get(user_id(),$punch_date);

        $url = $this->input->get('url');

        if($work == 'wfh')
            $punch_work = 'wfh';
        else
            $punch_work = 'wfo';
        

        if(!$today){

            #Add data today

            $data_add = array(

                'user_id' => user_id(),

                'punch_date' => $punch_date,

                'punch_in' => $punch_time,

                'punch_work' => $punch_work,

                'created' => $now,

                'modified' => $now,

                'log_in' => $this->ende_mod->encode($punch_time)

            );

            $data_add_last = array(

                'last_punch_date' => $punch_date,

                'last_punch_in' => $punch_time,

                'last_punch_out' => NULL,

                'last_punch_in_desc' => NULL,

                'last_punch_out_desc' => NULL

            );



            $this->today_mod->add($data_add);
            $this->today_mod->add_last($data_add_last);

            if($punch_time > setting('punch_in')){
                redirect('absen/punch_reason?action=in');
            }

            if(!empty($url)){

                redirect($url);

            }

        }

        

        redirect('absen');

    }

    

    function punch_out()

    {
        if(!$this->is_allow_ip()){

            redirect('punch-ip');

        }

        $now = date_now(true);

        $now_id = date_utc($now);

        $punch_date = format_date($now_id, "Y-m-d");

        $punch_time = format_date($now_id, "H:i:s");

        $today = $this->today_mod->get(user_id(),$punch_date);

        

        if($today){

            
            #Update data today

            $data_update = array(

                'punch_out' => $punch_time,

                'log_out' => $this->ende_mod->encode($punch_time)

            ); 

            $data_update_last_out = array(

                'last_punch_out' => $punch_time

            );
             
            

            if($punch_time < setting('punch_out')){
                $this->today_mod->update($data_update,$today->id);
                $this->today_mod->update_last($data_update_last_out);
                redirect('absen/punch_reason?action=out&over=0');

            }
            elseif($punch_time > setting('punch_over')){
                $this->today_mod->update($data_update,$today->id);
                $this->today_mod->update_last($data_update_last_out);
                redirect('absen/punch_reason?action=out&over=1');

            }else{
                $this->today_mod->update($data_update,$today->id);
                $this->today_mod->update_last($data_update_last_out);
                redirect('absen');
            }



        }

        else {
            
            $this->session->set_flashdata('belum_punchin','<div class="flashdata-msg alert-items">
            <div class="text-center alert alert-warning">Sebelum melakukan Check Out, silahkan lakukan Check In terlebih dahulu</div></div>');
            redirect('absen');

        }

        

        redirect('absen');

    }

    

    function punch_reason()

    {

        $action = $this->input->get('action');

        $over = $this->input->get('over');

        if (empty($over)) {
        	$over = 0;
        }

        $now = date_now(true);

        $now_id = date_utc($now);

        $punch_date = format_date($now_id, "Y-m-d");

        $today = $this->today_mod->get(user_id(),$punch_date);

        

        #Cek user sudah punch in apa belum

        if(!$today){

            redirect('punch_in');

        }

        

        #Cek action harus punch in atau punch out

        if($action != 'in' and $action != 'out'){

            redirect('absen');

        }

        

        #Cek tanggal punch in harus hari ini

        if($today->punch_date != $punch_date){

            redirect('absen');

        }

        

        #Hanya jika masuk kerja telat

        if($action == 'in'){

            if($today->punch_in <= setting('punch_in')){

                redirect('absen');

            }

        }

        

        #Hanya jika pulang lebih awal

        // if($action == 'out' || $over == 1 ){

        //     if($today->punch_out >= setting('punch_out')){

        //         redirect('absen');

        //     }

        // }

        

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('reason', 'Reason', 'required');

        $data["msg"] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $reason = $this->input->post('reason');

            if($action == 'in'){

               $data_update = array('punch_in_desc' => $reason);
               $data_update_last = array('last_punch_in_desc' => $reason); 

            }
            elseif ($action == 'out' || $over == 1) {
                $data_update = array('punch_out_desc' => $reason);
                $data_update_last = array('last_punch_out_desc' => $reason);
            }

            $this->today_mod->update($data_update,$today->id);
            $this->today_mod->update_last($data_update_last);

            redirect('absen');

        }

        

        $data['reason'] = ($action == 'in') ? $today->punch_in_desc : $today->punch_out_desc;

        $data['page'] = 'today';

        $data['over'] = $over;

        $this->load->view('today_reason',$data);

    }

    function cron(){
        // $data=array(
        //     'name'     => 'Naufal Pambudi'
        //       );
              
        //   $this->db->where('id','68');
        //   $this->db->update('ds_users', $data);

        $now = date_now(true);

        $now_id = date_utc($now);

        $punch_date = format_date($now_id, "Y-m-d"); 

            $kpnnipush = kpnpush($this->session->userdata("user_id")); 

            $now_ymd = date_now_ymd(true);

            $tglskrg = date_utc_ymd($now_ymd);

        if($kpnnipush!=$tglskrg)
        {
            #Add data today

            $data_add = array(

                'user_id' => user_id(),

                'punch_date' => $punch_date,

                'punch_in' => '00:00:00',

                'created' => $now,

                'modified' => $now, 

            );



            $this->today_mod->add($data_add);
        } else{
            echo 'UDAH ASBEN BRUH';
        }
    }
    
    function cron_punchout(){
        
        $yesterday = date_yesterday(true);

        $yesterday_id = date_utc($yesterday);

        $cron_punchout = format_date($yesterday_id, "Y-m-d");

        $data=array(
        'punch_out'     => '17:00:00'
            );
            
        $array = array('punch_out' => NULL, 'punch_date' => $cron_punchout);

        $this->db->where($array);
        $this->db->order_by("punch_date", "desc");
        $this->db->update('ds_today', $data);

    }
    
    function testget(){

        $query = $this->db->query("select * from ds_today");

        foreach ($query->result() as $row)
        {
                echo $row->id; 
        }

    }

}