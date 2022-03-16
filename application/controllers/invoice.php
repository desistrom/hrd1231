<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Invoice extends MY_Controller
{
	
	function invoice()
	{
		parent::__construct();
		$this->load->model('client_mod');
		$this->load->model('produk_mod');
		$this->load->model('penawaran_mod');
		$this->load->model('tagihan_mod');
		$this->load->model('kelompok_produk_mod');

		$this->clear_cache();
	}

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

	function index(){
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');
        $this->form_validation->set_rules('client', 'Client Name', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $data['msg'] = '';
        if ($this->form_validation->run() == TRUE){
        	$client = $this->input->post('client');
        	$type = $this->input->post('type');
        	$today = date('d');
        	$tahun = date('Y');
        	if ($type == '13') {
        		$jumlahpenawaran = $this->penawaran_mod->get_penawaran(true);
        		$namasurat = 'DS/'.$today.'/'.$jumlahpenawaran.'/'.$tahun;
        		$add_data = array(
        			'id_client' => $client,
        			'penawaran_name' => $namasurat
        		);

        		$i = $this->penawaran_mod->add($add_data);
        		redirect(base_url().'invoice/penawaran/'.$i);
        	}
        	elseif ($type == '25') {
        		$jumlahtagihan = $this->tagihan_mod->get_tagihan(true);
        		$namasurat = 'DS/'.$today.'/'.$jumlahtagihan.'/'.$tahun;
        		$add_data = array(
        			'id_client' => $client,
        			'tagihan_name' => $namasurat
        		);

        		$i = $this->tagihan_mod->add($add_data);
        		redirect(base_url().'invoice/tagihan/'.$i);
        	}

        }
        $data['client'] = $this->client_mod->get_client();
        $data['produk'] = $this->produk_mod->get_produk();

        $this->load->view('invoice_add',$data);
	}

	function penawaran($id=0){
		/*if (isset($this->input->get('row'))) {
			$jumlahbaris = int($this->input->get('row'));
		}
		else {
			$jumlahbaris = int('0');
		}*/
		$data['produk'] = $this->produk_mod->get_produk();
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');
		$row = $this->penawaran_mod->get($id);
		if (!$row) {
			redirect(base_url().'invoice');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $data['msg'] = '';
		if ($this->form_validation->run() == TRUE){
			$nama = $this->input->post('nama');
			$item = $this->input->post('item');
			$kuantitas = $this->input->post('kuantitas');
			$harga = $this->input->post('harga');
			$diskon = $this->input->post('diskon');
			$deskripsi = $this->input->post('deskripsi');
			$grup = $this->input->post('grup');

			foreach ($grup as $key => $valueg) {
				$g[] = $valueg;
			}
			foreach ($item as $key => $valuei) {
				$i[] = $valuei;
			}
			foreach ($kuantitas as $key => $valuek) {
				$k[] = $valuek;
			}
			foreach ($harga as $key => $valueh) {
				$h[] = $valueh;
			}
			foreach ($diskon as $key => $valued) {
				$d[] = $valued;
			}
			foreach ($deskripsi as $key => $valuedesc) {
				$desc[] = $valuedesc;
			}



			$produk = $this->input->post('produk');
			if (!empty($produk)) {
				$produks = $this->produk_mod->get_produk(false,array('ds_produk.id' => $produk));
				$g[] = $produks[0]['nama_kelompok'];
				$i[] = $produks[0]['nama_produk'];
				$k[] = '';
				$h[] = $produks[0]['harga'];
				$d[] = '';
				$desc[] = $produks[0]['keterangan_produk'];
			}
			$nol = 0;
			$json = '[';
			for ($jumlah=count($i); $nol <= $jumlah; $nol++) {
				if(!empty($i[$nol])){
				$json .= '{"item":"'.$i[$nol].'","kuantitas":"'.$k[$nol].'","harga":"'.$h[$nol].'","diskon":"'.$d[$nol].'","deskripsi":"'.$desc[$nol].'","grup":"'.$g[$nol].'"},';
				}
			}
			$json .= '{}]';

			//$json = '[{"item":"'.$item.'","kuantitas":"'.$kuantitas.'","harga":"'.$harga.'","diskon":"'.$diskon.'","deskripsi":"'.$deskripsi.'","grup":"'.$grup.'"},{}]';

			$update_data = array(
				'penawaran_name' => $nama,
				'item' => $json
			);

			$this->penawaran_mod->update($update_data,$id);
			redirect(base_url().'invoice/penawaran/'.$id);
		}
		/*$data['jumlahbaris'] = $jumlahbaris;*/
		$data['row'] = $this->penawaran_mod->get_penawaran(false,array('ds_penawaran.id'=>$id));
		$this->load->view('invoice_penawaran',$data);
	}

	function penawaran_list(){
		$data['row'] = $this->penawaran_mod->get_penawaran();
		$this->load->view('invoice_penawaran_list',$data);
	}

	function tagihan($id=0){
		/*if (isset($this->input->get('row'))) {
			$jumlahbaris = int($this->input->get('row'));
		}
		else {
			$jumlahbaris = int('0');
		}*/
		$data['produk'] = $this->produk_mod->get_produk();
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');
		$row = $this->tagihan_mod->get($id);
		if (!$row) {
			redirect(base_url().'invoice');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $data['msg'] = '';
		if ($this->form_validation->run() == TRUE){
			$nama = $this->input->post('nama');
			$item = $this->input->post('item');
			$kuantitas = $this->input->post('kuantitas');
			$harga = $this->input->post('harga');
			$diskon = $this->input->post('diskon');
			$deskripsi = $this->input->post('deskripsi');
			$grup = $this->input->post('grup');

			foreach ($grup as $key => $valueg) {
				$g[] = $valueg;
			}
			foreach ($item as $key => $valuei) {
				$i[] = $valuei;
			}
			foreach ($kuantitas as $key => $valuek) {
				$k[] = $valuek;
			}
			foreach ($harga as $key => $valueh) {
				$h[] = $valueh;
			}
			foreach ($diskon as $key => $valued) {
				$d[] = $valued;
			}
			foreach ($deskripsi as $key => $valuedesc) {
				$desc[] = $valuedesc;
			}



			$produk = $this->input->post('produk');
			if (!empty($produk)) {
				$produks = $this->produk_mod->get_produk(false,array('ds_produk.id' => $produk));
				$g[] = $produks[0]['nama_kelompok'];
				$i[] = $produks[0]['nama_produk'];
				$k[] = '';
				$h[] = $produks[0]['harga'];
				$d[] = '';
				$desc[] = $produks[0]['keterangan_produk'];
			}
			$nol = 0;
			$json = '[';
			for ($jumlah=count($i); $nol <= $jumlah; $nol++) {
				if(!empty($i[$nol])){
				$json .= '{"item":"'.$i[$nol].'","kuantitas":"'.$k[$nol].'","harga":"'.$h[$nol].'","diskon":"'.$d[$nol].'","deskripsi":"'.$desc[$nol].'","grup":"'.$g[$nol].'"},';
				}
			}
			$json .= '{}]';

			//$json = '[{"item":"'.$item.'","kuantitas":"'.$kuantitas.'","harga":"'.$harga.'","diskon":"'.$diskon.'","deskripsi":"'.$deskripsi.'","grup":"'.$grup.'"},{}]';

			$update_data = array(
				'tagihan_name' => $nama,
				'item' => $json
			);

			$this->tagihan_mod->update($update_data,$id);
			redirect(base_url().'invoice/tagihan/'.$id);
		}
		/*$data['jumlahbaris'] = $jumlahbaris;*/
		$data['row'] = $this->tagihan_mod->get_tagihan(false,array('ds_tagihan.id'=>$id));
		$this->load->view('invoice_tagihan',$data);
	}

	function tagihan_list(){
		$data['row'] = $this->tagihan_mod->get_tagihan();
		$this->load->view('invoice_tagihan_list',$data);
	}

	function send_mail(){
		$invoice = $this->input->get('id');
        $type = $this->input->get('type');

        if ($type == '13') {
        	$isipdf['row'] = $this->penawaran_mod->get_penawaran(false,array('ds_penawaran.id'=>$invoice));
        }
        elseif ($type == '25') {
        	$isipdf['row'] = $this->tagihan_mod->get_tagihan(false,array('ds_tagihan.id'=>$invoice));
        }

        
	}

	function pdf(){
			$invoice = $this->input->get('id');
        	$type = $this->input->get('type');

        	if ($type == '13') {
        		$isipdf['row'] = $this->penawaran_mod->get_penawaran(false,array('ds_penawaran.id'=>$invoice));
        	}
        	elseif ($type == '25') {
        		$isipdf['row'] = $this->tagihan_mod->get_tagihan(false,array('ds_tagihan.id'=>$invoice));
        	}
        	
        	/*$isipdf['produk'] = $this->produk_mod->get_produk(false,array('ds_produk.id' => $produk));*/

	        //load the view and saved it into $html variable
	        $html=$this->load->view('invoice_pdf', $isipdf, true);
	 
	        //this the the PDF filename that user will get to download
	        $pdfFilePath = "TESTER_PDF.pdf";
	 
	        //load mPDF library
	        $this->load->library('m_pdf');
	 
	       //generate the PDF from the given html
	        $this->m_pdf->pdf->WriteHTML($html);
	 
	        //download it.
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");  
	}

	function nyeh(){
		$client = $this->input->get('client');
        	$produk = $this->input->get('produk');
        	$isipdf['client'] = $this->client_mod->get_client(false,array('id' => $client));
        	$isipdf['produk'] = $this->produk_mod->get_produk(false,array('ds_produk.id' => $produk));
		$this->load->view('invoice_pdf', $isipdf);
	}

}