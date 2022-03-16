<style>
  .notif-pending{
    padding: 5px 10px;
    border-radius: 30px;
    position: absolute;
    top: -10px;
    left: -10px;
    font-weight: 900;
  }
</style>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">

    <div class="navbar-wrapper">



      <!-- menu left navbar -->

      <div class="navbar-header">

        <ul class="nav navbar-nav flex-row">

          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>

          <li class="nav-item">

            <a class="navbar-brand" href="<?=base_url()?>">

              <img class="brand-logo" alt="logo" src="<?=base_url()?>assets/images/logo/logo-ds.png">

            </a>

          </li>

          <li class="nav-item d-md-none">

            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-options-vertical"></i></a>

          </li>

        </ul>

      </div>

      <!-- end menu left navbar -->



      <!-- menu right notification -->

      <div class="navbar-container container center-layout">

        <div class="collapse navbar-collapse" id="navbar-mobile">

          <ul class="nav navbar-nav mr-auto float-left">

            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>

            

            <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>

              <div class="search-input">

                <input class="input" type="text" placeholder="Search...">

              </div>

            </li> -->

          </ul>

          <ul class="nav navbar-nav float-right">

            <li class="dropdown dropdown-user nav-item">

              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                <span class="mr-1">Hello,

                  <span class="user-name text-bold-700"><?=$this->session->userdata('full_name')?></span>

                </span>

                <span class="avatar avatar-online">

                  <?php if (!empty($this->session->userdata('img'))) { ?>

                  <img src="<?=base_url()?>clients/user/<?=$this->session->userdata('img')?>" alt="avatar"><!-- <i></i> --></span>

                  <?php } ?>

              </a>

              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?=base_url()?>teamlist/edit/<?=$this->session->userdata('user_id')?>"><i class="ft-user"></i> Edit Profile</a>

                <!-- <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>

                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>

                <a

                class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a> -->

                  <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=base_url()?>login/logout"><i class="ft-power"></i> Logout</a>

              </div>

            </li>

          </ul>

        </div>

      </div>

      <!-- end menu right notification -->

    </div>

  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  

  

  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"

  role="navigation" data-menu="menu-wrapper">

  <!-- menu navbar dahsboard dll -->

  <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <!--<li class="nav-item" data-menu="">
          <a class="nav-link" href="dashboard.html" data-toggle=""><i class="icon-home"></i>
            <span>DASHBOARD</span>
          </a>
        </li>-->
       <!--  <li class="nav-item" data-menu=""><a class="nav-link" href="team-list.html" data-toggle=""><i class="icon-list"></i><span>TEAM LIST</span></a>
        </li> -->
        <li class="nav-item" data-menu=""><a class="nav-link" href="<?=base_url()?>" data-toggle=""><i class="icon-people"></i><span>HRD SYSTEM</span></a>
        </li>
        <li class="nav-item" data-menu=""><a class="nav-link" href="<?=base_url()?>reportproject" data-toggle=""><i class="icon-note"></i><span>PROJECT LIST</span></a>
      </ul>
    </div>

    <!-- end menu navbar dahsboard dll -->

  </div>