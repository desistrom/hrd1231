<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Izin - Dewanstudio Power Management</title>

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



  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">



  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/pickers/daterange/daterangepicker.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/pickers/pickadate/pickadate.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/plugins/pickers/daterange/daterange.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

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

	  

	     <div class="row">

          <div id="recent-transactions" class="col-xl-8 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                <h2 class="card-title-center">IZIN</h2>

              </div>

      			  <!-- Pick-A-Date Picker start -->

      				<section id="pick-a-date">

      				  <div class="card">

      					<div class="card-content collapse show">

      					  <div class="card-body">

      						<form  method="POST">

                  <?=validation_errors()?>

                      <?=$error = empty($msg) ? '' : '<div class="alert alert-danger error">'.$msg.'</div>'?>

      						  <div class="row">

      							<div class="col-md-12 col-sm-6 col-12">

      							  <div class="form-group">

      								<div class="row">

      								  <div class="col-lg-6">

      									<h5>Mulai Jam</h5>

      									<div class="input-group">

      									  <div class="input-group-prepend">

      										<div class="input-group-prepend">

      											<span class="input-group-text">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                            </span>

      										</div>

      									  </div>

      									  <input id="picker_from" name="jam_mulai" class="form-control" type="text">

      									</div>

      								  </div>

      								  <div class="col-lg-6">

      								    <h5>Sampai Jam</h5>

      									<div class="input-group">

      									  <div class="input-group-prepend">

      										<div class="input-group-prepend">

      											<span class="input-group-text">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                            </span>

      										</div>

      									  </div>

      									  <input id="picker_to" name="jam_akhir" class="form-control" type="text">

      									</div>

      								  </div>

      								  <div class="col-lg-12">

      									  <h5 class="pb-xl-1 py-xl-1">Alasan</h5>

      									  <textarea id="" rows="5" name="alasan" class="form-control" name="comment" placeholder="Tulis Alasan Anda"></textarea>

      								  </div>

      								  <div class="col-lg-12 pb-xl-1 py-xl-1">

      									

      								  </div>

                        <div class="pr-xl-1 px-xl-1">

                          <button type="submit" class="btn btn-info btn-lg btn-block float-right"><i class="ft-check-circle"></i> SUBMIT</button>

                        </div>

                         

      								</div>

      								

      							  </div>

      							</div>

      						  </div>

      						</form>

      					  </div>

      					</div>

      				  </div>

      				</section>

      				<!-- Pick-A-Date Picker end -->

            </div>

          </div>



          <div id="recent-transactions" class="col-xl-4 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                <h4 class="card-title-center">JUNE 2018</h4>

                <!-- <b>TOTAL IZIN : <?= $jumlahtotalizin ?></b> -->
                <h5 class="p-xl-1">
                <b>TOTAL IZIN : <?= jumlah_izin_y(user_id()) ?> <small>(Pending tidak terhitung)</small>

                </h5>



                <div class="pl-xl-1 pr-xl-1 px-xl-1">

                  <b>LOG IZIN : </b>

                  <?php if(!empty($ambil_izin)){ ?>

                  <?php foreach($ambil_izin as $getizin){ ?>



                 <p class="m-xl-0">

                   <?php

                      if($getizin['approved'] == 0) {

                              $status = 'Pending';

                          }

                          elseif($getizin['approved'] == 1) {

                              $status = 'Approved';

                          }

                          else {

                            $status = 'Rejected';

                          }

                      $tanggal = date('d-m-Y', strtotime($getizin['created']));
                      $start_time = $getizin['start_time'];
                      $end_time = $getizin['end_time'];

                   ?>

                  <span><?=$tanggal?>, <?php echo $start_time;?> - <?php echo $end_time;?> (<?=$status?>)</span>

                 </p>

                  <?php } ?>

                  <?php } ?>

                </div><br>

                <a class="btn btn-block btn-success " href="<?=base_url()?>izin/detil_izin">Detil</a>
                <?php if ($this->session->userdata('rule') == 1 || $this->session->userdata('rule') == 2) { ?>
                <a class="btn btn-block btn-success " href="<?=base_url()?>izin/approval">Approval</a>
                <?php } ?>
              </div>

            </div>

          </div>

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



  <script type="text/javascript" src="<?=base_url()?>assets/vendors/js/ui/jquery.sticky.js"></script>

  <!-- <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script> -->

  <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"

  type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/daterange/daterangepicker.js"

  type="text/javascript"></script>



   <script src="<?=base_url()?>assets/js/scripts/pickers/dateTime/pick-a-datetime.js"

  type="text/javascript"></script>



  <script src="<?=base_url()?>assets/js/scripts/ui/jquery-ui/date-pickers.min.js" type="text/javascript"></script>
  <!-- timepicker -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#picker_from').timepicker({
        timeFormat: 'H:mm',
        interval: 30,
        minTime: '08',
        defaultTime: '08',
        startTime: '08:00',
        maxTime: '16:00',
        dynamic: true,
        dropdown: true,
        scrollbar: false,
    });
    $('#picker_to').timepicker({
        timeFormat: 'H:mm',
        interval: 30,
        defaultTime: '09',
        minTime: '08:30',
        maxTime: '17:00',
        dynamic: true,
        dropdown: true,
        scrollbar: false,
    });
  });
  </script>
  <!-- end timepicker -->
  <!-- JS -->

<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>


</body>



</html>



