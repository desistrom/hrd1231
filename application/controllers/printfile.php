<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Printfile extends MY_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('penilaian_mod');

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

    function printdata($id){
    	$this->load->library('pdf');
    	$this->cek_login();

        $i = $this->penilaian_mod->get_penilaian_byid($id);

        if (!$i) {

            redirect(base_url().'dashboard');

        }

        $this->pdf->AddPage();

        $tbl = '<style>
        			td{
        				text-align:center;
        			}
        			th{
        				text-align:center;
        			}
        		</style>
        		<h1>PENILAIAN '.$i->name.'</h1>
        		<table>

                          <tr>

                            <th>QUESTION</th>

                            <th>ANSWER/POINT</th>

                          </tr>

                          <tr>

							               <td>

                              <h5>Pemahaman pembuatan rencana / program kerja sesuai jabatannya</h5>

                            </td>

							               <td>

                              <h5>'.$i->pemahaman_tugas1.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Pemahaman terhadap proses / alur bisnis di unit kerjanya</h5>

                            </td>

                             <td>

                              <h5>'.$i->pemahaman_tugas2.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Pemahaman terhadap prosedur standar pelayanan konsumen</h5>

                            </td>

                             <td>

                              <h5>'.$i->pemahaman_tugas3.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Pemahaman terhadap prosedur standar kebersihan lingkungan kerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->pemahaman_tugas4.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Pemahaman tentang strategi pengembangan diri</h5>

                            </td>

                             <td>

                              <h5>'.$i->pemahaman_tugas5.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Pemahaman terhadap nilai-nilai budaya perusahaan (GROUP)</h5>

                            </td>

                             <td>

                              <h5>'.$i->pemahaman_tugas6.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Ketepatan waktu pelaksanaan rencana kerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->pelaksanaan_tugas1.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kecepatan waktu pelaksanaan kerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->pelaksanaan_tugas2.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Ketelitian dalam pengerjaan tugas</h5>

                            </td>

                             <td>

                              <h5>'.$i->pelaksanaan_tugas3.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kerapihan dalam penataan arsip / dokumen pekerjaan</h5>

                            </td>

                             <td>

                              <h5>'.$i->pelaksanaan_tugas4.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Ketahanan dalam bekerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->pelaksanaan_tugas5.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Sistematika kerja (prosedural – sesuai SOP)</h5>

                            </td>

                             <td>

                              <h5>'.$i->pelaksanaan_tugas6.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kebugaran dan kebersihan diri</h5>

                            </td>

                             <td>

                              <h5>'.$i->penampilan_diri1.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kerapihan dalam berpakaian</h5>

                            </td>

                             <td>

                              <h5>'.$i->penampilan_diri2.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Semangat kerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->sikap_kerja1.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kepatuhan menjalankan peraturan perusahaan</h5>

                            </td>

                             <td>

                              <h5>'.$i->sikap_kerja2.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kepatuhan terhadap instruksi kerja unit / pimpinan</h5>

                            </td>

                             <td>

                              <h5>'.$i->sikap_kerja3.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Penyesuaian diri terhadap lingkungan kerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->sikap_kerja4.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kepedulian terhadap lingkungan kerja</h5>

                            </td>

                             <td>

                              <h5>'.$i->sikap_kerja5.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>Kedisiplinan</h5>

                            </td>

                             <td>

                              <h5>'.$i->sikap_kerja6.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>CATATAN KHUSUS</h5>

                            </td>

                             <td>

                              <h5>'.$i->catatan_khusus.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>AREA YANG HARUS DIPERBAIKI</h5>

                            </td>

                             <td>

                              <h5>'.$i->area_ygharusdiperbaiki.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>AREA YANG HARUS DIPERTAHANKAN</h5>

                            </td>

                             <td>

                              <h5>'.$i->area_ygharusdipertahankan.'</h5>

                            </td>

                          </tr>

                          <tr>

                             <td>

                              <h5>REKOMENDASI</h5>

                            </td>

                             <td>

                              <h5>'.$i->rekomendasi.'</h5>

                            </td>

                          </tr>
                        </table>';

		$this->pdf->writeHTML($tbl, true, false, false, false);
		$y = $this->pdf->Output('PENILAIAN', 'I');  
		$this->pdf->header("Content-type:application/pdf");
		echo $y;
        
    }
}