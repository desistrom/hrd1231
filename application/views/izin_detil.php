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



  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/tables/extensions/responsive.dataTables.min.css">

  <!-- END CSS -->

  <!-- CUSTOM CSS -->

  <style type="text/css">

    .custompagination a {

      border: 1px solid #BABFC7;

      padding: .5rem .75rem;

      margin-left: -1px;

      display: block;

      line-height: 1.25;

      border-top-left-radius: .25rem;

      border-bottom-left-radius: .25rem;

    }

  </style>

  <!-- END CUSTOM CSS -->



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

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>IZIN</b></h1>

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

        </div>

      </div>

      <div class="content-detached content-right">

        <div class="">

          <section class="row">

            <div class="col-12">

              <div class="card">

                <div class="card-content">
                  <a style="float: right;" href="<?=base_url()?>izin">

                    <button class="btn btn-info round mr-1 my-1" type="button"><i class="ft-arrow-left icon-left"></i> Back to list</button>

                  </a>

                  <div class="card-body">

                    <!-- Task List table -->

                    <div class="">

                      <table id="project-bugs-list" class="table table-bordered row-grouping display no-wrap icheck table-middle table-responsive">

                        <thead>

                          <tr>

                            <th>NO.</th>

                            <th>NAME</th>

                            <th>TANGGAL</th>
                            
                            <th>MULAI JAM</th>

                            <th>SAMPAI JAM</th>

              				<th>ALASAN</th>

                            <th>STATUS</th>

                          </tr>

                        </thead>

                        <tbody>

                          <?php 

                          if ($number != null) {

                            $i = $number+1;

                          }

                          else{

                            $i = 1;

                          } 

                          ?>

                          <?php if(!empty($ambil_izin)){ ?>

                          <?php foreach($ambil_izin as $a => $izin){ ?>

                          <?php 

                          if($izin['approved'] == 0) {

                              $status = 'Pending';

                          }

                          elseif($izin['approved'] == 1) {

                              $status = 'Approved';

                          }

                          else {

                            $status = 'Rejected';

                          }



                          $tanggal = date('d-m-Y', strtotime($izin['created']));

                          ?>

                          <tr>

                            <td><?php echo $i; ?>x</td>

                            <td>

                              <h5><?=$namauser?></h5>

                            </td>

                            <td>

                              <h5><?=$tanggal?></h5>

                            </td>

                            <td>

                              <h5><?=$izin['start_time']?></h5>

                            </td>

							              <td>

                              <h5><?=$izin['end_time']?></h5>

                            </td>

							<td>

                              <h5><a href="#"><?=$izin['alasan']?></a></h5>

                            </td>

                            <td>

                              <h5><a href="#"><?=$status?></a></h5>

                            </td>

                          </tr>

                          <?php $i++; ?>

                          <?php } ?>

                          <?php } ?>



                        </tbody>

                      </table>

                    <div class="row">

                        <div class="col-sm-12 col-md-5">

                          <div class="dataTables_info" id="project-bugs-list_info" role="status" aria-live="polite" style="padding-top: 0.85em;">

                            <?php

                              $hitungdata = $number+5;

                              if ($hitungdata > $datacount) {

                                $hitungdata = $datacount;

                              }

                            ?>

                            Showing <?php echo $number+1; ?> to <?php echo $hitungdata; ?> of <?php echo $datacount; ?> entries

                          </div>

                        </div>

                        <div class="col-sm-12 col-md-7">

                          <div class="dataTables_paginate paging_simple_numbers" id="project-bugs-list_paginate">

                            <?=$pagination?>

                          </div>

                        </div>

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