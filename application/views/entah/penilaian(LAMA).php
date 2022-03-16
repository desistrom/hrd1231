<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">

  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">

  <meta name="author" content="PIXINVENT">

  <title>Penilaian - Dewanstudio Power Management</title>

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

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/plugins/forms/wizard.min.css">

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



        <!-- menu absen dll -->
        <div class="row">

          <div class="col-xl-2 col-lg-6 col-12">
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

          <div class="col-xl-2 col-lg-6 col-12">
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

          <div class="col-xl-2 col-lg-6 col-12">
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

          <div class="col-xl-2 col-lg-6 col-12">
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



        <section id="demo">

          <div class="row">

            <div class="col-12">

              <div class="card">

                <div class="card-content collapse show">

                  <div class="card-body">

                    <div class="card-header">

                      <h2 class="card-title-center">PENILAIAN</h2>

                      <h4><?=validation_errors()?></h4>

                        <h4><?=$error = empty($msg) ? '' : '<div class="alert alert-danger error">'.$msg.'</div>'?></h4>

                    </div>

                    <form method="POST" enctype="multipart/form-data" class="number-tab-steps wizard-circle">

                      <!-- Step 1 -->

                      <h6>PEMAHAMAN TERHADAP TUGAS</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>PEMAHAMAN TERHADAP TUGAS</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>1. Pemahaman pembuatan rencana / program kerja sesuai jabatannya</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal1" class="custom-control-input" id="pemahaman-5a" value="5" type="radio">

                                  <label class="custom-control-label" for="pemahaman-5a">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal1" class="custom-control-input" id="pemahaman-4a" value="4" type="radio">

                                  <label class="custom-control-label" for="pemahaman-4a">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal1" class="custom-control-input" id="pemahaman-3a" value="3" type="radio">

                                  <label class="custom-control-label" for="pemahaman-3a">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal1" class="custom-control-input" id="pemahaman-2a" value="2" type="radio">

                                  <label class="custom-control-label" for="pemahaman-2a">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal1" class="custom-control-input" id="pemahaman-1a" value="1" type="radio">

                                  <label class="custom-control-label" for="pemahaman-1a">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>2. Pemahaman terhadap proses / alur bisnis di unit kerjanya</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-5b" value="5" type="radio">

                                  <label class="custom-control-label" for="pemahaman-5b">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-4b" value="4" type="radio">

                                  <label class="custom-control-label" for="pemahaman-4b">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-3b" value="3" type="radio">

                                  <label class="custom-control-label" for="pemahaman-3b">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-2b" value="2" type="radio">

                                  <label class="custom-control-label" for="pemahaman-2b">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-1b" value="1" type="radio">

                                  <label class="custom-control-label" for="pemahaman-1b">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>3. Pemahaman terhadap prosedur standar pelayanan konsumen</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-5c" value="5" type="radio">

                                  <label class="custom-control-label" for="pemahaman-5c">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-4c" value="4" type="radio">

                                  <label class="custom-control-label" for="pemahaman-4c">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-3c" value="3" type="radio">

                                  <label class="custom-control-label" for="pemahaman-3c">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-2c" value="2" type="radio">

                                  <label class="custom-control-label" for="pemahaman-2c">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-1c" value="1" type="radio">

                                  <label class="custom-control-label" for="pemahaman-1c">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>4. Pemahaman terhadap prosedur standar kebersihan lingkungan kerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-5d" value="5" type="radio">

                                  <label class="custom-control-label" for="pemahaman-5d">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-4d" value="4" type="radio">

                                  <label class="custom-control-label" for="pemahaman-4d">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-3d" value="3" type="radio">

                                  <label class="custom-control-label" for="pemahaman-3d">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-2d" value="2" type="radio">

                                  <label class="custom-control-label" for="pemahaman-2d">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-1d" value="1" type="radio">

                                  <label class="custom-control-label" for="pemahaman-1d">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>5. Pemahaman tentang strategi pengembangan diri</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-5e" value="5" type="radio">

                                  <label class="custom-control-label" for="pemahaman-5e">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-4e" value="4" type="radio">

                                  <label class="custom-control-label" for="pemahaman-4e">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-3e" value="3" type="radio">

                                  <label class="custom-control-label" for="pemahaman-3e">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-2e" value="2" type="radio">

                                  <label class="custom-control-label" for="pemahaman-2e">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-1e" value="1" type="radio">

                                  <label class="custom-control-label" for="pemahaman-1e">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>6. Pemahaman terhadap nilai-nilai budaya perusahaan (GROUP)</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-5f" value="5" type="radio">

                                  <label class="custom-control-label" for="pemahaman-5f">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-4f" value="4" type="radio">

                                  <label class="custom-control-label" for="pemahaman-4f">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-3f" value="3" type="radio">

                                  <label class="custom-control-label" for="pemahaman-3f">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-2f" value="2" type="radio">

                                  <label class="custom-control-label" for="pemahaman-2f">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-1f" value="1" type="radio">

                                  <label class="custom-control-label" for="pemahaman-1f">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 2 -->

                      <h6>PELAKSANAAN TUGAS</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>PELAKSANAAN TUGAS</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>1. Ketepatan waktu pelaksanaan rencana kerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="ketepatan-5a" value="5" type="radio">

                                  <label class="custom-control-label" for="ketepatan-5a">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="ketepatan-4a" value="4" type="radio">

                                  <label class="custom-control-label" for="ketepatan-4a">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="ketepatan-3a" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3a">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="ketepatan-2a" value="2" type="radio">

                                  <label class="custom-control-label" for="ketepatan-2a">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="ketepatan-1a" value="1" type="radio">

                                  <label class="custom-control-label" for="ketepatan-1a">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>2. Kecepatan waktu pelaksanaan kerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="ketepatan-5b" value="5" type="radio">

                                  <label class="custom-control-label" for="ketepatan-5b">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="ketepatan-4b" value="4" type="radio">

                                  <label class="custom-control-label" for="ketepatan-4b">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="ketepatan-3b" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3b">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="ketepatan-2b" value="2" type="radio">

                                  <label class="custom-control-label" for="ketepatan-2b">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="ketepatan-1b" value="1" type="radio">

                                  <label class="custom-control-label" for="ketepatan-1b">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>3. Ketelitian dalam pengerjaan tugas</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="ketepatan-5c" value="5" type="radio">

                                  <label class="custom-control-label" for="ketepatan-5c">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="ketepatan-4c" value="4" type="radio">

                                  <label class="custom-control-label" for="ketepatan-4c">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="ketepatan-3c" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3c">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="ketepatan-2c" value="2" type="radio">

                                  <label class="custom-control-label" for="ketepatan-2c">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="ketepatan-1c" value="1" type="radio">

                                  <label class="custom-control-label" for="ketepatan-1c">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>4. Kerapihan dalam penataan arsip / dokumen pekerjaan</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="ketepatan-5d" value="5" type="radio">

                                  <label class="custom-control-label" for="ketepatan-5d">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="ketepatan-4d" value="4" type="radio">

                                  <label class="custom-control-label" for="ketepatan-4d">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="ketepatan-3d" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3d">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="ketepatan-2d" value="2" type="radio">

                                  <label class="custom-control-label" for="ketepatan-2d">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="ketepatan-1d" value="1" type="radio">

                                  <label class="custom-control-label" for="ketepatan-1d">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>5. Ketahanan dalam bekerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="ketepatan-5e" value="5" type="radio">

                                  <label class="custom-control-label" for="ketepatan-5e">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="ketepatan-4e" value="4" type="radio">

                                  <label class="custom-control-label" for="ketepatan-4e">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="ketepatan-3e" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3e">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="ketepatan-2e" value="2" type="radio">

                                  <label class="custom-control-label" for="ketepatan-2e">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="ketepatan-1e" value="1" type="radio">

                                  <label class="custom-control-label" for="ketepatan-1e">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>6. Sistematika kerja (prosedural – sesuai SOP)</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="ketepatan-5f" value="5" type="radio">

                                  <label class="custom-control-label" for="ketepatan-5f">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="ketepatan-4f" value="4" type="radio">

                                  <label class="custom-control-label" for="ketepatan-4f">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="ketepatan-3f" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3f">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="ketepatan-2f" value="2" type="radio">

                                  <label class="custom-control-label" for="ketepatan-2f">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="ketepatan-1f" value="1" type="radio">

                                  <label class="custom-control-label" for="ketepatan-1f">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 3 -->

                      <h6>PENAMPILAN DIRI</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>PENAMPILAN DIRI</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>1. Kebugaran dan kebersihan diri</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="penampilan-5a" value="5" type="radio">

                                  <label class="custom-control-label" for="penampilan-5a">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="penampilan-4a" value="4" type="radio">

                                  <label class="custom-control-label" for="penampilan-4a">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="penampilan-3a" value="3" type="radio">

                                  <label class="custom-control-label" for="penampilan-3a">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="penampilan-2a" value="2" type="radio">

                                  <label class="custom-control-label" for="penampilan-2a">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="penampilan-1a" value="1" type="radio">

                                  <label class="custom-control-label" for="penampilan-1a">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>2. Kerapihan dalam berpakaian</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="penampilan-5b" value="5" type="radio">

                                  <label class="custom-control-label" for="penampilan-5b">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="penampilan-4b" value="4" type="radio">

                                  <label class="custom-control-label" for="penampilan-4b">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="penampilan-3b" value="3" type="radio">

                                  <label class="custom-control-label" for="penampilan-3b">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="penampilan-2b" value="2" type="radio">

                                  <label class="custom-control-label" for="penampilan-2b">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="penampilan-1b" value="1" type="radio">

                                  <label class="custom-control-label" for="penampilan-1b">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 4 -->

                      <h6>SIKAP KERJA</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>SIKAP KERJA</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>1. Semangat kerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="semangat-5a" value="5" type="radio">

                                  <label class="custom-control-label" for="semangat-5a">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="semangat-4a" value="4" type="radio">

                                  <label class="custom-control-label" for="semangat-4a">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="semangat-3a" value="3" type="radio">

                                  <label class="custom-control-label" for="semangat-3a">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="semangat-2a" value="2" type="radio">

                                  <label class="custom-control-label" for="semangat-2a">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="semangat-1a" value="1" type="radio">

                                  <label class="custom-control-label" for="semangat-1a">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>2. Kepatuhan menjalankan peraturan perusahaan</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="semangat-5b" value="5" type="radio">

                                  <label class="custom-control-label" for="semangat-5b">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="semangat-4b" value="4" type="radio">

                                  <label class="custom-control-label" for="semangat-4b">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="semangat-3b" value="3" type="radio">

                                  <label class="custom-control-label" for="semangat-3b">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="semangat-2b" value="2" type="radio">

                                  <label class="custom-control-label" for="semangat-2b">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="semangat-1b" value="1" type="radio">

                                  <label class="custom-control-label" for="semangat-1b">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>3. Kepatuhan terhadap instruksi kerja unit / pimpinan</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="semangat-5c" value="5" type="radio">

                                  <label class="custom-control-label" for="semangat-5c">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="semangat-4c" value="4" type="radio">

                                  <label class="custom-control-label" for="semangat-4c">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="semangat-3c" value="3" type="radio">

                                  <label class="custom-control-label" for="ketepatan-3c">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="semangat-2c" value="2" type="radio">

                                  <label class="custom-control-label" for="semangat-2c">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="semangat-1c" value="1" type="radio">

                                  <label class="custom-control-label" for="semangat-1c">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>4. Penyesuaian diri terhadap lingkungan kerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="semangat-5d" value="5" type="radio">

                                  <label class="custom-control-label" for="semangat-5d">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="semangat-4d" value="4" type="radio">

                                  <label class="custom-control-label" for="semangat-4d">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="semangat-3d" value="3" type="radio">

                                  <label class="custom-control-label" for="semangat-3d">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="semangat-2d" value="2" type="radio">

                                  <label class="custom-control-label" for="semangat-2d">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="semangat-1d" value="1" type="radio">

                                  <label class="custom-control-label" for="semangat-1d">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>5. Kepedulian terhadap lingkungan kerja</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="semangat-5e" value="5" type="radio">

                                  <label class="custom-control-label" for="semangat-5e">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="semangat-4e" value="4" type="radio">

                                  <label class="custom-control-label" for="semangat-4e">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="semangat-3e" value="3" type="radio">

                                  <label class="custom-control-label" for="semangat-3e">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="semangat-2e" value="2" type="radio">

                                  <label class="custom-control-label" for="semangat-2e">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="semangat-1e" value="1" type="radio">

                                  <label class="custom-control-label" for="semangat-1e">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="form-group mt-1 my-1">

                              <h6>6. Kedisiplinan</h6>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">

                              <div class="input-group mb-1 my-1">

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="semangat-5f" value="5" type="radio">

                                  <label class="custom-control-label" for="semangat-5f">5</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="semangat-4f" value="4" type="radio">

                                  <label class="custom-control-label" for="semangat-4f">4</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="semangat-3f" value="3" type="radio">

                                  <label class="custom-control-label" for="semangat-3f">3</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="semangat-2f" value="2" type="radio">

                                  <label class="custom-control-label" for="semangat-2f">2</label>

                                </div>

                                <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="semangat-1f" value="1" type="radio">

                                  <label class="custom-control-label" for="semangat-1f">1</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 5 -->

                      <h6>CATATAN KHUSUS</h6>

                      <fieldset>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="row mt-3">

                              <h3><b>CATATAN KHUSUS</b></h3>

                            </div>

                            <div class="form-group mt-2">

                              <label for=""><h6>Dalam kolom ini, Anda dipersilahkan untuk memberikan catatan-catatan yang dianggap perlu mengenai karyawan yang Anda nilai, terutama mengenai kondite (track record), proses, dan hasil kerja yang bersangkutan selama berada dibawah pengawasan Anda.</h6></label>

                              <textarea name="catatankhusus" id="" rows="" class="form-control"></textarea>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 6 -->

                      <h6>AREA YANG HARUS DIPERBAIKI</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>AREA YANG HARUS DIPERBAIKI</b></h3>

                        </div>

                        <div class="form-group mt-2">

                          <textarea name="areadiperbaiki" id="" rows="" class="form-control"></textarea>

                        </div>

                      </fieldset>

                      <!-- Step 7 -->

                      <h6>AREA YANG HARUS DIPERTAHANKAN</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>AREA YANG HARUS DIPERTAHANKAN</b></h3>

                        </div>

                        <div class="form-group mt-2">

                          <textarea name="areadipertahankan" id="" rows="" class="form-control"></textarea>

                        </div>

                      </fieldset>

                      <!-- Step 8 -->

                      <h6>REKOMENDASI</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>REKOMENDASI</b></h3>

                        </div>

                        <div class="form-group mt-2">

                          <textarea name="rekomendasi" id="" rows="" class="form-control"></textarea>

                        </div>

                      </fieldset>

                      <button type="submit" class="btn btn-info" style="position: absolute;right: 0;z-index: 9999;">SUBMIT</button>

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

  <!-- JS -->

  <script src="<?=base_url()?>assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>



 <script src="<?=base_url()?>assets/js/scripts/forms/wizard-steps.min.js" type="text/javascript"></script>

</body>



</html>