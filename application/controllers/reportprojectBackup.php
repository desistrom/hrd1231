<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Reportproject extends MY_Controller {



    function Reportproject()

    {

        parent::__construct();

        $this->load->helper('url');

        $this->load->library('upload');

        $this->load->model('report_mod');     

        $this->clear_cache();

    }

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

    function cek_status_project($status){
        $isi = 0;
        if ($status == '1') {
            $isi = "Billing";
        }
        elseif ($status == '2') {
            $isi = "Development";
        }
        elseif ($status == '3') {
            $isi = "Marketing";
        }
        elseif ($status == '4') {
            $isi = "Maintenance";
        }
        elseif ($status == '5') {
            $isi = "Design";
        }
        elseif ($status == '6') {
            $isi = "HTML";
        }
        elseif ($status == '7') {
            $isi = "Support";
        }

        return $isi;
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

                redirect(base_url().'reportproject');

            }

        }

        

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



    function index()

    {

        $this->cek_login();

        $where = null;

        $searchname = null;
        if (!empty($this->input->get('searchname'))) {
            $searchname = array('ds_project.project_name' => $this->input->get('searchname'));        
        }

        if (!empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
            $searchname = array('ds_project.date' => '-'.$this->input->get('bulan').'-');

        }
        elseif (empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
            $searchname = array('ds_project.date' => $this->input->get('tahun').'-');
        }
        elseif (!empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
            $searchname = array('ds_project.date' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
        }

        $id = $this->input->get('per_page');



        $url = '?';





        $config['base_url'] = base_url(FALSE).'reportproject?searchname='.$this->input->get('searchname');



        $config['total_rows'] = $this->report_mod->get_project($searchname,true,$where);



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



        $data['datacount'] = $this->report_mod->get_project($searchname,true,$where);



        $data['pagination'] = $this->pagination->create_links();



        $data['row'] = $this->report_mod->get_project($searchname,false,$where,true,$skip,$take);

        //Menelusuri apakah data project ada update report

        

        $i = 1;

        $row = $this->report_mod->get_project($searchname,false,$where);

        if (!empty($row)) {

        foreach ($row as $key => $a) {

            $cekreport[$i] = $this->report_mod->cek_report($a['id']);

            $jumlahreport[$i] = $this->report_mod->get_report(true,array('id_project' => $a['id']));

            $i++;

        }

        $data['lastupdate'] = $cekreport;

        $data['jumlahreport'] = $jumlahreport;

        }

        



    	$this->load->view('reportproject',$data);

    }



    function add() {

        $this->cek_login();

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('name', 'Project Name', 'required');

        $this->form_validation->set_rules('date', 'Start Date', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');

        $this->form_validation->set_rules('detail', 'Project Detail', 'required');

        $data['msg'] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $userid = $this->session->userdata('user_id');

            $name = $this->input->post('name');

            $date = $this->input->post('date');

            $status = $this->input->post('status');

            $detail = nl2br($this->input->post('detail'));



            $add_data = array(

                'user_id' => $userid,

                'project_name' => $name,

                'project_detail' => $detail,

                'project_status' => $status,

                'project_start' => $date

            );

            if($_FILES["uploadreport"]['size'] != 0)

                {

                    if (!is_dir('././clients')) {

                        mkdir('././clients');

                        mkdir('././clients/project');

                    }

                    else{

                        if (!is_dir('././clients/project')) {

                            mkdir('././clients/project');

                        }

                    }

                    $file = $this->do_upload1();

                    if ($file['status']) {

                        $add_data['file'] = $file['file_name'];

                    }



                }

            $i = $this->report_mod->add($add_data);
            //Perhitungan Nilai
                    $a = $this->report_mod->get_project_onuser(false,array('id'=>$this->session->userdata('user_id')));
                    $b = 1;

                    $x = (int)$a[0]['project'] + $b;
                    $y = (int)$a[0]['nilai'] + 2;
                    $this->report_mod->add_report_touser(array('project' => $x, 'nilai' => $y),$this->session->userdata('user_id'));

            if ($i) {

                //Proses Pengiriman Email
                $this->load->library('email');
                $ngecekproject = $this->report_mod->cek_project($i);
                $statusproject = $this->cek_status_project($status);
                $message =" 
                    <h3>".$ngecekproject->name." Telah Membuat Project Baru Berjudul ".$name."</h3>
                    <p><strong>Project Start : ".$date."</strong></p>
                    <p><strong>Project Status : ".$statusproject."</strong></p>
                    <br>
                    <p>".$detail."</p>
                    <p><a href='".base_url()."reportproject/detail/".$i."/".url_title($name,'-',true)."'>Lihat Disini</a></p>
                ";
                $subject = $ngecekproject->name.' Telah Membuat Project '.$name;

                $config = Array(
                   'protocol'   => 'smtps',
                   'smtp_host'  => 'ssl://srv13.niagahoster.com',
                    'smtp_port'  => '465',
                    'smtp_user'  => 'test@dewanstudio.com',
                   'smtp_pass'  => 'Test2018!',
                   'mailtype'   => 'html', 
                   'charset'    => 'utf-8',
                   'wordwrap'   => 'TRUE',
                   'validation' => 'TRUE'
                );
                $this->email->initialize($config);

                $this->email->from('reporting@dewanstudio.com', 'Reporting System');
                $this->email->to(array('ajeng_nuraeni@dewanstudio.com','denni.irawan@dewanstudio.com'));
                /*$this->email->to('naufal@dewanstudio.com');*/
                $this->email->subject($subject);
                $this->email->message($message);

                /*if (!empty($ngecekproject->file)) {
                    $this->email->attach('././clients/project/'.$ngecekproject->file);
                }*/

                
                if ($this->email->send()) {
                    

                    redirect(base_url().'reportproject');
                }
                else{
                    $data['msg'] = "Project data has been saved, but the email failed to send";
                }

            }

            else{

                $data['msg'] = "There are problems with our server, please try again later.";

            }



        }

        $this->load->view('reportproject_add', $data);

    }



    function edit($id=0){

        $this->cek_login();

        $i = $this->report_mod->cek_project($id);

        $data['row'] = '';

        if ($i) {

            $data['row'] = $i;

        }



        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('name', 'Project Name', 'required');

        $this->form_validation->set_rules('date', 'Start Date', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');

        $this->form_validation->set_rules('detail', 'Project Detail', 'required');

        $data['msg'] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $name = $this->input->post('name');

            $date = $this->input->post('date');

            $status = $this->input->post('status');

            $detail = nl2br($this->input->post('detail'));



            $edit_data = array(

                'project_name' => $name,

                'project_detail' => $detail,

                'project_status' => $status,

                'project_start' => $date

            );



            if($_FILES["uploadreport"]['size'] != 0)

                {

                    if (!is_dir('././clients')) {

                        mkdir('././clients');

                        mkdir('././clients/project');

                    }

                    else{

                        if (!is_dir('././clients/project')) {

                            mkdir('././clients/project');

                        }

                    }

                    $file = $this->do_upload1();

                    if ($file['status']) {
                        if(!empty($i->file)){
                            if(file_exists('././clients/project/'.$i->file)){
                                unlink('././clients/project/'.$i->file);
                            }
                        }
                        $edit_data['file'] = $file['file_name'];

                    }



                }



            $a = $this->report_mod->update($edit_data,$id);

            //Proses Pengiriman Email
            $this->load->library('email');
            $ngecekproject = $this->report_mod->cek_project($id);
            $statusproject = $this->cek_status_project($status);
            $message =" 
                <h3>".$ngecekproject->name." Telah Merubah Project Berjudul ".$name."</h3>
                <p><strong>Project Start : ".$date."</strong></p>
                <p><strong>Project Status : ".$statusproject."</strong></p>
                <br>
                <p>".$detail."</p>
                <p><a href='".base_url()."reportproject/detail/".$id."/".url_title($name,'-',true)."'>Lihat Disini</a></p>
            ";
            $subject = $ngecekproject->name.' Telah Merubah Project '.$name;

            $config = Array(
               'protocol'   => 'smtps',
               'smtp_host'  => 'ssl://srv13.niagahoster.com',
               'smtp_port'  => '465',
               'smtp_user'  => 'test@dewanstudio.com',
               'smtp_pass'  => 'Test2018!',
               'mailtype'   => 'html', 
               'charset'    => 'utf-8',
               'wordwrap'   => 'TRUE',
               'validation' => 'TRUE'
            );
            $this->email->initialize($config);

            $this->email->from('reporting@dewanstudio.com', 'Reporting System');
            $this->email->to(array('ajeng_nuraeni@dewanstudio.com','denni.irawan@dewanstudio.com'));
            /*$this->email->to('opayabumanyu@gmail.com');*/
            $this->email->subject($subject);
            $this->email->message($message);

            /*if (!empty($ngecekproject->file)) {
                $this->email->attach('././clients/project/'.$ngecekproject->file);
            }*/

            if ($this->email->send()) {
                redirect(base_url().'reportproject');
            }
            else{
                $data['msg'] = "Project data has been saved, but the email failed to send";
            }

            

        }



        $this->load->view('reportproject_edit',$data);

    }



    function detail($id=0) {

        $this->cek_login();

        if (empty($id)) {

            redirect(base_url().'reportproject');

        }
        $njeh = date_create(date('Y-m-d'));
        $udahreport = false;
        $cekreporttoday = $this->report_mod->get_report(false,array('id_project'=>$id,'id_user'=>$this->session->userdata('user_id')));
        $njeh2 = date_create(date('Y-m-d',strtotime($cekreporttoday[0]['date'])));
        if ($njeh == $njeh2) {
            $udahreport = true;
        }

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('report', 'Report', 'required');

        $data['msg'] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $projectid = $id;

            $userid = $this->session->userdata('user_id');

            $report = $this->input->post('report');



            $add_data = array(

                'id_project' => $projectid,

                'id_user' => $userid,

                'report' => nl2br($report)

            );


            
                if($_FILES["uploadreport"]['size'][0] != 0)
                {
                    if (!is_dir('././clients')) {
                        mkdir('././clients');
                        mkdir('././clients/report');
                    }
                    else{
                        if (!is_dir('././clients/report')) {
                            mkdir('././clients/report');
                        }
                    }
                    $file = $this->do_upload_report($_FILES['uploadreport']);
                    $add_data['file'] = $file;
                                        
                }
           


            $i = $this->report_mod->add_detail($add_data);

            if (!empty($this->input->post('status'))) {
                        $status = $this->input->post('status');
                        $update_data['project_status'] = $status;
                        $this->report_mod->update($update_data,$id);
                    }
                    //Perhitungan Nilai
                    $a = $this->report_mod->get_project_onuser(false,array('id'=>$this->session->userdata('user_id')));
                    $b = 1;

                    $x = (int)$a[0]['project'] + $b;
                    $y = (int)$a[0]['nilai'] + $b;
                    $this->report_mod->add_report_touser(array('project' => $x, 'nilai' => $y),$this->session->userdata('user_id'));

            if ($i) {

                //Proses Pengiriman Email
                $this->load->library('email');
                $ngecekproject = $this->report_mod->cek_project($id);
                $ngecekreport = $this->report_mod->cek_report($i);
                if (!empty($this->input->post('status'))) {
                    $statusreport = $this->cek_status_project($this->input->post('status'));
                    $message =" 
                        <h3>".$ngecekreport->name." Telah Membuat Report Baru Di Project ".$ngecekproject->project_name."</h3>
                        <p><strong>Project Status : ".$statusreport."</strong></p>
                        <br>
                        <p>".nl2br($report)."</p><br>
                        <p>
                            Report By : ".$this->session->userdata('full_name')."
                        </p>
                        <p><a href='".base_url()."reportproject/detail/".$id."/".url_title($ngecekproject->project_name,'-',true)."'>Lihat Disini</a></p>
                    ";
                }
                else{
                    $message =" 
                        <h3>".$ngecekreport->name." Telah Membuat Report Baru Di Project ".$ngecekproject->project_name."</h3>
                        <br>
                        <p>".nl2br($report)."</p><br>
                                                <p>
                            Report By : ".$this->session->userdata('full_name')."
                        </p>
                        
                        <p><a href='".base_url()."reportproject/detail/".$id."/".url_title($ngecekproject->project_name,'-',true)."'>Lihat Disini</a></p>
                    ";
                }
                
                
                $subject = $ngecekreport->name.' Telah Membuat Report';

                $config = Array(
                   'protocol'   => 'smtps',
                   'smtp_host'  => 'ssl://srv13.niagahoster.com',
               'smtp_port'  => '465',
               'smtp_user'  => 'test@dewanstudio.com',
                   'smtp_pass'  => 'Test2018!',
                   'mailtype'   => 'html', 
                   'charset'    => 'utf-8',
                   'wordwrap'   => 'TRUE',
                   'validation' => 'TRUE'
                );
                $this->email->initialize($config);

                $this->email->from('reporting@dewanstudio.com', 'Reporting System');
                $this->email->to(array('ajeng_nuraeni@dewanstudio.com','denni.irawan@dewanstudio.com'));
                /*$this->email->to('opayabumanyu@gmail.com');*/
                $this->email->subject($subject);
                $this->email->message($message);

                /*if (!empty($ngecekreport->file)) {
                    $this->email->attach('././clients/report/'.$ngecekreport->file);
                }*/

                if ($this->email->send()) {
                    

                    redirect(base_url().'reportproject/detail/'.$id);
                }
                else{
                    $data['msg'] = "Project data has been saved, but the email failed to send";
                }

            }

            else{

                $data['msg'] = "There are problems with our server, please try again later.";

            }





        }







        //Pemanggilan Konten Web Detail

        $where = array('id_project' => $id);



        $halaman = $this->input->get('per_page');



        $url = '?';





        $config['base_url'] = base_url(FALSE).'reportproject/detail/'.$id.'?';



        $config['total_rows'] = $this->report_mod->get_report(true,$where);



        $config['per_page'] = 25;



        $config['cur_page'] = empty($halaman) ? 0 : $halaman;



        $config['page_query_string'] = TRUE;



        foreach ($this->_set_pagination() as $key=>$val){



            $config[$key] = $val;



        }



        $this->pagination->initialize($config);







        $skip = $config['cur_page'];



        $take = $config['per_page'];



        $data['pagination'] = $this->pagination->create_links();



        $data['report'] = $this->report_mod->get_report(false,$where,true,$skip,$take);



        $data['project'] = $this->report_mod->get_project(null,false,array('ds_project.id' => $id));



        $cekproject = $this->report_mod->cek_project($id);

        if (!$cekproject) {

            redirect(base_url().'reportproject');

        }

        $data['udahreport'] = $udahreport;



        $this->load->view('reportproject_detail',$data);

    }



    function edit_report($id=0,$id_report=0){

        $this->cek_login();

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules('report'.$id_report, 'Report', 'required');

        $data['msg'] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $report = $this->input->post('report'.$id_report);



            $edit_data = array(

                'report' => nl2br($report)

            );


            /*foreach ($_FILES["uploadreport".$id_report."[]"] as $key => $value) {*/
                if(!empty($_FILES["uploadreport".$id_report]['name'][0]))
                {
                    $i = $this->report_mod->cek_report($id);
                    if(!empty($i->file)){
                        $decode = json_decode($i->file);
                        foreach ($decode as $key => $file) {
                            if (!empty($file->file)) {
                                if(file_exists('././clients/report/'.$i->file)){
                                    unlink('././clients/report/'.$i->file);
                                }
                            }
                        }
                        
                    }
                    if (!is_dir('././clients')) {
                        mkdir('././clients');
                        mkdir('././clients/report');
                    }
                    else{
                        if (!is_dir('././clients/report')) {
                            mkdir('././clients/report');
                        }
                    }
                    $file = $this->do_upload_report_edit($id_report,$_FILES["uploadreport".$id_report]);
                    $edit_data['file'] = $file;
                    
                }
            /*}*/



            $a = $this->report_mod->update_detail($edit_data,$id_report);

            //Proses Pengiriman Email
            $this->load->library('email');
            $ngecekproject = $this->report_mod->cek_project($id);
            $ngecekreport = $this->report_mod->cek_report($id_report);
            
            $message =" 
                <h3>".$ngecekreport->name." Telah Merubah Report Di Project ".$ngecekproject->project_name."</h3>
                <br>
                <p>".nl2br($report)."</p>
                <p><a href='".base_url()."reportproject/detail/".$id."/".url_title($ngecekproject->project_name,'-',true)."'>Lihat Disini</a></p>
            ";
            
                
                
            $subject = $ngecekreport->name.' Telah Merubah Report';

            $config = Array(
               'protocol'   => 'smtps',
               'smtp_host'  => 'ssl://srv13.niagahoster.com',
               'smtp_port'  => '465',
               'smtp_user'  => 'test@dewanstudio.com',
               'smtp_pass'  => 'Test2018!',
               'mailtype'   => 'html', 
               'charset'    => 'utf-8',
               'wordwrap'   => 'TRUE',
               'validation' => 'TRUE'
            );
            $this->email->initialize($config);

            $this->email->from('reporting@dewanstudio.com', 'Reporting System');
            $this->email->to(array('ajeng_nuraeni@dewanstudio.com','denni.irawan@dewanstudio.com'));
            /*$this->email->to('opayabumanyu@gmail.com');*/
            $this->email->subject($subject);
            $this->email->message($message);

            /*if (!empty($ngecekreport->file)) {
                $this->email->attach('././clients/report/'.$ngecekreport->file);
            }*/

            if ($this->email->send()) {
                redirect(base_url().'reportproject/detail/'.$id);
            }
            else{
                redirect(base_url().'reportproject/detail/'.$id);
            }
            

            

        }

        redirect(base_url().'reportproject/detail/'.$id);

    }



    private function do_upload1()

    {

        /*$new_name                       = $_FILES["uploadreport"]['name'].''.date('d F Y');*/

        /*$config['file_name']            = $new_name;*/

        $config['upload_path']          = '././clients/project/';

        $config['allowed_types']        = 'gif|jpg|png|ai|psd|jpeg';

        $config['max_size']             = 5000;

        $config['overwrite']            = TRUE;



        $this->upload->initialize($config);



        if ( ! $this->upload->do_upload('uploadreport'))

        {

            return array('status' => false, 'error' => $this->upload->display_errors());

        }

        else

        {

            $data = $this->upload->data();



            $file_name = $data['file_name'];



            $file_type = $data['file_type'];



            $file_size = $data['file_size'];



            $array = array(



                'status'    => true,



                'error'       => '',



                'file_name' => $file_name,



                'file_type' => $file_type,



                'file_size' => $file_size



            );



            return $array;

        }

    }



    private function do_upload_report($files)

    {
    	$config['upload_path']          = '././clients/report/';

        $config['allowed_types']        = 'gif|jpg|jpeg|png|ai|psd|zip|rar|pdf';

        $config['max_size']             = 25000;

        $config['overwrite']            = TRUE;

        $images = '[';
        foreach ($files['name'] as $key => $value) {
            $_FILES['uploadreport[]']['name']= $files['name'][$key];
            $_FILES['uploadreport[]']['type']= $files['type'][$key];
            $_FILES['uploadreport[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['uploadreport[]']['error']= $files['error'][$key];
            $_FILES['uploadreport[]']['size']= $files['size'][$key];

            $new_name                       = date('dmYHis').'_'.$_FILES['uploadreport[]']['name'];

            $config['file_name']            = $new_name;

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('uploadreport[]'))
            {
                /*$array = array('status' => false, 'error' => $this->upload->display_errors());*/
                $images .= '{'.$this->upload->display_errors().'},';
            }
            else
            {
                $data = $this->upload->data();
                $images .= '{"file":"'.$data['file_name'].'"},';
            }
        }
        $images .= '{}]';
        return $images;
    }



    private function do_upload_report_edit($id,$files)

    {
    	$config['upload_path']          = '././clients/report/';

        $config['allowed_types']        = 'gif|jpg|jpeg|png|ai|psd|zip|rar|pdf';

        $config['max_size']             = 25000;

        $config['overwrite']            = TRUE;

        $images = '[';
        foreach ($files['name'] as $key => $value) {
            $_FILES['uploadreport'.$id.'[]']['name']= $files['name'][$key];
            $_FILES['uploadreport'.$id.'[]']['type']= $files['type'][$key];
            $_FILES['uploadreport'.$id.'[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['uploadreport'.$id.'[]']['error']= $files['error'][$key];
            $_FILES['uploadreport'.$id.'[]']['size']= $files['size'][$key];

            $new_name                       = date('dmYHis').'_'.$_FILES['uploadreport'.$id.'[]']['name'];

            $config['file_name']            = $new_name;

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('uploadreport'.$id.'[]'))
            {
                /*$array = array('status' => false, 'error' => $this->upload->display_errors());*/
                $images .= '{'.$this->upload->display_errors().'},';
            }
            else
            {
                $data = $this->upload->data();
                $images .= '{"file":"'.$data['file_name'].'"},';
            }
        }
        $images .= '{}]';
        return $images;


        /*if ( ! $this->upload->do_upload('uploadreport'.$id))

        {

            return array('status' => false, 'error' => $this->upload->display_errors());

        }

        else

        {

            $data = $this->upload->data();



            $file_name = $data['file_name'];



            $file_type = $data['file_type'];



            $file_size = $data['file_size'];



            $array = array(



                'status'    => true,



                'error'       => '',



                'file_name' => $file_name,



                'file_type' => $file_type,



                'file_size' => $file_size



            );



            return $array;

        }*/

    }

}