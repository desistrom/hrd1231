<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Project Report - Dewanstudio Power Management</title>

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

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>PROJECT REPORT</b></h1>

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

                <div class="card-header">

                  <div class="heading-elements">

                    <a href="<?=base_url()?>reportproject/add"><button class="btn btn-primary btn-md"><i class="ft-plus white"></i> CREATE PROJECT</button></a>

                  </div>

                </div>



                <div class="card-content">
                  <form method="GET" enctype="multipart/form-data">
                  <div class="row card-body">
                    
                  <div class="col">
                    <select id="select-employ" name="searchname" type="" class="form-control mr-1 my-1">
                      <option value="">Masukan Nama</option>
                      <?php foreach ($ateam as $key => $namateam) { ?>
                      <option value="<?=$namateam['name']?>"><?=$namateam['name']?></option>
                      <?php } ?>
                    </select>
                  </div>
                    
                    <div class="col">
                      <input type="text" class="form-control mr-1 my-1" name="searchproject" placeholder="Masukan Nama Project">
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
                      <button type="submit" class="btn btn-info mr-1 my-1">Search</button>
                    </div>
                  </div>
                  </form>
                  <div class="card-body">

                    <!-- Task List table -->

                    <?php if(empty($row)){

                      echo "<h1 style='text-align:center;'>TIDAK ADA DATA</h1>";

                    }?>

                    <?php if(!empty($row)) { ?>

                    <div class="">

                      <table id="project-bugs-list" class="table table-bordered row-grouping display no-wrap icheck table-middle table-responsive">

                        <thead>

                          <tr>

                            <th>NO.</th>

                            <th>PROJECT NAME</th>

                            <th>LAST UPDATE</th>

                            <th>STATUS</th>

                            <th>UPDATE BY</th>

              							<th>REPORT</th>

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

                        <?php foreach ($row as $key => $isi) { ?>
                        <?php

                          $tanggal = date('d-m-Y', strtotime($isi['project_start']));

                          if ($isi['project_status'] == '1') {

                            $status = '<button type="button" class="btn btn-sm btn-outline-danger round">Billing</button>';

                          }

                          elseif ($isi['project_status'] == '2') {

                            $status = '<button type="button" class="btn btn-sm btn-outline-warning round">Development</button>';

                          }

                          elseif ($isi['project_status'] == '3') {

                            $status = '<button type="button" class="btn btn-sm btn-outline-secondary round">Marketing</button>';

                          }

                          elseif ($isi['project_status'] == '4') {

                            $status = '<button type="button" class="btn btn-sm btn-outline-info round">Maintenance</button>';

                          }

                          elseif ($isi['project_status'] == 5) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-primary round">Design</button>';

                          }

                          elseif ($isi['project_status'] == 6) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-dark round">HTML</button>';

                          }

                          elseif ($isi['project_status'] == 7) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-info round">Support</button>';

                          }
                          elseif ($isi['project_status'] == 8) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-success round">Finish</button>';

                          }

                        ?>

                          <tr>

                            <td><p class="text-bold-600"><?=$i?></p></td>

                            <td>

                              <a href="<?=base_url()?>reportproject/detail/<?=$isi['id'];?>" class="text-bold-600"><?=$isi['project_name'];?></a>

                            </td>

                            <td class="text-center">

                               <?php if(!empty($lastupdate[$i])) { ?>

							                 <h5><?php echo date('d-m-Y', strtotime($lastupdate[$i]->date));?></h5>

                               <?php } else { ?>

                               <h5>-</h5>

                               <?php } ?>

                               <h6>(Since <?=$tanggal?>)</h6>

                            </td>

                            <td>

                              <?=$status?>

                            </td>

                            <?php if(!empty($lastupdate[$i])){?>

							              <!-- <td class="text-truncate">
                            <?php if(!empty($lastupdate[$i]->img)){?>

                              <span class="avatar avatar-xs">

                                <img class="box-shadow-2" src="<?=base_url()?>clients/user/<?=$lastupdate[$i]->img?>" alt="avatar">

                              </span>
                            <?php } ?>

                              <span><?=$lastupdate[$i]->name?></span>

                            </td> -->

                            <td class="text-truncate">
                            <?php  
                                $report = $this->report_mod->getUserFromReport($isi["id"]);
                                $user = $this->user_mod->get_byuid($report['id_user']);
                            ?>
                            <?php if(!empty($user->img)){?>
                              <span class="avatar avatar-xs">
                                <img class="box-shadow-2" src="<?=base_url()?>clients/user/<?=$user->img?>" alt="avatar">
                              </span>
                            <?php } ?>
                            <span><?=$user->name?></span>

                            </td>

							              <td>

                              <h5><?=$jumlahreport[$i]?></h5>

                            </td>

                            <?php } else { ?>

                            <td class="text-truncate">
                            <?php if(!empty($isi['img'])){?>

                              <span class="avatar avatar-xs">

                                <img class="box-shadow-2" src="<?=base_url()?>clients/user/<?=$isi['img']?>" alt="avatar">

                              </span>
                            <?php } ?>

                              <span><?=$isi['name']?></span>

                            </td>

                            <td>

                              <h5>0</h5>

                            </td>

							              <?php } ?>

                            <td>

                              <span class="dropdown">

                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"

                                aria-expanded="false" class="btn btn-info"><i class="ft-eye"></i>View</button>

                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">

                                  <a href="<?=base_url()?>reportproject/detail/<?=$isi['id'];?>" class="dropdown-item"><i class="ft-edit"></i> Report</a>

                                  <a href="<?=base_url()?>reportproject/edit/<?=$isi['id'];?>" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>

                                  <!-- <a href="<?=base_url()?>reportproject/delete/<?=$isi['id'];?>" class="dropdown-item"><i class="ft-trash"></i> Delete</a> -->

                                </span>

                              </span>

                            </td>

                          </tr>

                          <?php $i++; ?>

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

                    <?php } ?>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>
    $(document).ready(function () {
      $('#select-employ').selectize({
          sortField: 'text'
      });
  });
</script>

<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>
  

</body>



</html>



