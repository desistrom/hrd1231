<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Team Detail - Dewanstudio Power Management</title>

  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">

  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/ico/favicon.png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"

  rel="stylesheet">



  <!-- CSS -->

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/app.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/core/menu/menu-types/horizontal-menu.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">



  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/tables/extensions/responsive.dataTables.min.css">

  <!-- END CSS -->



</head>





<body class="horizontal-layout horizontal-menu horizontal-menu-padding content-detached-left-sidebar   menu-expanded"

data-open="click" data-menu="horizontal-menu" data-col="content-detached-left-sidebar">

  

  <!-- fixed-top-->

  <?php $this->load->view('inc/menuluar');?>


  <div class="app-content container center-layout mt-2">

    <div class="content-wrapper">

      <div class="content-header row">

        <div class="content-header-left col-md-12 col-12 mb-2">

          <div>

      			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>PENILAIAN <?=$row->name?></b></h1>

      		</div>

        </div>

      </div>



      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

          <div class="row breadcrumbs-top">

          </div>

          <!-- <h3 class="content-header-title mb-0">Horizontal Forms</h3> -->

        </div>

        <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right pb-xl-2 my-1">

          <?php
            $rule = $this->session->userdata('rule');
            if ($rule == 1 || $rule == 2) {
          ?>
          <a href="<?=base_url()?>printfile/printdata/<?=$row->id?>">

            <button class="btn btn-info round" type="button">PRINT</button>

          </a>

          <a href="<?=base_url()?>penilaian/edit/<?=$row->id?>">

            <button class="btn btn-info round" type="button">EDIT</button>

          </a>
          <?php } ?>
          <a href="<?=base_url()?>">

            <button class="btn btn-info round" type="button"><i class="ft-arrow-left icon-left"></i> Back to list</button>

          </a>

          </div>

        </div>

      </div>



      <div class="content-detached content-right">

        <div class="">

          <section class="row">

            <div class="col-12">

              <div class="card">

                <div class="card-content">

                  <div class="card-body">



                    

                    <div class="table-responsive">

                      <table id="project-bugs-list" class="table table-bordered">

                        <thead>

                          <tr>

                            <th scope="col">QUESTION</th>

                            <th scope="col">ANSWER/POINT</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

							               <th scope="row">

                              <h5>1. Apakah anda suka berolah raga ?</h5>

                            </th>

							               <td>

                              <h5><?=$row->pemahaman_tugas1?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>2. Bagaimana cara anda menjaga kebersihan diri ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pemahaman_tugas2?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>3. Bagaimana pola makan anda setiap hari ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pemahaman_tugas3?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>4. Apakah anda lakukan untuk mengembangkan pendidikan anda ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pemahaman_tugas4?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>5. Sosialisasi dan Beribadah</h5>

                            </th>

                             <td>

                              <h5><?=$row->pemahaman_tugas5?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>6. Apakah yang anda lakukan ketika waktu luang ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pemahaman_tugas6?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>7. Apakah yang anda mengikuti komunitas ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pelaksanaan_tugas1?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>8. Semangat Kerja</h5>

                            </th>

                             <td>

                              <h5><?=$row->pelaksanaan_tugas2?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>9. Bagaimana rencana anda dalam bekerja ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pelaksanaan_tugas3?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>10. Apa passion anda di saat ini ?</h5>

                            </th>

                             <td>

                              <h5><?=$row->pelaksanaan_tugas4?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>11. Perencanaan program kerja sesuai jabatannya</h5>

                            </th>

                             <td>

                              <h5><?=$row->pelaksanaan_tugas5?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>12. Proses alur dari pekerjaan</h5>

                            </th>

                             <td>

                              <h5><?=$row->pelaksanaan_tugas6?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>13. Waktu Pekerjaan</h5>

                            </th>

                             <td>

                              <h5><?=$row->penampilan_diri1?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>14. Ketelitian</h5>

                            </th>

                             <td>

                              <h5><?=$row->penampilan_diri2?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>15. Kerapian dokumen</h5>

                            </th>

                             <td>

                              <h5><?=$row->sikap_kerja1?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>16. Kepedulian terhadap lingkungan kerja atau penyesuaian diri terhadap lingkungan kerja</h5>

                            </th>

                             <td>

                              <h5><?=$row->sikap_kerja2?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>17. Kedisiplinan</h5>

                            </th>

                             <td>

                              <h5><?=$row->sikap_kerja3?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>18. Hubungan Pekerjaan dengan rekan kerja</h5>

                            </th>

                             <td>

                              <h5><?=$row->sikap_kerja4?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>19. Hubungan pekerjaan dengan atasan</h5>

                            </th>

                             <td>

                              <h5><?=$row->sikap_kerja5?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>20. Hubungan Pekerjaan dengan klien</h5>

                            </th>

                             <td>

                              <h5><?=$row->sikap_kerja6?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>CATATAN KHUSUS</h5>

                            </th>

                             <td>

                              <h5><?=$row->catatan_khusus?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>AREA YANG HARUS DIPERBAIKI</h5>

                            </th>

                             <td>

                              <h5><?=$row->area_ygharusdiperbaiki?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>AREA YANG HARUS DIPERTAHANKAN</h5>

                            </th>

                             <td>

                              <h5><?=$row->area_ygharusdipertahankan?></h5>

                            </td>

                          </tr>

                          <tr>

                             <th scope="row">

                              <h5>REKOMENDASI</h5>

                            </th>

                             <td>

                              <h5><?=$row->rekomendasi?></h5>

                            </td>

                          </tr>





                        </tbody>

                      </table>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            </div>

          </section>

        </div>

      </div>

    </div>

  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  

 <!-- Footer -->

  <footer class="footer footer-transparent footer-light navbar-shadow">

    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">

      <span class="float-md-center d-block d-md-inline-block">Copyright &copy; 2018 DEWANSTUDIO, All rights reserved. </span>

    </p>

  </footer>

  <!-- end Footer -->

  

  <!-- JS -->

  <script src="<?=base_url()?>assets/vendors/js/vendors.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="<?=base_url()?>assets/vendors/js/ui/jquery.sticky.js"></script>

  <script src="<?=base_url()?>assets/js/core/app-menu.min.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/js/core/app.min.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/js/scripts/customizer.min.js" type="text/javascript"></script>

  

  <!-- <script src="<?=base_url()?>assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script> -->

  <script src="<?=base_url()?>assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"

  type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/tables/datatable/dataTables.responsive.min.js"

  type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js"

  type="text/javascript"></script>

  <script src="<?=base_url()?>assets/js/scripts/pages/project-bug-list.min.js" type="text/javascript"></script>

  <!-- JS -->
  
<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>

</body>



</html>



