<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dashboard extends MY_Controller {



    function Dashboard()

    {

        parent::__construct();

        $this->load->helper('url');

        $this->load->model('teamlist_mod');
        $this->load->model('cuti_mod');
        $this->load->model('izin_mod');
        $this->load->model('report_mod');
        $this->load->model('sakit_mod');
        $this->load->model('today_mod');

        $this->clear_cache();

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

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
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

            if ($rule == 1) {

                

            }else if($rule == 2){
                
            }else{
                redirect(base_url().'dashboard/team/'.$this->session->userdata('user_id').'/'.url_title($this->session->userdata('full_name')));
            }

        }

        

    }

    function index()
    {
    	$this->cek_rule();
    	
    	$user_id = $this->session->userdata('user_id');
    	
    	$user = $this->teamlist_mod->get_byuid($user_id);
        $data['info'] = $user;
        
    	$where = null;
        $id = $this->input->get('per_page');
        $url = '?';
        $config['base_url'] = base_url(FALSE).'dashboard?';
        $config['total_rows'] = $this->teamlist_mod->get_teamlist(true,$where);
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
        $data['datacount'] = $this->teamlist_mod->get_teamlist(true,$where);
        $data['pagination'] = $this->pagination->create_links();
        $data['a'] = $this->teamlist_mod->get_teamlist(false,$where,true,$skip,$take);
        
        $ambilpenilaian = $this->teamlist_mod->get_penilaian($user_id);

        $data['penilaian'] = '';

        if (!empty($ambilpenilaian)) {

            $data['penilaian'] = $ambilpenilaian;

        }
        
    	$this->load->view('dashboard_hrd',$data);

    }

    function team($user_id = 0){

        $this->cek_login();
        $this->clear_cache();

        $data['eitsalah'] ='';
        $pesanerror = $this->input->get('x');
        if (!empty($pesanerror)) {
            $data['eitsalah'] ='Password berbeda';
        }

    	$user = $this->teamlist_mod->get_byuid($user_id);

        if(!$user){

            redirect(base_url());

        }
    	if ($user->rule == 1) {

            $data['rule'] = 'BOS';

        }

        elseif ($user->rule == 2) {

            $data['rule'] = 'HRD';

        }

        elseif ($user->rule == 3) {

            $data['rule'] = 'STAFF';

        }

        elseif ($user->rule == 4) {

            $data['rule'] = 'CLIENT';

        }

        /*$cuti = $this->teamlist_mod->get_cuti($user_id);*/

        $data['info'] = $user;

        $data['sakit'] = $this->sakit_mod->get_sakit(null,false,array('id_user' => $user_id));
        $data['jumlahsakit'] = $this->sakit_mod->get_sakit(null,true,array('id_user' => $user_id));

        $data['cuti'] = $this->cuti_mod->get_cuti(null,false,array('id_user' => $user_id, 'approved' => 1));
        $data['jumlahcuti'] = $this->cuti_mod->get_cuti(null,true,array('id_user' => $user_id, 'approved' => 1));

        $data['izin'] = $this->izin_mod->get_izin(null,false,array('id_user' => $user_id, 'approved' => 1));
        $data['jumlahizin'] = $this->izin_mod->get_izin(null,true,array('id_user' => $user_id, 'approved' => 1));

        $data['project'] = $this->report_mod->get_project(null,false,array('user_id' => $user_id));
        $data['report'] = $this->report_mod->get_report(false,array('id_user' => $user_id));
        $data['jumlahproject'] = $this->report_mod->get_project(null,true,array('user_id' => $user_id));
        $data['jumlahreport'] = $this->report_mod->get_report(true,array('id_user' => $user_id));
        $data['sisacuti'] = $this->teamlist_mod->get_cuti($user_id);
        $data['userId'] = $user_id;

        $ambilpenilaian = $this->teamlist_mod->get_penilaian($user_id);

        $data['penilaian'] = '';

        if (!empty($ambilpenilaian)) {

            $data['penilaian'] = $ambilpenilaian;

        }

    	$this->load->view('dashboard_team',$data);
    }

}