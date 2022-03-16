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

  <!-- CUSTOM CSS -->
  <style>
  a.btn.disabled, fieldset:disabled a.btn {
    cursor: no-drop;
    pointer-events: all;
  }
  </style>
  <!-- END CUSTOM CSS -->

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



        

        <div class="row" id="absenlink">

          <div id="recent-transactions" class="col-xl-8 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

              <?php echo $this->session->flashdata('belum_punchin');?>

                <h2 class="card-title-center">ABSEN</h2>

              </div>
              
              <?php 
                $now = date_now_ymd(true);
            
                $now_id = date_utc($now);
            
                $punch_date = format_date($now_id, "Ymd");
                
                $pesantanggalmerah = tanggalMerah($punch_date);

              ?> 

                <div class="pr-xl-1 px-xl-1">

                  <?php

                      $punch_in_class_wfh = 'btn-info';
                      $punch_in_class_wfo = 'btn-info';

                      if($punch_in=='1'){
                          if($punch_work == 'wfh'){
                            $punch_in_class_wfh = 'btn-success';
                            $punch_in_class_wfo = 'btn-secondary disabled';
                          }
                          elseif($punch_work == 'wfo'){
                            $punch_in_class_wfh = 'btn-secondary disabled';
                            $punch_in_class_wfo = 'btn-success';
                          }
                      }

                      if($punch_in=='2'){
                          if($punch_work == 'wfh'){
                            $punch_in_class_wfh = 'btn-danger';
                            $punch_in_class_wfo = 'btn-secondary disabled';
                          }
                          if($punch_work == 'wfo'){
                            $punch_in_class_wfh = 'btn-secondary disabled';
                            $punch_in_class_wfo = 'btn-danger';
                          }
                      }

                      $punch_out_class = 'btn-info';

                      if($punch_out=='1'){

                          $punch_out_class = 'btn-success';

                      }

                      if($punch_out=='2'){

                          $punch_out_class = 'btn-danger';

                      }

                  ?>
                  <div class="row">
                    <div class="col-md-6">
                      <a <?=$h=$punch_in=='0' ? 'href="'.base_url().'absen/punch_in/wfh"' : ''?> 
                        <?=$punch_in_time=='00:00:00' ? 'href="'.base_url().'absen/punch_in/wfh"' : ''?> 
                        class="btn btn-lg btn-block font-medium-1 mb-1 block-element 
                        <?=$punch_in_time=='00:00:00' ? 'btn-info' : $punch_in_class_wfh?>">
                        <span class="glyphicon glyphicon-ok" style="color:white;"><i class="ft-check-circle"> </i> CHECK IN WFH 
                          <?php if($punch_work == 'wfh') { ?>
                            <?=$t=($punch_in!='0') ? '('.substr($punch_in_time,0,5).')':''?>
                          <?php } ?>
                        </span>
                      </a>
                    </div>
                    <div class="col-md-6">
                      <a <?=$h=$punch_in=='0' ? 'href="'.base_url().'absen/punch_in/wfo"' : ''?> 
                        <?=$punch_in_time=='00:00:00' ? 'href="'.base_url().'absen/punch_in/wfo"' : ''?> 
                        class="btn btn-lg btn-block font-medium-1 mb-1 block-element 
                        <?=$punch_in_time=='00:00:00' ? 'btn-info' : $punch_in_class_wfo?>">
                        <span class="glyphicon glyphicon-ok" style="color:white;"><i class="ft-check-circle"> </i> CHECK IN WFO 
                          <?php if($punch_work == 'wfo') { ?>
                            <?=$t=($punch_in!='0') ? '('.substr($punch_in_time,0,5).')':''?>
                          <?php } ?>
                        </span>
                      </a>
                    </div>
                  </div>

                </div>

                <div class="pl-xl-1 px-xl-1">

                <a <?=$h=$punch_out=='0' ? 'href="'.base_url().'absen/punch_out"' : ''?> class="btn btn-lg btn-block font-medium-1 mb-1 block-element <?=$punch_out_class?>"><span class="glyphicon glyphicon-off" style="color:white;"><i class="ft-power"> </i> CHECK OUT<?=$t=($punch_out!='0') ? '('.substr($punch_out_time,0,5).')':''?></span></a>

                </div> 

            </div>

          </div>



          <div id="recent-transactions" class="col-xl-4 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                



              

                <h4 class="card-title-center"><?=date('F Y')?></h4>

                <!-- <h5 class="p-xl-1"><b>TOTAL ABSEN : 20</b></h5> -->

                <div class="pl-xl-1 pr-xl-1 px-xl-1">

                  <?php if(!empty($ambil_absen)){?>

                <?php foreach($ambil_absen as $absen){ ?>

                 <br>

                



                  <b><?php echo date('d-m-Y', strtotime($absen['punch_date'])) ;?></b>

                  <p class="m-xl-0">CHECK IN :  <?php echo  $absen['punch_in'];?></p>

                  <p class="m-xl-0">CHECK OUT : <?php echo  $absen['punch_out'];?></p>



                  <?php } ?>
                  <?php } ?>

                </div><br>
                <a href="<?=base_url()?>absen/timesheet/<?=$this->session->userdata('user_id')?>"><button class="btn btn-block btn-success">Timesheet</button></a><br>
                <?php if($this->session->userdata('rule') == 1 || $this->session->userdata('rule') == 2){?>
                <a href="<?=base_url()?>absen/daftar"><button class="btn btn-block">Daftar Teamlist</button></a>
                <?php } ?>


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