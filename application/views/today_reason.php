<!DOCTYPE html>

<html lang="en">

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

 





  <div class="app-content container center-layout mt-2">

    <div class="content-wrapper">

      <div class="content-body">

    		<div>

    			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>HRD SYSTEM</b></h1>

    		</div>







                <div class="row">

          <div id="recent-transactions" class="col-xl-12 col-lg-12 col-12">

            <div class="">

            <form role="form" method="post">
              
              <?php if ($over) {?>
                <div class="alert alert-success">
                  <strong>Penting!</strong>
                    <?php  echo "Silahkan beri alasan mengapa anda bekerja lembur, agar pimpinan atau manajemen mengetahui alasan anda.";?>
                </div>
              <?php } ?>

              <?php if (!$over) {?>
                <div class="alert alert-danger">
                    <strong>Penting!</strong> 
                      <?php  echo "Silahkan beri alasan jika anda terlambat hadir atau pulang lebih awal, agar pimpinan atau manajemen mengetahui alasan anda.";?>
                </div>
              <?php } ?>

                <?=validation_errors()?>

                <?=$error = empty($msg) ? '' : '<div class="alert alert-danger error">'.$msg.'</div>'?>

                <div class="form-group">

                  <label for="inputReason">Reason</label>

                  <textarea class="form-control" name="reason" id="inputReason" rows="5" placeholder="Enter your reason"><?=$reason?></textarea>

                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="<?=base_url()?>absen">Cancel</a>
                  </div>
                </div>

            </form>

            </div>

          </div>

          </div>

          </div>
        </div>
      </div><br><br>



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