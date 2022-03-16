<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="POWER MANAGEMENT">
  <title>Login - Dewanstudio Power Management</title>
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/ico/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="../../../../../maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.html"
  rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/forms/icheck/custom.css">
  

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/app.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/core/menu/menu-types/horizontal-menu.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/login-register.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
  
</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="horizontal-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Form Register -->
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login with Username</span>
                  </h6>
                  <h6 class="card-subtitle text-muted text-center font-small-3 pt-2">
                    <span><?=$msg?></span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" method="POST" novalidate>
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input name="email" type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="Your Username" required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input name="password" type="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Enter Password" required>
                        <div class="form-control-position">
                          <i class="ft-lock"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <!--<input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>-->
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right"><!--<a href="recover-password.html" class="card-link">Forgot Password?</a>--></div>
                      </div>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Form Register -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  
  <script src="<?=base_url()?>assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  
  <script type="text/javascript" src="<?=base_url()?>assets/vendors/js/ui/jquery.sticky.js"></script>
  <script src="<?=base_url()?>assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  
  <script src="<?=base_url()?>assets/js/core/app-menu.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/core/app.min.js" type="text/javascript"></script>
  

  <script src="<?=base_url()?>assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
</body>

</html>