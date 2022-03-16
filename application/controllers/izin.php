<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Izin extends MY_Controller {



    function Izin()

    {

        parent::__construct();

        $this->load->model('izin_mod');

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

                redirect(base_url().'izin');

            }

        }

        

    }



    function index()

    {

        $this->cek_login();
        if ($this->session->userdata('rule') == 1) {

                redirect(base_url().'izin/approval');

        }

        $ambilid = $this->session->userdata('user_id');

        //START HITUNG TOTAL IZIN

        $jumlahizin = $this->izin_mod->get_izin(null,false,array('id_user' => $ambilid),false);

        $dataizin = $jumlahizin;

        $data['jumlahtotalizin'] = 0;

        if (!empty($dataizin)) {

            $i = 1;

            foreach ($dataizin as $value) {

                $awal[$i] = date_create(date('Y-m-d', strtotime($value['tanggal_mulai'])));

                if (!empty($value['tanggal_akhir'])) {

                    $akhir[$i] = date_create(date('Y-m-d', strtotime($value['tanggal_akhir'])));

                }

                elseif (empty($value['tanggal_akhir'])) {

                    $akhir[$i] = date_create(date('Y-m-d', strtotime($value['tanggal_mulai'])));

                }

                

                $diff[$i] = date_diff( $awal[$i], $akhir[$i] );

                

                if ($value['approved'] == 1) {

                    $a[$i] = $diff[$i]->d + 1;

                }

                else{

                    $a[$i] = 0;

                }

                $i++;

            }

        $x = array_sum($a);

        $data['jumlahtotalizin'] = $x;

        }

        //END HITUNG TOTAL IZIN

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');

		

	    $this->form_validation->set_rules('jam_mulai', 'Tanggal Mulai', 'required');

        $this->form_validation->set_rules('jam_akhir', 'Sampai Tanggal', 'required');

	    $this->form_validation->set_rules('alasan', 'Alasan', 'required');

        

        $data['msg']='';

        if ($this->form_validation->run() == TRUE)

        {

            // $tanggalmulai = $this->input->post("tanggal_mulai");

            // $tanggalakhir = $this ->input->post("tanggal_akhir");

            $start_time = $this->input->post("jam_mulai");
            $end_time = $this->input->post("jam_akhir");
            $alasan = $this->input->post("alasan");
            $approve = $this->input->post("approve");
            $id_user = $this->session->userdata('user_id');

                $add_data = array(

                    // 'tanggal_mulai' => $tanggalmulai,

                    // 'tanggal_akhir'=> $tanggalakhir,
                    'start_time' => $start_time,

                    'end_time' => $end_time,

                    'alasan' => $alasan,

                    'approved' => $approve,

                    'id_user' => $id_user

                ); 

                $tambah_izin = $this->izin_mod->add($add_data);
                
                // $add_tm = array(
                //     'user_id' => user_id(),
                //     'punch_date' => $tanggalmulai,
                //     'punch_in' => '00:00:00',
                //     'punch_out' => '00:00:00',
                //     'report' =>  $alasan.'<br>'.' IZIN '.' ( Dari Tanggal '.$tanggalmulai.' Sampai tanggal '.$tanggalakhir.' )',
                //     'created' => date('Y-m-d H:i:s'),
                // );
                // $where_tm = array(
                //     'report' => $alasan.'<br>'.' IZIN '.' ( Dari Tanggal '.$tanggalmulai.' Sampai tanggal '.$tanggalakhir.' )',
                // );
                // if($tanggalmulai != date('Y-m-d')){
                //     $tambah_tm = $this->today_mod->add_tm($add_tm);
                // }elseif($tanggalmulai = date('Y-m-d')){
                //     $update_tm = $this->today_mod->update_tm($where_tm);
                // }

                if ($tambah_izin != 0){

                    //PERHITUNGAN AMBIL TANGGAL DARI TEAMLIST DAN MENJUMLAHKAN DENGAN YANG BARU DIINPUT

                    /*$tanggalawal = date_create(date('Y-m-d', strtotime($tanggalmulai)));

                    $tanggalterakhir = date_create(date('Y-m-d', strtotime($tanggalakhir)));

                    $hitungtanggal = date_diff($tanggalawal, $tanggalterakhir);

                    $hitungizin = (int)$data['jumlahtotalizin'] + $hitungtanggal->d + 1;

                    $addizinuser = array('izin' => $hitungizin);

                    $this->izin_mod->add_izin_touser($addizinuser,$ambilid);*/

                    redirect('izin');

                }

                else{

                    $data['msg'] = "error";

                }

        }



        

        $data['ambil_izin'] = $this->izin_mod->get_izin(null,$rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);



    	$this->load->view('izin', $data);

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



function detil_izin () {

    $this->cek_login();

    $ambilid = $this->session->userdata('user_id');

    $ambilnama = $this->session->userdata('full_name');



    $where=array('id_user' => $ambilid);



    $id = $this->input->get('per_page');



    $url = '?';





    $config['base_url'] = base_url(FALSE).'izin/detil_izin?';



    $config['total_rows'] = $this->izin_mod->get_izin(null,true,$where);



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



    $data['datacount'] = $this->izin_mod->get_izin(null,true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['ambil_izin'] = $this->izin_mod->get_izin(null,false,$where,true,$skip,$take);





    /*$data['ambil_sakit'] = $this->sakit_mod->get_sakit($rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);*/



    $this->load->view('izin_detil',$data);

}



function approval(){

    $this->cek_rule();

    $where=null;

    $searchname = null;
    if (!empty($this->input->get('searchname'))) {
        $searchname = array('ds_users.name' => $this->input->get('searchname'));        
    }

    if (!empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array('ds_izin.tanggal_mulai' => '-'.$this->input->get('bulan').'-');

    }
    elseif (empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_izin.tanggal_mulai' => $this->input->get('tahun').'-');
    }
    elseif (!empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_izin.tanggal_mulai' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
    }

    $id = $this->input->get('per_page');



    $url = '?';





    $config['base_url'] = base_url(FALSE).'izin/approval?searchname='.$this->input->get('searchname').'&bulan='.$this->input->get('bulan');



    $config['total_rows'] = $this->izin_mod->get_izin_all($searchname,true,$where);



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



    $data['datacount'] = $this->izin_mod->get_izin_all($searchname,true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['ambil_izin'] = $this->izin_mod->get_izin_all($searchname,false,$where,true,$skip,$take);





    /*$data['ambil_sakit'] = $this->sakit_mod->get_sakit($rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);*/



    $this->load->view('izin_admin',$data);

}



function approve(){

    $id = $this->input->get('a');

    $data = $this->input->get('x');

    $us = $this->input->get('u');

    if ($id != null) {

        if ($data != null) {

            //AMBIL SEMUA DATA YANG DI APPROVE DAN MENJUMLAHKAN HARINYA
            $ambilizinsemua = $this->izin_mod->get_izin(null,false,array('id_user' => $this->session->userdata('user_id')));
            $i = 1;
            foreach ($ambilizinsemua as $value) {
                $pertama[$i] = date_create(date('d F Y',$value['tanggal_mulai']));
                if (!empty($value['tanggal_akhir'])) {
                    $terakhir[$i] = date_create(date('d F Y',$value['tanggal_akhir']));
                }
                elseif (empty($value['tanggal_akhir'])) {
                    $terakhir[$i] = date_create(date('d F Y',$value['tanggal_mulai']));
                }
                $itungtanggalawal[$i] = date_diff($pertama[$i],$terakhir[$i]);

                if ($value['approved'] == 1) {

                    $a[$i] = $itungtanggalawal[$i]->d + 1;

                }

                else{

                    $a[$i] = 0;

                }
                
                $i++;
            }

            $x = array_sum($a);

            $jumlahtotalizin = $x;

            //AMBIL DATA YANG BARU SAJA DI APPROVE DAN MENJUMLAHKANNYA DENGAN SEMUA YANG TELAH DI APPROVE
            $ambilizin = $this->izin_mod->get_izin(null,false,array('id'=>$id));


            $tanggalawal = date_create(date('Y-m-d', strtotime($ambilizin[0]['tanggal_mulai'])));

            if (!empty($ambilizin[0]['tanggal_akhir'])) {
                $tanggalterakhir = date_create(date('Y-m-d', strtotime($ambilizin[0]['tanggal_akhir'])));
            }
            elseif (empty($ambilizin[0]['tanggal_akhir'])) {
                $tanggalterakhir = date_create(date('Y-m-d', strtotime($ambilizin[0]['tanggal_mulai'])));
            }

            

            $hitungtanggal = date_diff($tanggalawal, $tanggalterakhir);

            $hitungizin = $hitungtanggal->d + 1 + (int)$jumlahtotalizin;

            $addizinuser = array('izin' => $hitungizin);
            //UPDATE DATA KE ds_user
            $this->izin_mod->add_izin_touser($addizinuser,$ambilizin[0]['id_user']);
            //DONE

            $data_update = array('approved' => $data);
            // $data_update_last = array(
    
            //     'status_absen' => 3

            // );
            $this->izin_mod->update_status($data_update,$id);
            // $this->today_mod->update_last($data_update_last,$us);
            
            

            



            redirect(base_url().'izin/approval');

        }

        else{redirect(base_url().'izin');}

    }

    else{redirect(base_url().'izin');}

}



function reject(){

    $id = $this->input->get('a');

    $data = $this->input->get('x');

    if ($id != null) {

        if ($data != null) {

            $data_update = array('approved' => $data);



            $this->izin_mod->update_status($data_update,$id);



            redirect(base_url().'izin/approval');

        }

        else{redirect(base_url().'izin');}

    }

    else{redirect(base_url().'izin');}

}
}





