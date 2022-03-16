<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>New Team - Dewanstudio Power Management</title>

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

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>NEW TEAM</b></h1>

		</div>

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

          <div class="row breadcrumbs-top">

          </div>

          <!-- <h3 class="content-header-title mb-0">Horizontal Forms</h3> -->

        </div>

        <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right pb-xl-2 my-1">

		  	<a href="<?=base_url()?>">

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

                    <form class="form form-horizontal" method="POST" enctype="multipart/form-data">

                      <?=validation_errors()?>

                      <?=$error = empty($msg) ? '' : '<div class="alert alert-danger error">'.$msg.'</div>'?>

                      <div class="form-body">

                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>



                        <div class="form-group row">

                        	  <div class="col-md-12 pb-xl-1 py-xl-1">

                        	    <h5 class="pb-xl-1 py-xl-1">Full Name</h5>

	                            <input type="text" value="<?=$row->name?>" id="projectinput1" class="form-control" placeholder="Full Name"

	                            name="name">

                          	</div>



                          	<div class="col-md-6 pb-xl-1 py-xl-1">

                          	    <h5 class="pb-xl-1 py-xl-1">Email</h5>

	                            <input type="email" value="<?=$row->email?>" id="projectinput1" class="form-control" placeholder="Email"

	                            name="email">

                          	</div>



                          	<div class="col-md-6 pb-xl-1 py-xl-1">

                          	    <h5 class="pb-xl-1 py-xl-1">Tanggal Bergabung</h5>

                          		<div class="input-group">

		                            <div class="input-group-prepend">

		                              <span class="input-group-text"><i class="ft-calendar"></i></span>

		                            </div>

		                            <input id="" value="<?=$row->since?>" class="form-control" name="since" type="date">

		                          </div>

	                        </div>



                          <div class="col-md-6 pb-xl-1 py-xl-1">

                              <h5 class="pb-xl-1 py-xl-1">Password</h5>

                              <input type="password" id="projectinput1" class="form-control" placeholder="Password"

                              name="password">

                            </div>



                            <div class="col-md-6 pb-xl-1 py-xl-1">

                                <h5 class="pb-xl-1 py-xl-1">Confirm Password</h5>

                              <input type="password" id="projectinput1" class="form-control" placeholder="Confirm Password"

                              name="passconf">

                            </div>



                          	<div class="col-md-6 pb-xl-1 py-xl-1">

                            <select id="projectinput6" name="company" class="form-control">

                              <option value="none" selected="" disabled="">Departemen</option>

                              <option <?=$c=($row->company=="HRD") ? 'selected="selected"' : ''?> value="HRD">HRD </option>

                              <option <?=$c=($row->company=="Team Design") ? 'selected="selected"' : ''?> value="Team Design">Team Design </option>

                              <option <?=$c=($row->company=="Team Marketing/Sales") ? 'selected="selected"' : ''?> value="Team Marketing/Sales">Team Marketing/Sales </option>

                              <option <?=$c=($row->company=="Team Admin") ? 'selected="selected"' : ''?> value="Team Admin">Team Admin </option>

                              <option <?=$c=($row->company=="Team Programmer") ? 'selected="selected"' : ''?> value="Team Programmer">Team Programmer </option>

                              <option <?=$c=($row->company=="Freelance Programmer") ? 'selected="selected"' : ''?> value="Freelance Programmer">Freelancer Programmer </option>

                              <option <?=$c=($row->company=="Freelance Marketing") ? 'selected="selected"' : ''?> value="Freelance Marketing">Freelancer Marketing </option>

                              <option <?=$c=($row->company=="Freelance Designer") ? 'selected="selected"' : ''?> value="Freelance Designer">Freelancer Designer </option>

                            </select>

                          </div>



                          <div class="col-md-6 pb-xl-1 py-xl-1">

                            <select id="projectinput7" name="rule" class="form-control">

                              <option value="">Please select rule</option>

                              <?php foreach ($rule as $r){?>

                              <option <?=$role=($row->rule==$r['id']) ? 'selected="selected"' : ''?> value="<?=$r['id']?>"><?=$r['name']?></option>

                              <?php }?>

                            </select>

                          </div>



                          <div class="col-md-6 pb-xl-1 py-xl-1">

                          	<h4><b>Photo Attach :</b></h4>

              								<input type='file' name="upload1" onchange="readURL(this);" style="padding:10px 0 10px 0;" />

                              <?php if(!empty($row->img)){ ?>

              							<img id="blah" src="<?=base_url()?>clients/user/<?=$row->img?>" alt="your image" width="200px" />

                            <?php } else { ?>

                            <img id="blah" src="http://placehold.it/200" alt="your image" width="200px" />

                            <?php } ?>

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



                          <div class="col-md-6 pb-xl-1 py-xl-1">

                              <h5 class="pb-xl-1 py-xl-1">Total Cuti</h5>

                          	<input type="text" name="cuti" value="<?=$cuti?>" id="projectinput9" class="form-control" placeholder="Total Cuti">

                          </div>

                        </div>



                      </div>

                      <div class="form-actions center">

                        <!-- <button type="button" class="btn btn-warning mr-1">

                          <i class="ft-x"></i> Cancel

                        </button> -->

                        <button type="submit" class="btn btn-primary">

                          <i class="la la-check-square-o"></i> SUBMIT

                        </button>

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

</body>



</html>