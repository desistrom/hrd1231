<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">
<!-- <?php error_reporting(0); ?> -->


<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Project Detail - Dewanstudio Power Management</title>

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

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>PROJECT DETAIL</b></h1>

      <h4><?=validation_errors()?></h4>

      <h4><?=$error = empty($msg) ? '' : '<div class="alert alert-danger error">'.$msg.'</div>'?></h4>

		</div>

    <form method="POST" enctype="multipart/form-data">

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

          <div class="row breadcrumbs-top">

          </div>

          <!-- <h3 class="content-header-title mb-0">Horizontal Forms</h3> -->

        </div>

        <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right pb-xl-2">

    		  	<a href="<?=base_url()?>reportproject">

              <button class="btn btn-info round mr-1 my-1" type="button"><i class="ft-arrow-left icon-left"></i> Back to list</button>

    			  </a>

           <div id="heading42" class="">
            <?php if(!$udahreport){ ?>
              <a data-toggle="collapse" data-parent="#accordionWrap4" href="#accordion42" aria-expanded="false"

              aria-controls="accordion42" class="btn btn-info round my-1 collapsed"><i class="ft-edit"></i> Add New Report</a>
            <?php } ?>
            </div>

          </div>

        </div>



            <div id="accordion42" role="tabpanel" aria-labelledby="heading42" class="card-collapse collapse" style="width: 100%" 

            aria-expanded="false">

              <div class="card-content">

                <div class="card-body">

                  <div>

                    <h1 class="text-center" style="padding:10px 0 10px 0;"><b>REPORT</b></h1>

                  </div>

                  <div class="row">

                    <!-- <div class="col-md-12 pb-xl-1 py-xl-1">

                      <h5 class="pb-xl-1 py-xl-1">Report Title</h5>

                        <input type="text" id="" class="form-control" placeholder="Report Title" name="fname">

                      </div> -->



                    <div class="col-lg-12">

                      <h5 class="pb-xl-1 py-xl-1">Report</h5>

                      <textarea id="" rows="5" class="form-control" name="report" placeholder="Tulis Detail Project"></textarea>

                    </div>



                      <div class="col-md-6 pb-xl-1 py-xl-1">

                          <h5 class="pb-xl-1 py-xl-1">Status (Option)</h5>

                      <select id="projectinput6" name="status" class="form-control">

                        <option value="" selected="" disabled="">-- Status --</option>

                        <option value="1">Billing</option>

                        <option value="2">Development</option>

                        <option value="3">Marketing</option>

                        <option value="4">Maintenance</option>

                        <option value="5">Design</option>
                        <option value="6">HTML</option>
                        <option value="7">Support</option>
                        <option value="8">Finish</option>
                      </select>

                    </div>



                    <div class="col-md-6 pb-xl-1 py-xl-1">

                      <h5 class="pb-xl-1 py-xl-1">Attach File : (Option)</h5>
                        <div id="files">
                        <input name="uploadreport[]" type="file" id="images[]" style="padding: 0 0 10px 0;" />
                        </div>
                        <div style="padding:10px 0;">
                          <a href="javascript:_add_more();" title="Add more"><img src="<?=base_url()?>assets/images/plus.svg" width="20;"> Tambah File</a>
                        </div>
                        <!-- <fieldset class="form-group">

                          <input type="file" name="uploadreport" class="form-control-file" id="exampleInputFile">

                        </fieldset> -->

                    </div>



                    <div class="col-md-12 pb-xl-1 py-xl-1">

                      <button type="submit" class="btn btn-primary">

                        <i class="la la-check-square-o"></i> SUBMIT

                      </button>

                    </div>

                  </div>

                </div>

              </div>

            </div>

      </div>

      </form>

      <div class="content-body">

        <!-- Basic form layout section start -->

        <section id="horizontal-form-layouts">

          <div class="row">

            <div class="col-md-4">

              <div class="card">

                <div class="card-content collpase show">

                  <div class="card-body">

                    <form class="form form-horizontal">

                      <div class="form-body">

                        <h1 class="form-section"><b><?=$project[0]['project_name']?></b></h1>

                          <div class="list-group-item">

                            <h4 class="list-group-item-heading"><b>START DATE :</b></h4>

                            <div class="list-group-item-text">

                              <?php

                                $mulaiproject = date('F d, Y', strtotime($project[0]['project_start']));

                                $mulai = date_create($mulaiproject);

                                $sekarang = date_create(date('Y-m-d'));

                                $diff = date_diff( $mulai, $sekarang );

                                

                                if ($diff->m != 0 && $diff->y != 0) {

                                  $selisihwaktu = $diff->y.' Years '.$diff->m.' Month '.$diff->d.' Days';

                                }

                                elseif($diff->m == 0 && $diff->y != 0){

                                  $selisihwaktu = $diff->y.' Years '.$diff->m.' Month '.$diff->d.' Days';

                                }

                                elseif ($diff->m != 0 && $diff->y == 0) {

                                  $selisihwaktu = $diff->m.' Month '.$diff->d.' Days';

                                }

                                elseif ($diff->m == 0 && $diff->y == 0) {

                                  $selisihwaktu = $diff->d.' Days';

                                }

                              ?>

                               <?=$mulaiproject?> (<?=$selisihwaktu?>)<br>

                             </div>

                          </div>

                          <?php

                          if ($project[0]['project_status'] == 1) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-danger round">Billing</button>';

                          }

                          elseif ($project[0]['project_status'] == 2) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-warning round">Development</button>';

                          }

                          elseif ($project[0]['project_status'] == 3) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-secondary round">Marketing</button>';

                          }

                          elseif ($project[0]['project_status'] == 4) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-info round">Maintenance</button>';

                          }

                          elseif ($project[0]['project_status'] == 5) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-primary round">Design</button>';

                          }

                          elseif ($project[0]['project_status'] == 6) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-dark round">HTML</button>';

                          }

                          elseif ($project[0]['project_status'] == 7) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-info round">Support</button>';

                          }
                          elseif ($project[0]['project_status'] == 8) {

                            $status = '<button type="button" class="btn btn-sm btn-outline-success round">Finish</button>';

                          }



                        ?>

                          <div class="list-group-item">

                            <h4 class="list-group-item-heading"><b>STATUS</b></h4>

                            <div class="list-group-item-text">

                               <?=$status?>

                             </div>

                          </div>

                          <div class="list-group-item">

                            <h4 class="list-group-item-heading"><b>DETAIL PROJECT :</b></h4>

                            <div class="list-group-item-text">

                               <?=$project[0]['project_detail']?><br>

                             </div>

                          </div>

                          <div class="list-group-item">

                            <h4 class="list-group-item-heading"><b>ATTACH FILE</b></h4>

                            <div class="list-group-item-text">

                               <a target="_blank" href="<?=base_url()?>clients/project/<?=$project[0]['file']?>"><?=$project[0]['file']?></a><br>

                             </div>

                          </div>

                          <div class="list-group-item">

                            <h4 class="list-group-item-heading"><b>UPLOADED BY</b></h4>

                            <div class="list-group-item-text">

                               <?=$project[0]['name']?><br>

                             </div>

                          </div>

                      </div>



                      <div class="form-actions">

                        <!-- <button type="button" class="btn btn-warning mr-1">

                          <i class="ft-x"></i> Cancel

                        </button> -->

                        <!-- <a href="<?=base_url()?>reportproject/edit/<?=$project[0]['id']?>" type="submit" class="btn btn-info">

                          <i class="ft-edit-2"></i> EDIT

                        </a> -->

                      </div>

                    </form>

                  </div>

                </div>

              </div>

            </div>

             <div class="col-md-8">

              <?php if(!empty($report)){ ?>

              <?php foreach($report as $key => $value){ ?>

              <div class="card">

                <div class="card-content collpase show">

                  <div class="card-body">

                    <form class="form form-horizontal" method="POST" action="<?=base_url()?>reportproject/edit_report/<?=$project[0]['id']?>/<?=$value['id']?>" enctype="multipart/form-data">

                      <div class="form-body">

                        <div class="form-group row">

                          <div class="col-md-3 pb-xl-1 py-xl-1">

                            <h4><b>ATTACH FILE :</b></h4>

                              <div>

                                <?php
                                  $filereport = json_decode($value['file']);
                                  foreach ($filereport as $key => $isifilereport) {
                                ?>
                                <a target="_blank" href="<?=base_url()?>clients/report/<?=$isifilereport->file?>"><?=$isifilereport->file?></a><hr>
                                <?php } ?>

                              </div>

                          </div>

                          <div class="col-md-7 pb-xl-1 py-xl-1">

                            <div class="list-group-item">

                              <table width="100%">

                                <tbody>

                                  <td>

                                    <?php

                                      $tanggal = date('F d, Y', strtotime($value['date']));

                                      $jam = date('G:i', strtotime($value['date'])); 

                                    ?>

                                    <h4><b><?=$tanggal?></b></h4>

                                    <h5><?=$jam?></h5>

                                  </td>

                                  <td class="right">
                                  <?php if(!empty($value['img'])){?>
                                  <span class="avatar avatar-xs">

                                    <img class="box-shadow-2" src="<?=base_url()?>clients/user/<?=$value['img']?>" alt="avatar">

                                  </span>
                                  <?php } ?>

                                  <span><?=$value['name']?></span>

                                  </td>

                                </tbody>

                              </table>

                            </div>

                            <div class="list-group-item">

                              <h6><?=$value['report']?></h6>

                            </div>

                          </div>

                          <div class="col-md-2 pb-xl-1 py-xl-1">

                              <div class="form-group">

                              <!-- Button trigger modal -->
                              <?php if($this->session->userdata("user_id") == $value['id_user']) { ?>
                              <button type="button" class="btn btn btn-info" data-toggle="modal"

                              data-target="#iconModal<?=$value['id']?>">

                                <i class="ft-edit-2"></i> EDIT

                              </button>
                              <?php } ?>

                              <!-- Modal -->

                              <div class="modal fade text-left" id="iconModal<?=$value['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"

                              aria-hidden="true">

                                <div class="modal-dialog" role="document">

                                  <div class="modal-content">

                                    <div class="modal-header">

                                      <h4 class="modal-title" id="myModalLabel2"><i class="la la-road2"></i> EDIT DESCRIPTION</h4>

                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true">&times;</span>

                                      </button>

                                    </div>

                                    

                                    <div class="modal-body">

                                      <textarea id="" style="height:250px;" class="form-control" name="report<?=$value['id']?>" placeholder="" value=""><?=$value['report']?></textarea>
                                      <br><strong>Jika Anda Upload Gambar Baru Maka Gambar Yang Lama Akan Di Hapus</strong><br>
                                      <?php
                                        $filereport = json_decode($value['file']);
                                        foreach ($filereport as $key => $isifilereport) {
                                      ?>
                                      <a target="_blank" href="<?=base_url()?>clients/report/<?=$isifilereport->file?>"><?=$isifilereport->file?></a>
                                      <?php } ?>
                                      <div id="files_edit<?=$value['id']?>">
                                      <input name="uploadreport<?=$value['id']?>[]" type="file" id="images[]" style="padding: 0 0 10px 0;" />
                                      </div>
                                      <div style="padding:10px 0;">
                                        <a href="javascript:_add_more_edit(<?=$value['id']?>);" title="Add more"><img src="<?=base_url()?>assets/images/plus.svg" width="20;"> Tambah File</a>
                                      </div>

                                      <!-- <input type="file" name="uploadreport<?=$value['id']?>" class="form-control-file" id="exampleInputFile"> -->

                                      <input type="hidden" name="id">

                                    </div>

                                    <div class="modal-footer">

                                      <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>

                                      <button type="submit" class="btn btn-outline-primary">Save changes</button>

                                    </div>

                                  </div>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </form>

                  </div>

                </div>

              </div>

              <?php } ?>

              <?php } ?>

              <div class="col-sm-12 col-md-7">

                          <div class="dataTables_paginate paging_simple_numbers" id="project-bugs-list_paginate">

                            <?=$pagination?>

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

  <!-- js tambah file -->
  <script type="text/javascript">
    function _add_more() {

      var del = document.createElement("a");
      del.appendChild(document.createTextNode("Delete "));
      del.href="#"; // Apply link styling

      var extra = document.createElement('input');
      extra.type="file";
      extra.id="images[]";
      extra.name="uploadreport[]";
      //extra.size="50";
      //extra.accept="image/jpeg";

      var additionalFile = document.createElement('span');
      additionalFile.appendChild(document.createElement("br"));
      additionalFile.appendChild(del);
      additionalFile.appendChild(extra);

      document.getElementById("files").appendChild(additionalFile);

      del.addEventListener('click', function(event){
          additionalFile.parentElement.removeChild(additionalFile);
          event.preventDefault();
      });
  }

  function _add_more_edit(i) {

      var del = document.createElement("a");
      del.appendChild(document.createTextNode("Delete "));
      del.href="#"; // Apply link styling

      var extra = document.createElement('input');
      extra.type="file";
      extra.id="images[]";
      extra.name="uploadreport"+i+"[]";
      //extra.size="50";
      //extra.accept="image/jpeg";

      var additionalFile = document.createElement('span');
      additionalFile.appendChild(document.createElement("br"));
      additionalFile.appendChild(del);
      additionalFile.appendChild(extra);

      document.getElementById("files_edit"+i).appendChild(additionalFile);

      del.addEventListener('click', function(event){
          additionalFile.parentElement.removeChild(additionalFile);
          event.preventDefault();
      });
  }
  </script>
  <!-- end js tambah file -->

  <!-- js remove attachfile -->
  <script type="text/javascript">
    function setup() {
    // get all buttons
    var myButtons = [];
    myButtons = document.getElementsByClassName("remove");
    
    // attach click event to each one
    for(i = 0; i < myButtons.length; i ++){
      myButtons[i].addEventListener("click", function(){
        this.parentNode.remove();
      })
    }
  }

  setup();
  </script>
  <!-- end js remove attachfile -->

  <!-- JS -->

<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>

</body>



</html>