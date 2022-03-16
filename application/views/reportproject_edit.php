<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Create Project - Dewanstudio Power Management</title>

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

		<div>

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>CREATE PROJECT</b></h1>

		</div>

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

          <div class="row breadcrumbs-top">

          </div>

          <!-- <h3 class="content-header-title mb-0">Horizontal Forms</h3> -->

        </div>

        <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right pb-xl-2 my-1">

		  	<a href="<?=base_url()?>reportproject">

            	<button class="btn btn-info round" type="button"><i class="ft-arrow-left icon-left"></i> Back to list</button>

			</a>

          </div>

        </div>

      </div>

      <div class="content-body">

        <!-- Basic form layout section start -->

        <section id="horizontal-form-layouts">

          <div class="row">

            <div class="col-md-12">

              <div class="card">

                <div class="card-content collpase show">

                  <div class="card-body">

                    <form method="POST" enctype="multipart/form-data" class="form form-horizontal">

                      <div class="form-body">

                        <!-- <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4> -->

                        <h4><?=validation_errors()?></h4>

                        <h4><?=$error = empty($msg) ? '' : '<div class="alert alert-danger error">'.$msg.'</div>'?></h4>

                        <div class="form-group row">

                        	<div class="col-md-12 pb-xl-1 py-xl-1">

                        	  <h5 class="pb-xl-1 py-xl-1">Project Name</h5>

	                            <input type="text" id="projectinput1" class="form-control" placeholder="Project Name"

	                            name="name" value="<?=$row->project_name?>">

                          	</div>



                          	<div class="col-md-6 pb-xl-1 py-xl-1">

                          	    <h5 class="pb-xl-1 py-xl-1">Start Date</h5>

                          		<div class="input-group">

		                            <div class="input-group-prepend">

		                              <span class="input-group-text"><i class="ft-calendar"></i></span>

		                            </div>

		                            <input id="" class="form-control" name="date" type="date" value="<?=$row->project_start?>">

		                          </div>

	                        </div>



                          	<div class="col-md-6 pb-xl-1 py-xl-1">

                          	    <h5 class="pb-xl-1 py-xl-1">Status</h5>

                            <select id="projectinput6" name="status" class="form-control">

                              <option value="none" selected="" disabled="">-- Status --</option>

                              <option value="1" <?=$njeh = ($row->project_status == 1) ? 'selected="selected"':''?>>

                                Billing

                              </option>

                              <option value="2" <?=$njeh = ($row->project_status == 2) ? 'selected="selected"':''?>>

                                Development

                              </option>

                              <option value="3" <?=$njeh = ($row->project_status == 3) ? 'selected="selected"':''?>>

                                Marketing

                              </option>

                              <option value="4" <?=$njeh = ($row->project_status == 4) ? 'selected="selected"':''?>>

                                Maintenance

                              </option>

                              <option value="5" <?=$njeh = ($row->project_status == 5) ? 'selected="selected"':''?>>
                                Design
                              </option>
                              <option value="6" <?=$njeh = ($row->project_status == 6) ? 'selected="selected"':''?>>
                                HTML
                              </option>
                              <option value="7" <?=$njeh = ($row->project_status == 7) ? 'selected="selected"':''?>>
                                Support
                              </option>
                              <option value="8" <?=$njeh = ($row->project_status == 8) ? 'selected="selected"':''?>>
                                Finish
                              </option>

                            </select>

                          </div>



                          <div class="col-lg-12">

                            <h5 class="pb-xl-1 py-xl-1">Detail Project</h5>

                            <textarea id="" rows="5" class="form-control" name="detail" placeholder="Tulis Detail Project"><?=$row->project_detail?></textarea>

                          </div>



                          <div class="col-md-12 pb-xl-1 py-xl-1">

                            <a target="_blank" href="<?=base_url()?>clients/project/<?=$row->file?>"><?=$row->file?></a>

                          	<h4><b>Attach File :</b></h4>

              								<fieldset class="form-group">

                                <input type="file" class="form-control-file" name="upload" id="exampleInputFile">

                              </fieldset>

                          </div>



                          <div class="col-md-12 pb-xl-1 py-xl-1">

                            <button type="submit" class="btn btn-primary">

                              <i class="la la-check-square-o"></i> SUBMIT

                            </button>

                          </div>

                        </div>

                      </form>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </section>

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
  
<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>

</body>



</html>