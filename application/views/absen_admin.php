<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



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

                <h2 class="card-title-center">ABSEN HARI INI</h2>

              </div>

              



              <div class="pr-xl-1 px-xl-1">

              <table class="table table-striped table-middle table-responsive">
                <thead style="text-align:center;">
                  <th>NAMA</th>
                  <th>PUNCH IN</th>
                  <th>PUNCH OUT</th>
                  <th>ACTION</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($ateam as $key => $value) {
                  ?> 
                  <?php 
                    $haridb = date_create(date('d-M-Y', strtotime($value['last_punch_date'])));
                    $harisekarang = date_create(date('d-M-Y'));
                    $now = date_now_ymd(true);
                    $tglskrg = date_utc_ymd($now);
                  ?>
                  <tr style="text-align:center;">
                    <td>
                    <a href="<?=base_url()?>dashboard/team/<?=$value['id']?>" class="text-bold-600"><h5><?=$value['name']?></h5></a>
                    </td>


                      <!-- <?php 
                        $sql ="SELECT `id_user` FROM ds_sakit WHERE `tanggal_mulai` <= '2019-11-03' AND `tanggal_akhir` >= '2019-11-03'";
                        $query = $this->db->query($sql); 
                      ?>

                      <?php if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) { ?>

                            <?php if($value['id'] == $row->id_user) { ?>

                              <td>1</td>
                              <td>2</td>

                            <?php } else{ ?>

                              <td>0</td>

                              <?php } ?> 

                        <?php } ?>
                      <?php } ?> -->

                    
                    <!-- BATAS -->


                      <!-- Jika Waktu absen terakhir kali tidak sama dengan tanggal waktu sekarang -->
                      <?php if ($value['last_punch_date'] == $tglskrg) { ?> 

                          <td title="<?=$value['last_punch_in_desc']?>" data-toggle="tooltip" data-placement="top">
                            <a><?=$value['last_punch_in']?></a>
                          </td>
                          <td title="<?=$value['last_punch_out_desc']?>" data-toggle="tooltip" data-placement="top">
                            <a><?= ($value['last_punch_out'] == '') ? '0' : $value['last_punch_out']; ?></a>
                          </td> 

                      <?php 
                        } else{
                      ?>
                      
                          <td>0</td>
                          <td>0</td>

                        <?php
                          }
                        ?>


                    <!-- BATAS -->
                    
                    <td>
                      <a href="<?=base_url()?>absen/timesheet/<?=$value['id']?>">
                        <button type="button" class="btn btn-block btn-info">Detail</button>
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>

              </div>

            </div>

          </div>



          <div id="recent-transactions" class="col-xl-4 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                



              

                <h4 class="card-title-center"><?=date('F Y')?></h4>

                <!-- <h5 class="p-xl-1"><b>TOTAL ABSEN : 20</b></h5> -->

                <div class="pl-xl-1 pr-xl-1 px-xl-1">

                  <!-- <?php if(!empty($ambil_absen)){?>

                <?php foreach($ambil_absen as $absen){ ?>

                 <br>

                



                  <b><?php echo date('d-m-Y', strtotime($absen['punch_date'])) ;?></b>

                  <p class="m-xl-0">CHECK IN :  <?php echo  $absen['punch_in'];?></p>

                  <p class="m-xl-0">CHECK OUT : <?php echo  $absen['punch_out'];?></p>



                  <?php } ?>
                  <?php } ?> -->

                </div><br>
                <?php
                  $rule = $this->session->userdata('rule');
                  if ($rule != 1 && $rule != 2) {
                ?>
                <a href="<?=base_url()?>absen/timesheet/<?=$this->session->userdata('user_id')?>"><button class="btn btn-block btn-success">Timesheet</button></a><br>
                <?php } ?>
                <a href="<?=base_url()?>absen/daftar"><button class="btn btn-block btn-success">Daftar Teamlist</button></a>



              </div>

            </div>

          </div>

        </div>

        <!--/ Recent Transactions -->       

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