<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="POWER MANAGEMENT">
  <title>Dashboard - Dewanstudio Power Management</title>
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/ico/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/app.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/core/menu/menu-types/horizontal-menu.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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



<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <?php $this->load->view('inc/menuluar');?>


  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-body">
    		<div>
    			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>WELCOME TO POWER MANAGEMENT, <?=$this->session->userdata('full_name')?></b></h1>
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
          
                    <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>profile_hrd">
        					<div class="card-body-report">
        					  <div class="media d-flex">
        						<div class="media-body text-left">
        						  <h3 class="info">My Profile</h3>
        						</div>
        						<div>
        						  <i class="icon-user info font-large-2 float-right"></i>
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
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title-center">TEAM LIST</h2>
                <div class="heading-elements">
                    <a href="<?=base_url()?>teamlist/add"><button class="btn btn-primary btn-md"><i class="ft-plus white"></i> NEW TEAM</button></a>
                  </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                    <!-- Task List table -->
                    <div class="">
                      <table id="project-bugs-list" class="table-bordered row-grouping display no-wrap icheck table-middle" style="width:100%;">
                        <thead>

                          <tr>

                            <th class="padding-table">NO.</th>

                            <th class="padding-table">NAME</th>

                            <th class="padding-table">EMAIL</th>

                            <th class="padding-table">SINCE</th>

                            <th class="padding-table">NILAI</th>

                            <th class="padding-table">ABSEN</th>

                            <th class="padding-table">SAKIT</th>

                            <th class="padding-table">CUTI</th>

                            <th class="padding-table">IZIN</th>

                            <th class="padding-table">PROJECT</th>

                            <!-- <th>NILAI 2017</th> -->

                            <th class="padding-table">ACTION</th>

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

                          <?php foreach ($a as $key => $isi) { ?>

                          <?php

                            $awal = date_create(date('Y-m-d'));

                            $akhir = date_create(date('Y-m-d', strtotime($isi['since'])));

                            $diff = date_diff( $awal, $akhir );

                          ?>
                          <tr>

                            <td class="padding-table"><a class="text-bold-600"><?php echo $i; ?></a></td>

                            <td class="padding-table">

                                <a href="<?=base_url()?>dashboard/team/<?=$isi['id']?>" class="text-bold-600"><h5><?=$isi['name']?></h5></a>

                            </td>

                            <td class="text-center padding-table">

                                <a href="mailto:<?=$isi['email']?>" class="text-bold-600"><?=$isi['email']?></a>

                            </td>

                            <td class="padding-table">

                                <h5><?=date('d-m-Y', strtotime($isi['since']))?></h5>

                                <h5><?php echo "(".$diff->y." Tahun, ".$diff->m." Bulan)"; ?></h5>

                            </td>

                            <td class="padding-table">

                                <h5><?=$isi['nilai']?></h5>

                            </td>

                            <td class="padding-table">

                                <h5><?=$isi['absen']?></h5>

                            </td>

                            <td class="padding-table">

                                <h5><?=$isi['sakit']?></h5>

                            </td>

                            <td class="padding-table">

                                <h5><?=$isi['cuti']?></h5>

                            </td>

                            <td class="padding-table">

                                <h5><?=$isi['izin']?></h5>

                            </td >

                            <td class="padding-table">

                                <h5><?=$isi['project']?></h5>

                            </td>

                            <!-- <td>

                                <h5>500</h5>

                            </td> -->

                            <td class="padding-table">

                                <span class="dropdown">

                                  <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-info">

                                    <i class="ft-eye"></i>View

                                  </button>

                                  <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">

                                    <a href="<?=base_url()?>teamlist/edit/<?=$isi['id']?>" class="dropdown-item">

                                      <i class="ft-edit-2"></i> Edit

                                    </a>

                                    <a onclick="return confirm('Semua Data User Ini Juga Akan Di hapus, Lanjutkan?')" href="<?=base_url()?>teamlist/delete/<?=$isi['id']?>" class="dropdown-item">

                                      <i class="ft-trash"></i> Delete

                                    </a>

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
                  </div>
              </div>
            </div>
          </div>
        </div> 

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