<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Cuti extends MY_Controller {



    function Cuti()

    {

        parent::__construct();



        $this->load->model('cuti_mod');
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

                redirect(base_url().'cuti');

            }

        }

        

    }



    function index()

    {



        $this->cek_login();

        if ($this->session->userdata('rule') == 1) {

                redirect(base_url().'cuti/approval');

        }

        $data['jatahcuti'] = $this->cuti_mod->get_jumlah_cuti($this->session->userdata('user_id'));

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
                //Pengurangan Jatah Cuti
                $jatahcuti = (int)$data['jatahcuti']->cuti;
                $mulaicuti = date_create(date('Y-m-d', strtotime($tanggalmulai)));
                if (!empty($tanggalakhir)) {
                    $akhircuti = date_create(date('Y-m-d', strtotime($tanggalakhir)));
                }
                else{
                    $akhircuti = date_create(date('Y-m-d', strtotime($tanggalmulai)));
                }
                $c = date_diff($mulaicuti,$akhircuti);
                $kurangcuti = $jatahcuti - ($c->d + 1);

                if ($kurangcuti < 0) {
                    $data['msg'] = "Sisa Cuti Anda Kurang";
                }
                else{
                    $tambah_cuti = $this->cuti_mod->add($add_data);

                    if ($tambah_cuti != 0){
                        
                        $this->cuti_mod->update_jumlah_cuti(array('cuti' => $kurangcuti),$this->session->userdata('user_id'));
                        //End Pengurangan Jatah Cuti
                        redirect('cuti');

                    }

                    else{

                        $data['msg'] = "error";

                    }
                }

                               

        }

    //START HITUNG TOTAL CUTI

    $ambilid = $this->session->userdata('user_id');

    $jumlahcuti = $this->cuti_mod->get_cuti(null,false,array('id_user' => $ambilid),false);

    $datacuti= $jumlahcuti;

    $data['jumlahtotalcuti'] = 0;

    if (!empty($datacuti)) {

        $i = 1;

        foreach ($datacuti as $value) {

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

        $data['jumlahtotalcuti'] = $x;

    }



   

    $data['ambil_cuti'] = $this->cuti_mod->get_cuti(null,$rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);

    $this->load->view('cuti',$data);





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



function detil_cuti () {

    $this->cek_login();

    $ambilid = $this->session->userdata('user_id');

    $ambilnama = $this->session->userdata('full_name');



    $where=array('id_user' => $ambilid);



    $id = $this->input->get('per_page');



    $url = '?';





    $config['base_url'] = base_url(FALSE).'cuti/detil_cuti?';



    $config['total_rows'] = $this->cuti_mod->get_cuti(null,true,$where);



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



    $data['datacount'] = $this->cuti_mod->get_cuti(null,true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['ambil_cuti'] = $this->cuti_mod->get_cuti(null,false,$where,true,$skip,$take);



    /*$data['ambil_sakit'] = $this->sakit_mod->get_sakit($rows=false,$where=array('id_user' => $ambilid),$limit=true,$skip=0,$take=5);*/



    $this->load->view('cuti_detil',$data);



}



function approval(){

    $this->cek_rule();

    $where =null;
    $searchname = null;
    if (!empty($this->input->get('searchname'))) {
        $searchname = array('ds_users.name' => $this->input->get('searchname'));        
    }

    
    if (!empty($this->input->get('bulan')) && empty($this->input->get('tahun'))) {
        $searchname = array('ds_cuti.tanggal_mulai' => '-'.$this->input->get('bulan').'-');

    }
    elseif (empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_cuti.tanggal_mulai' => $this->input->get('tahun').'-');
    }
    elseif (!empty($this->input->get('bulan')) && !empty($this->input->get('tahun'))) {
        $searchname = array('ds_cuti.tanggal_mulai' => $this->input->get('tahun').'-'.$this->input->get('bulan').'-');
    }

    $id = $this->input->get('per_page');



    $url = '?';




    
    $config['base_url'] = base_url(FALSE).'cuti/approval?searchname='.$this->input->get('searchname').'&bulan='.$this->input->get('bulan');


    $config['total_rows'] = $this->cuti_mod->get_cuti_all($searchname,true,$where);



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



    $data['datacount'] = $this->cuti_mod->get_cuti_all($searchname,true,$where);



    $data['pagination'] = $this->pagination->create_links();



    $data['row'] = $this->cuti_mod->get_cuti_all($searchname,false,$where,true,$skip,$take);



    $this->load->view('cuti_admin', $data);

}



function approve(){

    $id = $this->input->get('a');

    $data = $this->input->get('x');

    if ($id != null) {

        if ($data != null) {

            //AMBIL SEMUA DATA YANG DI APPROVE DAN MENJUMLAHKAN HARINYA
            $ambilcutisemua = $this->cuti_mod->get_cuti(null,false,array('id_user' => $this->session->userdata('user_id')));
            $i = 1;
            foreach ($ambilcutisemua as $value) {
                $pertama[$i] = date_create(date('d F Y',strtotime($value['tanggal_mulai'])));
                if (!empty($value['tanggal_akhir'])) {
                    $terakhir[$i] = date_create(date('d F Y',strtotime($value['tanggal_akhir'])));
                }
                elseif (empty($value['tanggal_akhir'])) {
                    $terakhir[$i] = date_create(date('d F Y',strtotime($value['tanggal_mulai'])));
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

            $jumlahtotalcuti = $x;

            //AMBIL DATA YANG BARU SAJA DI APPROVE DAN MENJUMLAHKANNYA DENGAN SEMUA YANG TELAH DI APPROVE
            $ambilcuti = $this->cuti_mod->get_cuti(null,false,array('id'=>$id));


            $tanggalawal = date_create(date('Y-m-d', strtotime($ambilcuti[0]['tanggal_mulai'])));

            if (!empty($ambilcuti[0]['tanggal_akhir'])) {
                $tanggalterakhir = date_create(date('Y-m-d', strtotime($ambilcuti[0]['tanggal_akhir'])));
            }
            elseif (empty($ambilcuti[0]['tanggal_akhir'])) {
                $tanggalterakhir = date_create(date('Y-m-d', strtotime($ambilcuti[0]['tanggal_mulai'])));
            }

            

            $hitungtanggal = date_diff($tanggalawal, $tanggalterakhir);

            $hitungcuti = $hitungtanggal->d + 1 + (int)$jumlahtotalcuti;

            $addcutiuser = array('cuti' => $hitungcuti);
            //UPDATE DATA KE ds_user
            $this->cuti_mod->add_cuti_touser($addcutiuser,$ambilcuti[0]['id_user']);
            //DONE


            $data_update = array('approved' => $data);
            $this->cuti_mod->update_status($data_update,$id);



            redirect(base_url().'cuti/approval');

        }

        else{redirect(base_url().'cuti');}

    }

    else{redirect(base_url().'cuti');}

}



function reject(){

    $id = $this->input->get('a');

    $data = $this->input->get('x');

    if ($id != null) {

        if ($data != null) {

            $data_update = array('approved' => $data);

            $this->cuti_mod->update_status($data_update,$id);

            $ambilcuti = $this->cuti_mod->get_cuti(null,false,array('id'=>$id));

            //Nambahin lagi total cuti gara - gara pengajuan cutinya di reject
            $ambilsisacuti = $this->cuti_mod->get_jumlah_cuti($ambilcuti[0]['id_user']);

            $a = date_create(date('Y-m-d',strtotime($ambilcuti[0]['tanggal_mulai'])));
            if (!empty($ambilcuti[0]['tanggal_akhir'])) {
                $b = date_create(date('Y-m-d',strtotime($ambilcuti[0]['tanggal_akhir'])));
            }
            else{
                $b = date_create(date('Y-m-d',strtotime($ambilcuti[0]['tanggal_mulai'])));
            }
            $c = date_diff($a,$b);
            $totalsisacuti = $c->d + 1 + $ambilsisacuti->cuti;
            $this->cuti_mod->update_jumlah_cuti(array('cuti' => $totalsisacuti),$ambilcuti[0]['id_user']);

            redirect(base_url().'cuti/approval');

        }

        else{redirect(base_url().'cuti');}

    }

    else{redirect(base_url().'cuti');}

}



}