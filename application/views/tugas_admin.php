<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Tugas - Dewanstudio Power Management</title>

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

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>TUGAS</b></h1>

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
                  <form method="GET" enctype="multipart/form-data">
                    <div class="row card-body">
                      <div class="col">
                        <input type="text" class="form-control mr-1 my-1" name="searchname" placeholder="Masukan Nama">
                      </div>
                      <div class="col">
                        <select name="bulan" type="" class="form-control mr-1 my-1">
                          <option value="">--||BULAN||--</option>
                          <option value="01">Januari</option>
                          <option value="02">Februari</option>
                          <option value="03">Maret</option>
                          <option value="04">April</option>
                          <option value="05">Mei</option>
                          <option value="06">Juni</option>
                          <option value="07">Juli</option>
                          <option value="08">Agustus</option>
                          <option value="09">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                      </div>
                      <div class="col">
                        <select name="tahun" type="" class="form-control mr-1 my-1">
                          <option value="">--||TAHUN||--</option>
                          <?php
                            $tahunini = date('Y');
                            for ($i=$tahunini; $i >= 2000; $i--) {
                          ?>
                          <option value="<?=$i?>"><?=$i?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col">
                        <button type="submit" class="btn mr-1 my-1">Search</button>
                      </div>
                      <div class="col">
                        <a style="float: right;" href="<?=base_url()?>tugas">
                          <button class="btn btn-info round mr-1 my-1" type="button"><i class="ft-arrow-left icon-left"></i> Back to list</button>
                        </a>
                      </div>
                    </div>
                  </form>
                  

                  <div class="card-body">

                    <!-- Task List table -->

                    <div class="">

                      <table id="project-bugs-list" class="table table-bordered row-grouping display no-wrap icheck table-middle table-responsive">

                        <thead>

                          <tr>

                            <th>NO.</th>

                            <th>NAME</th>

                            <th>MULAI TANGGAL</th>

                            <th>SAMPAI TANGGAL</th>

              				<th>ALASAN</th>

                            <th>STATUS</th>

                            <th>ACTION</th>

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

                          <?php if(!empty($ambil_tugas)){ ?>

                          <?php foreach($ambil_tugas as $a => $tugas){ ?>

                          <?php 

                          if($tugas['approved'] == 0) {

                              $status = 'Pending';

                          }

                          elseif($tugas['approved'] == 1) {

                              $status = 'Approved';

                          }

                          else {

                            $status = 'Rejected';

                          }



                          $tanggalmulai = date('d-m-Y', strtotime($tugas['tanggal_mulai']));

                          $tanggalakhir = date('d-m-Y', strtotime($tugas['tanggal_akhir']));

                          ?>

                          <tr>

                            <td><?php echo $i; ?></td>

                            <td>

                              <h5><?=$tugas['name']?></h5>

                            </td>

                            <td>

                              <h5><?=$tanggalmulai?></h5>

                            </td>

							              <td>

                              <h5><?=$njay = (!empty($tugas['tanggal_akhir'])) ? $tanggalakhir:'-'?></h5>

                            </td>

							<td>

                              <h5><?=$tugas['alasan']?></h5>

                            </td>

                            <td>

                              <h5><a><?=$status?></a></h5>

                            </td>

                            <td>

                              <span class="dropdown">

                                  <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-info">

                                    <i class="ft-eye"></i>Approval

                                  </button>

                                  <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">

                                    <a href="<?=base_url()?>tugas/approve?a=<?=$tugas['id']?>&x=1&u=<?=$tugas['id_user']?>&alasan=<?=$tugas['alasan']?>&datet=<?=$tugas['tanggal_mulai']?>" class="dropdown-item info">

                                      Approve

                                    </a>

                                    <a href="<?=base_url()?>tugas/reject?a=<?=$tugas['id']?>&x=2" class="dropdown-item danger">

                                      Reject

                                    </a>

                                  </span>

                                </span>

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