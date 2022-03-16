<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Tugas extends MY_Controller {



    function Tugas()

    {

        parent::__construct();

        $this->load->model('tugas_mod');

        $this->load->model('today_mod');

        $this->clear_cache();

    }


    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
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

                redirect(base_url().'tugas');

            }

        }

        

    }



    function index()

    {

        $this->cek_login();
        if ($this->session->userdata('rule') == 1) {

                redirect(base_url().'tugas/approval');

        }

        $ambilid = $this->session->userdata('user_id');

        

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');

		

	    $this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'required');

        /*$this->form_validation->set_rules('tanggal_akhir', 'Sampai Tanggal', 'required');*/

	    $this->form_validation->set_rules('alasan', 'Alasan', 'required');

        

        $data['msg']='';

        if ($this->form_validation->run() == TRUE)

        {

            $tanggalmulai = $this->input->post("tanggal_mulai");

            $tanggalakhir = $this ->input->post("tanggal_akhir");

            if($tanggalakhir == ''){
                $tanggalakhir = $tanggalmulai;
            }

            $alasan = $this->input->post("alasan");

            $approve = $this->input->post("approve");

            $id_user = $this->session->userdata('user_id');

            

                $add_data = array(

                    'tanggal_mulai' => $tanggalmulai,

                    'tanggal_akhir'=> $tanggalakhir,

                    'alasan' => $alasan,

                    'approved' => $approve,

                    'id_user' => $id_user

                ); 

                $tambah_tugas = $this->tugas_mod->add($add_data); 

                if ($tambah_tugas != 0){

                    //PERHITUNGAN AMBIL TANGGAL DARI TEAMLIST DAN MENJUMLAHKAN DENGAN YANG BARU DIINPUT

                    /*$tanggalawal = date_create(date('Y-m-d', strtotime($tanggalmulai)));

                    $tanggalterakhir = date_create(date('Y-m-d', strtotime($tanggalakhir)));

                    $hitungtanggal = date_diff($tanggalawal, $tanggalterakhir);

                    $hitungtugas = (int)$data['jumlahtotaltugas'] + $hitungtanggal->d + 1;

                    $addtugasuser = array('tugas' => $hitungtugas);

                    $this->tugas_mod->add_tugas_touser($addtugasuser,$ambilid);*/

                    redirect('tugas');

                }

                else{

                    $data['msg'] = "error";

                }

                



        }



        

        $data['ambil_tugas'] = $this->tugas_mod->get_tugas(null,$rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);



    	$this->load->view('tugas', $data);

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



function detil_tugas () {

    $this->cek_login();

    $ambilid = $this->session->userdata('user_id');

    $ambilnama = $this->session->userdata('full_name');



    $where=array('id_user' => $ambilid);



    $id = $this->input->get('per_page');



    $url = '?';





    $config['base_url'] = base_url(FALSE).'tugas/detil_tugas?';



    $config['total_rows'] = $this->tugas_mod->get_tugas(null,true,$where);



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



    $data['namauser'] = $ambilnama;



    $data['datacount'] = $this->tugas_mod->get_tugas(null,true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['ambil_tugas'] = $this->tugas_mod->get_tugas(null,false,$where,true,$skip,$take);





    /*$data['ambil_sakit'] = $this->sakit_mod->get_sakit($rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);*/



    $this->load->view('tugas_detil',$data);

}



function approval(){

    $this->cek_rule();

    $where=null;

    $searchname = null;
    if (!empty($this->input->get('searchname'))) {
        $searchname = array('ds_users.name' => $this->input->get('searchname'));        
    }

    if (!empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array('ds_tugas.tanggal_mulai' => '-'.$this->input->get('bulan').'-');

    }
    elseif (empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_tugas.tanggal_mulai' => $this->input->get('tahun').'-');
    }
    elseif (!empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_tugas.tanggal_mulai' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
    }

    $id = $this->input->get('per_page');



    $url = '?';





    $config['base_url'] = base_url(FALSE).'tugas/approval?searchname='.$this->input->get('searchname').'&bulan='.$this->input->get('bulan');



    $config['total_rows'] = $this->tugas_mod->get_tugas_all($searchname,true,$where);



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



    /*$data['namauser'] = $ambilnama;*/



    $data['datacount'] = $this->tugas_mod->get_tugas_all($searchname,true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['ambil_tugas'] = $this->tugas_mod->get_tugas_all($searchname,false,$where,true,$skip,$take);





    /*$data['ambil_sakit'] = $this->sakit_mod->get_sakit($rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);*/



    $this->load->view('tugas_admin',$data);

}



function approve(){

    $id = $this->input->get('a');

    $data = $this->input->get('x');

    $idu = $this->input->get('u');

    $datet = $this->input->get('datet');

    $alasan = $this->input->get('alasan');

    $now = date_now(true);

    $now_id = date_utc($now);

    $punch_date = format_date($now_id, "Y-m-d");

    $punch_time = format_date($now_id, "H:i:s");  

    $today = $this->today_mod->get($idu,$datet);

    if ($id != null) {

        if ($data != null) {
            
            if(!$today){

                $data_add = array(

                    'user_id' => $idu,

                    'punch_date' => $datet,

                    'punch_in' => '08:00:00',
                    
                    'punch_out' => '17:00:00',
                    
                    'report' => '<b>Tugas :</b> '.$alasan,

                    'created' => $now,

                    'modified' => $now

                );

                $data_update = array('approved' => $data);
                
                $this->today_mod->add($data_add);
                $this->tugas_mod->update_status($data_update,$id); 

            }else{

                $data_add = array(

                    'report' => '<b>Tugas :</b> '.$alasan

                );

                $data_update = array('approved' => $data);
                
                $this->today_mod->update($data_add,$today->id);
                $this->tugas_mod->update_status($data_update,$id); 

            }
            
    
                redirect(base_url().'tugas/approval');
            

        }

        else{redirect(base_url().'tugas');}

    }

    else{redirect(base_url().'tugas');}

}



function reject(){

    $id = $this->input->get('a');

    $data = $this->input->get('x');

    if ($id != null) {

        if ($data != null) {

            $data_update = array('approved' => $data);



            $this->tugas_mod->update_status($data_update,$id);



            redirect(base_url().'tugas/approval');

        }

        else{redirect(base_url().'tugas');}

    }

    else{redirect(base_url().'tugas');}

}
}





