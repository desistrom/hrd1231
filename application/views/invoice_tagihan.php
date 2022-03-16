<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Invoice - Dewanstudio Power Management</title>

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

			<h1 class="text-center" style="padding:40px 0 40px 0;"><b>TAGIHAN</b></h1>

		</div>

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

          <div class="row breadcrumbs-top">

          </div>

          <!-- <h3 class="content-header-title mb-0">Horizontal Forms</h3> -->

        </div>

        <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right pb-xl-2 my-1">

		  	<a href="<?=base_url()?>invoice/tagihan_list">

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

                        <h2 class="text-center" style="padding:40px 0 40px 0;"><?=$row[0]['nama_client']?> (<?=$row[0]['surname_client']?>)</h2>
                        <div class="form-group row">

                        	<div class="col-md-6 pb-xl-1 py-xl-1">

                        	  <h5 class="pb-xl-1 py-xl-1">Name</h5>

                            <input type="text" class="form-control" name="nama" value="<?=$row[0]['tagihan_name']?>">
	                            
                          </div>

                          <div class="col-md-12 pb-xl-1 py-xl-1">

                            <h5 class="pb-xl-1 py-xl-1">Item</h5>
                            <?php if(!empty($row[0]['item'])){ ?>
                            <div id="files">
                              <?php
                                $decode = json_decode($row[0]['item']);
                                foreach ($decode as $key => $value) {
                                if(isset($value->item)){
                              ?>
                              <div>
                                <label>Item</label>
                                <input type="text" name="item[]" value="<?=$value->item?>">
                                <label>Kuantitas</label>
                                <input type="text" name="kuantitas[]" value="<?=$value->kuantitas?>">
                                <label>Harga</label>
                                <input type="text" name="harga[]" value="<?=$value->harga?>">
                                <label>Diskon</label>
                                <input type="text" name="diskon[]" value="<?=$value->diskon?>">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi[]" value="<?=$value->deskripsi?>">
                                <label>Grup Produk</label>
                                <input type="text" name="grup[]" value="<?=$value->grup?>">
                              </div>
                              <?php } } ?>
                              <!-- <input type="hidden" name="jumlah" value="1" id="jumlah">   -->                            
                            </div>
                            <?php } ?>
                            <div style="padding:10px 0;">
                              <a href="javascript:_add_more();" title="Add more"><img src="<?=base_url()?>assets/images/plus.svg" width="20;"> Tambah File</a>
                              <select name="produk">
                                <option value="">--PRODUK--</option>
                                <?php foreach($produk as $key => $product){ ?>
                                <option value="<?=$product['id']?>"><?=$product['nama_produk']?></option>
                                <?php } ?>
                              </select>
                              <button type="submit">Tambah Produk</button>

                            </div>

                          </div>
                          <?php if(!empty($row[0]['item'])){ ?>
                          <div class="col-md-12 pb-xl-1 py-xl-1">
                            <?php
                              $decode2 = json_decode($row[0]['item']);
                                foreach ($decode2 as $key => $value2) {
                                  if(isset($value2->item)){
                                    if ($value2->kuantitas == '') {
                                      $value2->kuantitas = 0;
                                    }
                                    $subharga[] = ($value2->harga * $value2->kuantitas) - ($value2->harga * $value2->diskon / 100);
                                  }
                                  else{
                                    $subharga[] = 0;
                                  }
                                }
                                $arrayharga = array_sum($subharga);
                                $pajakppn = $arrayharga * 10/100;
                                $totalharga = $arrayharga + $pajakppn;
                            ?>
                            Sub Total : <?=$arrayharga?><br>
                            Pajak Kuotasi : <?=$pajakppn?><br>
                            Total : <?=$totalharga?>
                          </div>
                          <?php } ?>
                          <div class="col-md-12 pb-xl-1 py-xl-1">

                            <button type="submit" class="btn btn-primary">

                              <i class="la la-check-square-o"></i> SAVE

                            </button>
                            <a href="<?=base_url()?>invoice/pdf?id=<?=$row[0]['id']?>&type=13">
                            <button type="button" class="btn btn-success">

                              <i class="la la-check-square-o"></i> PRINT

                            </button>
                            </a>
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

  <!-- CUSTOM JS -->
  <script type="text/javascript">
  function _add_more() {

      var del = document.createElement("a");
      del.appendChild(document.createTextNode("Delete "));
      del.href="#"; // Apply link styling

      //var extra = document.createElement('input');
      //extra.type="file";
      //extra.id="images[]";
      //extra.name="uploadreport[]";
      //extra.size="50";
      //extra.accept="image/jpeg";

      var extra = document.createElement('div');
      //Inputan Item
      var labelitem = document.createElement('label');
      labelitem.appendChild(document.createTextNode('Item'));
      var inputitem = document.createElement('input');
      inputitem.type = 'text';
      inputitem.name = 'item[]';
      //Inputan Kuantitas
      var labelkuantitas = document.createElement('label');
      labelkuantitas.appendChild(document.createTextNode('Kuantitas'));
      var inputkuantitas = document.createElement('input');
      inputkuantitas.type = 'text';
      inputkuantitas.name = 'kuantitas[]';
      //Inputan Harga
      var labelharga = document.createElement('label');
      labelharga.appendChild(document.createTextNode('Harga'));
      var inputharga = document.createElement('input');
      inputharga.type = 'text';
      inputharga.name = 'harga[]';
      //Inputan Diskon
      var labeldiskon = document.createElement('label');
      labeldiskon.appendChild(document.createTextNode('Diskon'));
      var inputdiskon = document.createElement('input');
      inputdiskon.type = 'text';
      inputdiskon.name = 'diskon[]';
      //Inputan Deskripsi
      var labeldeskripsi = document.createElement('label');
      labeldeskripsi.appendChild(document.createTextNode('Deskripsi'));
      var inputdeskripsi = document.createElement('input');
      inputdeskripsi.type = 'text';
      inputdeskripsi.name = 'deskripsi[]';
      //Inputan Grup
      var labelgrup = document.createElement('label');
      labelgrup.appendChild(document.createTextNode('Grup Produk'));
      var inputgrup = document.createElement('input');
      inputgrup.type = 'text';
      inputgrup.name = 'grup[]';

      extra.appendChild(document.createElement("br"));
      extra.appendChild(labelitem);
      extra.appendChild(inputitem);
      extra.appendChild(labelkuantitas);
      extra.appendChild(inputkuantitas);
      extra.appendChild(labelharga);
      extra.appendChild(inputharga);
      extra.appendChild(labeldiskon);
      extra.appendChild(inputdiskon);
      extra.appendChild(labeldeskripsi);
      extra.appendChild(inputdeskripsi);
      extra.appendChild(labelgrup);
      extra.appendChild(inputgrup);
      extra.appendChild(document.createElement("br"));
      extra.appendChild(del);


      //var additionalFile = document.createElement('span');
      //additionalFile.appendChild(document.createElement("br"));
      //additionalFile.appendChild(del);
      //additionalFile.appendChild(extra);

      document.getElementById("files").appendChild(extra);

      del.addEventListener('click', function(event){
          extra.parentElement.removeChild(extra);
          event.preventDefault();
      });
  }
  </script>
  <!-- CUSTOM JS -->

  
<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>

</body>



</html>