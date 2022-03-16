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
      			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>TEAM DETAIL</b></h1>
      		</div>
        </div>
      </div>

      <!-- Menu System berdasarkan Level / Rule -->
        
      <?php 
            
            if(rule()==1){
              $this->load->view('inc/menuadmin');
            }
            else{
              $this->load->view('inc/menuteam');
            }
  
          ?>
          
          <!-- end Menu System -->

      <!-- <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
          </div>
          <h3 class="content-header-title mb-0">Horizontal Forms</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right pb-xl-2 my-1">
        <a href="team-list.html">
              <button class="btn btn-info round" type="button"><i class="ft-arrow-left icon-left"></i> Back to list</button>
      </a>
          </div>
        </div>
      </div> -->

      <div class="content-detached content-right">
        <div class="">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <form action="<?=base_url()?>teamlist/edit_foto/<?=$info->id?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      
                     <!--  <div class="col-md-2">
                        <?php if(!empty($info->img)){ ?>
                        <img id="blah" src="<?=base_url()?>clients/user/<?php echo $info->img; ?>" alt="your image" width="100%" />
                        <?php } ?>
                      </div> -->

                      
                          <div class="col-md-2">
                            <?php if(!empty($info->img)){ ?>
                              <img id="blah" src="<?=base_url()?>clients/user/<?php echo $info->img; ?>" alt="your image" width="100%" />
                              <?php } ?>
                            <input type='file' name="upload1" onchange="readURL(this);" style="padding:10px 0 10px 0;" />
                             </div>
                             
                                        <!-- js upload file profile -->

                                        <script type="text/javascript">

                                           function readURL(input) {

                                    if (input.files && input.files[0]) {

                                        var reader = new FileReader();



                                        reader.onload = function (e) {

                                            $('#blah')

                                                .attr('src', e.target.result);

                                        };



                                        reader.readAsDataURL(input.files[0]);

                                    }

                                }

                                        </script>

                               <!-- end js upload file profile -->

                      <div class="col-md-5">
                        <div class="col-md-12 pb-xl-1 py-xl-1">
                            <input type="text" id="projectinput1" class="form-control" placeholder="<?php echo $user->name; ?>" name="fname" disabled="">
                        </div>
                          <div class="col-md-12 pb-xl-1 py-xl-1">
                            <input type="email" id="" class="form-control" placeholder="<?=$info->email?>" name="email" disabled="">
                          </div>
                          <div class="col-md-12 pb-xl-1 py-xl-1">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ft-calendar"></i></span>
                              </div>
                              <input id="" class="form-control" name="date" type="" value="<?=$info->since?>" disabled="">
                            </div>
                          </div>
                          <div class="col-md-12 pb-xl-1 py-xl-1">
                            <input id="" class="form-control" name="password" placeholder="New Password" type="password">
                          </div>
                      </div>
                      <div class="col-md-5">
                          <div class="col-md-12 pb-xl-1 py-xl-1">
                            <input class="form-control" name="selected" placeholder="<?=$rule?>" disabled="">
                          </div>
                        <div class="col-md-12 pb-xl-1 py-xl-1">
                          <input class="form-control" name="selected" placeholder="<?=$info->company?>" disabled="">
                        </div>
                        <div class="col-md-12 pb-xl-1 py-xl-1">
                          <input type="text" id="" class="form-control" placeholder="Sisa Cuti : <?=$sisacuti->cuti?> Hari" disabled="">
                        </div>
                        <div class="col-md-12 pb-xl-1 py-xl-1">
                            <input id="" class="form-control" name="passwordconf" placeholder="New Password Confirm" type="password">
                            <?php if (!empty($eitsalah)) { ?>
                            <span>
                              <?=$eitsalah?>
                            </span>
                            <?php } ?>
                        </div>

                        <div class="col-md-3" style="float: right;">
                          <button type="submit" class="btn btn-block btn-info ">Update</button></div>
                      </div>
                    
                    </div></form><br><br>



                    <!-- Task List table -->
                    <div class="table-responsive">
                      <table id="project-bugs-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                        <thead>
                          <tr>
                            <th>DATE</th>
                            <th>NILAI REPORT</th>
                            <th>NILAI ABSEN</th>
                            <th>ABSEN</th>
                            <th>SAKIT</th>
                            <th>CUTI</th>
                            <th>IZIN</th>
                            <th>PROJECT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php                            
                            for ($i = 0; $i < 12 ; $i++) {
                            $month = $i;
                            $year = strtotime(date('M Y'));
                            //decrement bulan
                            $now = date('M Y', strtotime('-'.$month.'month',$year));
                            $dateambilnow = date('Y-m-d', strtotime('-'.$month.'month',$year));
                          ?>
                          <tr>
                            <td><?=$now?></td>

                            <!-- PERHITUNGAN NILAI REPORT -->
                            <?php
                              if ($jumlahproject != 0) {
                                for ($z=0; $z < $jumlahproject; $z++) { 
                                  $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($project[$z]['date']))));
                                  if ($diff->y == 0 && $diff->m == 0) {
                                    $hasilnilaiproject[$z] = 2;
                                  }
                                  else{
                                    $hasilnilaiproject[$z] = 0;
                                  }
                                }
                                $hasilnilaiprojectfinal = array_sum($hasilnilaiproject); 
                              }
                              else{
                                $hasilnilaiprojectfinal = 0;
                              }


                              if ($jumlahreport != 0) {
                                for ($z=0; $z < $jumlahreport; $z++) { 
                                  $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($report[$z]['date']))));
                                  if ($diff->y == 0 && $diff->m == 0) {
                                    $hasilnilaireport[$z] = 1;
                                  }
                                  else{
                                    $hasilnilaireport[$z] = 0;
                                  }
                                }
                                $hasilnilaireportfinal = array_sum($hasilnilaireport); 
                              }
                              else{
                                $hasilnilaireportfinal = 0;
                              }

                              $totalnilai = $hasilnilaiprojectfinal + $hasilnilaireportfinal;
                            ?>
                            <td>
                              <h5><?=$totalnilai?></h5>
                            </td>
                            <!-- END NILAI REPORT -->

                            <!-- PERHITUNGAN NILAI ABSEN -->
                            <?php
                              if ($jumlahabsen != 0) {
                                for ($z=0; $z < $jumlahabsen; $z++) {
                                  $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($absen[$z]['created']))));
                                  if ($diff->y == 0 && $diff->m == 0) {
                                    if (format_date($absen[$z]['punch_in'], "H:i:s") > setting('punch_in')) {
                                      $hasilnilaiabsen[$z] = -1;
                                    }
                                    else{
                                      $hasilnilaiabsen[$z] = 1;
                                    }
                                  }
                                  else{
                                    $hasilnilaiabsen[$z] = 0;
                                  }
                                }
                                $hasilnilaiabsenfinal = array_sum($hasilnilaiabsen);
                              }
                              else {
                                $hasilnilaiabsenfinal = 0;
                              }
                            ?>
                            <td>
                              <h5><?=$hasilnilaiabsenfinal?></h5>
                            </td>
                            <!-- END NILAI ABSEN -->

                            <!-- PERHITUNGAN ABSEN -->
                            <?php
                              if ($jumlahabsen != 0) {
                                for ($a=0; $a < $jumlahabsen; $a++) { 
                                  $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($absen[$a]['punch_date']))));
                                  if ($diff->y == 0 && $diff->m == 0) {
                                    if (!empty($absen[$a]['punch_out'])) {
                                      $hasilabsen[$a] = 1;
                                    }
                                    else{
                                      $hasilabsen[$a] = 1;
                                    }
                                  }
                                  else{
                                    $hasilabsen[$a] = 0;
                                  }
                                }
                                $hasilabsenfinal = array_sum($hasilabsen);
                              }
                              else{
                                $hasilabsenfinal = 0;
                              }
                            ?>
                            <td>
                              <h5><?=$hasilabsenfinal?></h5>
                            </td>
                            <!-- END ABSEN -->

                            <!-- PERHITUNGAN SAKIT -->
                            <?php
                            if($jumlahsakit != 0){
                              for ($b=0; $b < $jumlahsakit; $b++) { 
                                $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($sakit[$b]['tanggal_mulai']))));
                                if ($diff->y == 0 && $diff->m == 0) {
                                  $sakitmulai = date_create(date('d-m-Y', strtotime($sakit[$b]['tanggal_mulai'])));
                                  if (!empty($sakit[$b]['tanggal_akhir'])) {
                                    $sakitakhir = date_create(date('d-m-Y', strtotime($sakit[$b]['tanggal_akhir'])));
                                  }
                                  else{
                                    $sakitakhir = date_create(date('d-m-Y', strtotime($sakit[$b]['tanggal_mulai'])));
                                  }
                                  $sakitdiff = date_diff($sakitmulai,$sakitakhir);
                                  $hasilsakit[$b] = $sakitdiff->d + 1;
                                }
                                else{
                                  $hasilsakit[$b] = 0;
                                }
                                
                              }

                              $hasilsakitfinal = array_sum($hasilsakit);
                            }
                            else{
                              $hasilsakitfinal = 0;
                            }
                            ?>
                            <td>
                              <h5><?=$hasilsakitfinal?></h5>
                            </td>
                            <!-- SAKIT END -->

                            <!-- PERHITUNGAN CUTI -->
                            <?php
                            if($jumlahcuti != 0){
                              for ($c=0; $c < $jumlahcuti; $c++) { 
                                $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($cuti[$c]['tanggal_mulai']))));
                                if ($diff->y == 0 && $diff->m == 0) {
                                  $cutimulai = date_create(date('d-m-Y', strtotime($cuti[$c]['tanggal_mulai'])));
                                  if (!empty($cuti[$c]['tanggal_akhir'])) {
                                    $cutiakhir = date_create(date('d-m-Y', strtotime($cuti[$c]['tanggal_akhir'])));
                                  }
                                  else{
                                    $cutiakhir = date_create(date('d-m-Y', strtotime($cuti[$c]['tanggal_mulai'])));
                                  }
                                  $cutidiff = date_diff($cutimulai,$cutiakhir);
                                  $hasilcuti[$c] = $cutidiff->d + 1;
                                }
                                else{
                                  $hasilcuti[$c] = 0;
                                }
                                
                              }

                              $hasilcutifinal = array_sum($hasilcuti);
                            }
                            else{
                              $hasilcutifinal = 0;
                            }
                            ?>
                            <td>
                              <h5><?=$hasilcutifinal?></h5>
                            </td>
                            <!-- END CUTI -->

                            <!-- PERHITUNGAN IZIN -->
                            <?php
                            if($jumlahizin != 0){
                              for ($d=0; $d < $jumlahizin; $d++) { 
                                $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($izin[$d]['tanggal_mulai']))));
                                if ($diff->y == 0 && $diff->m == 0) {
                                  $izinmulai = date_create(date('d-m-Y', strtotime($izin[$d]['tanggal_mulai'])));
                                  if (!empty($izin[$d]['tanggal_akhir'])) {
                                    $izinakhir = date_create(date('d-m-Y', strtotime($izin[$d]['tanggal_akhir'])));
                                  }
                                  else{
                                    $izinakhir = date_create(date('d-m-Y', strtotime($izin[$d]['tanggal_mulai'])));
                                  }
                                  $izindiff = date_diff($izinmulai,$izinakhir);
                                  $hasilizin[$d] = $izindiff->d + 1;
                                }
                                else{
                                  $hasilizin[$d] = 0;
                                }
                                
                              }

                              $hasilizinfinal = array_sum($hasilizin);
                            }
                            else{
                              $hasilizinfinal = 0;
                            }
                            ?>
                            <td>
                              <h5><?=$hasilizinfinal?></h5>
                            </td>
                            <!-- END IZIN -->

                            <!-- PERHITUNGAN ABSEN -->
                            <?php
                              if ($jumlahproject != 0) {
                                for ($e=0; $e < $jumlahproject; $e++) { 
                                  $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($project[$e]['date']))));
                                  if ($diff->y == 0 && $diff->m == 0) {
                                    $hasilproject[$e] = 1;
                                  }
                                  else{
                                    $hasilproject[$e] = 0;
                                  }
                                }
                                $hasilprojectfinal = array_sum($hasilproject); 
                              }
                              else{
                                $hasilprojectfinal = 0;
                              }

                              if ($jumlahreport != 0) {
                                for ($f=0; $f < $jumlahreport; $f++) { 
                                  $diff = date_diff(date_create($dateambilnow),date_create(date('Y-m-d', strtotime($report[$f]['date']))));
                                  if ($diff->y == 0 && $diff->m == 0) {
                                    $hasilreport[$f] = 1;
                                  }
                                  else{
                                    $hasilreport[$f] = 0;
                                  }
                                }
                                $hasilreportfinal = array_sum($hasilreport); 
                              }
                              else{
                                $hasilreportfinal = 0;
                              }

                              $hasilreportproject = $hasilprojectfinal + $hasilreportfinal;
                            ?>
                            <td>
                              <h5><?=$hasilreportproject?></h5>
                            </td>
                            <!-- END ABSEN -->
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 pb-xl-1 py-xl-1">
              <?php if(!empty($penilaian)){ ?>
              <?php foreach ($penilaian as $key => $value) { ?>
              <div class="card">
                <div class="card-content">                                    
                  <?php
                    $tahunpenilaian = date('Y', strtotime($value['date']));
                    $tahundepan = $tahunpenilaian + 1;
                    $poin = $value['pemahaman_tugas1'] + $value['pemahaman_tugas2'] + $value['pemahaman_tugas3'] + $value['pemahaman_tugas4'] + $value['pemahaman_tugas5'] + $value['pemahaman_tugas6'] + $value['pelaksanaan_tugas1'] + $value['pelaksanaan_tugas2'] + $value['pelaksanaan_tugas3'] + $value['pelaksanaan_tugas4'] + $value['pelaksanaan_tugas5'] + $value['pelaksanaan_tugas6'] + $value['penampilan_diri1'] + $value['penampilan_diri2'] + $value['sikap_kerja1'] + $value['sikap_kerja2'] + $value['sikap_kerja3'] + $value['sikap_kerja4'] + $value['sikap_kerja5'] + $value['sikap_kerja6'];
                  ?>
                  <div class="card-body">
                    <div>
                      <h4><b>HASIL PENILAIAN <?=$tahunpenilaian?> : <?=$poin?> Point</b></h4>
                      <h5>GOAL <?=$tahundepan?> : <?=$value['rekomendasi']?></h5>
                    </div>
                    <div>
                      <a href="<?=base_url()?>penilaian/detail/<?=$info->id?>" class="sort btn btn-block btn-outline-info btn-round">DETAIL</a>
                    </div>
                  </div>                  
                </div>
              </div>
              <?php } ?>
              <?php }else{ ?>
              <div class="card">
              <div class="card-content"> 
              <div class="card-body">
                <div>
                  <h4><b>HASIL PENILAIAN BELUM ADA</b></h4>
                  <h5>Silahkan Lakukan Penilaian Terlebih Dahulu !</h5>
                </div>
              </div></div></div>
              <?php } ?>
            </div>

            <div class="col-md-4 pb-xl-1 py-xl-1">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div>
                      <?php if(!empty($penilaian)){ ?>
                      <?php
                        $tahunpenilaian = date('Y', strtotime($penilaian[0]['date']));
                        $tahundepan = $tahunpenilaian + 1;
                      ?>
                      <h4><b>PENILAIAN <?=$tahundepan?></b></h4>
                      <a href="<?=base_url()?>penilaian/add/<?=$info->id?>" class="sort btn btn-block btn-outline-success btn-round">IKUTI</a>
                      <?php }else{ ?>
                      <?php
                        $tahunsekarang = date('Y');
                      ?>
                      <h4><b>PENILAIAN <?=$tahunsekarang?></b></h4>
                      <a href="<?=base_url()?>penilaian/add/<?=$info->id?>" class="sort btn btn-block btn-outline-success btn-round">IKUTI</a>
                      <?php } ?>
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
  
  <!-- <script src="assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script> -->
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

