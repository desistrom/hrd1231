<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Absen extends MY_Controller {



    function Absen()

    {

        parent::__construct();

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

        $punch_in_time = '';

        $punch_out_time = '';

        $report = '';

        if($today)

        { 

            if(!empty($today->punch_in)){

               $punch_in = $today->punch_in > setting('punch_in') ? '2' : '1';

               $punch_in_time = $today->punch_in;

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
        $data['a'] = $this->today_mod->get_absen_all();
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
    if (!empty($this->input->get('searchname'))) {
        $searchname = array('ds_users.name' => $this->input->get('searchname'));        
    }

    if (!empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array('ds_today.punch_date' => '-'.$this->input->get('bulan').'-');

    }
    elseif (empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_today.punch_date' => $this->input->get('tahun').'-');
    }
    elseif (!empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_today.punch_date' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
    }

    $test = $this->today_mod->get_absen_all(false,$where);
    if (!$test) {
        redirect(base_url().'absen');
    }

    $id = $this->input->get('per_page');

    $url = '?';

    $config['base_url'] = base_url(FALSE).'absen/daftar?searchname='.$this->input->get('searchname').'&bulan='.$this->input->get('bulan');



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
    $this->load->view('timesheet',$data);

    }

    function punch_in()

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

        

        if(!$today){

            #Add data today

            $data_add = array(

                'user_id' => user_id(),

                'punch_date' => $punch_date,

                'punch_in' => $punch_time,

                'created' => $now,

                'modified' => $now,

                'log_in' => $this->ende_mod->encode($punch_time)

            );



            $this->today_mod->add($data_add);

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
            //Hitung Jumlah Absen
            $ambiltoday = $this->today_mod->get_today(false,array('user_id' => $this->session->userdata('user_id')));
            $a = 0;
            foreach ($ambiltoday as $key => $isi) {
                if (!empty($isi['punch_out'])) {
                    $a++;
                }
            }
            $x = $a;
            $data_update_user = array('absen' => $x);
            $this->today_mod->add_absen_touser($data_update_user,$this->session->userdata('user_id'));
            //End Hitung Absen
            $this->today_mod->update($data_update,$today->id);

            $nilai = $this->user_mod->get_byuid($this->session->userdata('user_id'));
            if (format_date($ambiltoday[0]['punch_in'], "H:i:s") > setting('punch_in')) {
                $jumlahnilai = (int)$nilai->nilai - 1;
                $this->today_mod->add_absen_touser(array('nilai'=>$jumlahnilai),$this->session->userdata('user_id'));
            }
            else{
                $jumlahnilai = (int)$nilai->nilai + 1;
                $this->today_mod->add_absen_touser(array('nilai'=>$jumlahnilai),$this->session->userdata('user_id'));
            }
            

            if($punch_time < setting('punch_out')){

                redirect('absen/punch_reason?action=out&over=0');

            }
            elseif($punch_time > setting('punch_over')){

                redirect('absen/punch_reason?action=out&over=1');

            }



        }

        else {

            redirect('punch_in');

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

        if($action == 'out' || $over == 1 ){

            if($today->punch_out >= setting('punch_out')){

                redirect('absen');

            }

        }

        

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('reason', 'Reason', 'required');

        $data["msg"] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $reason = $this->input->post('reason');

            if($action == 'in'){

               $data_update = array('punch_in_desc' => $reason); 

            }
            elseif ($action == 'out' || $over == 1) {
            	$data_update = array('punch_out_desc' => $reason);
            }



            $this->today_mod->update($data_update,$today->id);

            redirect('absen');

        }

        

        $data['reason'] = ($action == 'in') ? $today->punch_in_desc : $today->punch_out_desc;

        $data['page'] = 'today';

        $data['over'] = $over;

        $this->load->view('today_reason',$data);

    }

    

    function punch_ip()

    {

        if($this->is_allow_ip()){

            redirect('punch_in');

        }

        $data['page'] = 'today';

        $this->load->view('today_ip',$data);

    }

}