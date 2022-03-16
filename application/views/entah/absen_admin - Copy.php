<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Absen - Dewanstudio Power Management</title>

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

  <!-- END CSS -->



</head>







<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"

data-open="click" data-menu="horizontal-menu" data-col="2-columns">

  <!-- fixed-top-->

  <?php $this->load->view('inc/menuluar');?>





  <div class="app-content container center-layout mt-2">

    <div class="content-wrapper">

      <div class="content-body">

    		<div>

    			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>HRD SYSTEM</b></h1>

    		</div>



        <!-- menu absen dll -->
        <div class="row">

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>absen">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">Absen</h3>
                    </div>
                    <div>
                      <i class="icon-check info font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>cuti">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">Cuti</h3>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>sakit">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">Sakit</h3>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>izin">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">Izin</h3>
                    </div>
                    <div>
                      <i class="icon-doc warning font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>tugas">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="primary">Tugas</h3>
                    </div>
                    <div>
                      <i class="icon-doc primary font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>




          <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>reportproject">
                  <div class="card-body-report">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">Project Report</h3>
                    </div>
                    <div>
                      <i class="icon-pie-chart info font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <!-- <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="penilaian.html">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">Penilaian</h3>
                    </div>
                    <div>
                      <i class="icon-pencil info font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div> -->

        </div>
        <!-- end menu absen dll -->



        

        <div class="row">

          <div id="recent-transactions" class="col-xl-8 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                <h2 class="card-title-center">ABSEN HARI INI</h2>

              </div>

              



              <div class="pr-xl-1 px-xl-1">
              <!-- <table class="table table-striped table-middle">
                <thead>
                  <th>NAMA</th>
                  <th>PUNCH IN</th>
                  <th>PUNCH OUT</th>
                  <th>ACTION</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($a as $key => $value) {
                  ?>
                  <?php
                    $haridb = date_create(date('d-M-Y', strtotime($value['punch_date'])));
                    $harisekarang = date_create(date('d-M-Y'));
                    if ($haridb == $harisekarang) {
                  ?>
                  <tr>
                    <td>
                      <?=$value['name']?>
                    </td>
                    <td title="<?=$value['punch_in_desc']?>" data-toggle="tooltip" data-placement="top">
                      <a><?=$value['punch_in']?></a>
                    </td>
                    <td title="<?=$value['punch_out_desc']?>" data-toggle="tooltip" data-placement="top">
                      <a><?=$value['punch_out']?></a>
                    </td>
                    <td>
                      <a href="<?=base_url()?>absen/timesheet/<?=$value['user_id']?>">
                        <button type="button" class="btn btn-block btn-info">Detail</button>
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                  <?php
                    }
                  ?>
                </tbody>
              </table>               -->

              <table class="table table-striped table-middle">
                <thead style="text-align:center;">
                  <th>NAMA</th>
                  <th>PUNCH IN</th>
                  <th>PUNCH OUT</th>
                  <th>ACTION</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($ateam as $key => $value) {
                  ?> 
                  <?php 
                    $haridb = date_create(date('d-M-Y', strtotime($value['last_punch_date'])));
                    $harisekarang = date_create(date('d-M-Y'));
                    $now = date_now_ymd(true);
                    $tglskrg = date_utc_ymd($now);
                  ?>
                  <tr style="text-align:center;">
                    <td>
                    <a href="<?=base_url()?>dashboard/team/<?=$value['id']?>" class="text-bold-600"><h5><?=$value['name']?></h5></a>
                    </td>
                    

                      <!-- Status Absen Detail = 1 = Absen biasa, 2 = Sakit, 3 = Izin, 4 = Cuti, 5 = Tugas -->

                      <?php if ($value['last_punch_date'] == $tglskrg) { ?>
                        <!-- Absen / Normal -->

                        <?php if ($value['last_punch_date'] == $tglskrg) { ?>

                          <td title="<?=$value['last_punch_in_desc']?>" data-toggle="tooltip" data-placement="top">
                            <a><?=$value['last_punch_in']?></a>
                          </td>
                          <td title="<?=$value['last_punch_out_desc']?>" data-toggle="tooltip" data-placement="top">
                            <a><?= ($value['last_punch_out'] == '') ? '0' : $value['last_punch_out']; ?></a>
                          </td>

                        <?php
                          } else{
                        ?> 

                            <td>0</td>
                            <td>0</td> 

                            <?php
                            }
                          ?> 

                      <?php 
                        } elseif($value['last_sakit'] <= $tglskrg && $value['status_absen'] == '2'){
                      ?>
                      <!-- Sakit -->

                        <?php 
                          if($value['last_sakit'] <= $tglskrg){
                        ?>

                          <td>SAKIT</td>
                          <td>SAKIT</td>

                        <?php
                          } else{
                        ?>

                          <td>0</td>
                          <td>0</td>

                        <?php
                          }
                        ?>

                      <?php 
                        } elseif($value['last_izin'] <= date('Y-m-d') && $value['status_absen'] == '3'){
                      ?>
                      <!-- Izin -->

                        <?php 
                          if($value['last_izin'] <= date('Y-m-d')){
                        ?>

                          <td>IZIN</td>
                          <td>IZIN</td>

                        <?php
                          } else{
                        ?>

                          <td>0</td>
                          <td>0</td>

                        <?php
                          }
                        ?>

                      <?php 
                        } elseif($value['last_cuti'] <= date('Y-m-d') && $value['status_absen'] == '4'){
                      ?>
                      <!-- Cuti -->

                        <?php 
                          if($value['last_cuti'] <= date('Y-m-d')){
                        ?>

                          <td>CUTI</td>
                          <td>CUTI</td>

                        <?php
                          } else{
                        ?>

                          <td>0</td>
                          <td>0</td>

                        <?php
                          }
                        ?>

                      <?php 
                        } elseif($value['last_tugas'] <= date('Y-m-d') && $value['status_absen'] == '5'){
                      ?>
                      <!-- Tugas -->

                        <?php 
                          if($value['last_tugas'] <= date('Y-m-d')){
                        ?>

                          <td>TUGAS</td>
                          <td>TUGAS</td>

                        <?php
                          } else{
                        ?>

                          <td>0</td>
                          <td>0</td>

                        <?php
                          }
                        ?>

                        <?php
                          } else{
                        ?>

                          <td>0</td>
                          <td>0</td>

                        <?php
                          }
                        ?>

                    
                    <td>
                      <a href="<?=base_url()?>absen/timesheet/<?=$value['id']?>">
                        <button type="button" class="btn btn-block btn-info">Detail</button>
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>

              <!-- <table class="table table-striped table-middle">
                <thead style="text-align:center;">
                  <th>NAMA</th>
                  <th>PUNCH IN</th>
                  <th>PUNCH OUT</th>
                  <th>ACTION</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($sakitrange as $key => $value) {
                  ?> 
                  <tr style="text-align:center;">
                    <td>
                      <?=$value['id_user']?>
                    </td>  
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table> -->

              </div>

            </div>

          </div>



          <div id="recent-transactions" class="col-xl-4 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                



              

                <h4 class="card-title-center"><?=date('F Y')?></h4>

                <!-- <h5 class="p-xl-1"><b>TOTAL ABSEN : 20</b></h5> -->

                <div class="pl-xl-1 pr-xl-1 px-xl-1">

                  <!-- <?php if(!empty($ambil_absen)){?>

                <?php foreach($ambil_absen as $absen){ ?>

                 <br>

                



                  <b><?php echo date('d-m-Y', strtotime($absen['punch_date'])) ;?></b>

                  <p class="m-xl-0">CHECK IN :  <?php echo  $absen['punch_in'];?></p>

                  <p class="m-xl-0">CHECK OUT : <?php echo  $absen['punch_out'];?></p>



                  <?php } ?>
                  <?php } ?> -->

                </div><br>
                <?php
                  $rule = $this->session->userdata('rule');
                  if ($rule != 1 && $rule != 2) {
                ?>
                <a href="<?=base_url()?>absen/timesheet/<?=$this->session->userdata('user_id')?>"><button class="btn btn-block btn-success">Timesheet</button></a><br>
                <?php } ?>
                <a href="<?=base_url()?>absen/daftar"><button class="btn btn-block btn-success">Daftar Teamlist</button></a>



              </div>

            </div>

          </div>

        </div>

        <!--/ Recent Transactions -->       

      </div>

    </div>

  </div>

  

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

  <!-- JS -->



</body>

</html>