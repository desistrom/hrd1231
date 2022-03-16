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

                      <h6>TENTANG DIRI SENDIRI</h6>

                      <fieldset>

                        <div class="text-center my-2">

                          <h1><b>TENTANG DIRI SENDIRI</b></h1>

                        </div>

                        <div class="row mt-2">

                          <h3><b>Olah raga</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>1. Apakah anda suka berolah raga ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal1" class="custom-control-input" id="pemahaman-1a" value="1. Saya tidak suka bangun pagi dan suka bergadang." <?=$njeh1 = ($row->pemahaman_tugas1 == '1. Saya tidak suka bangun pagi dan suka bergadang.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1a">1. Saya tidak suka bangun pagi dan suka bergadang.</label>

                                </div>

                              <div class="my-1 custom-control custom-radio mr-1">

                                <input name="soal1" class="custom-control-input" id="pemahaman-2a" value="2. Saya tidak suka olah raga, akan tetapi jika ada teman-teman / keluarga saya mengajak olah raga, saya pun mau melakukannya." <?=$njeh1 = ($row->pemahaman_tugas1 == '2. Saya tidak suka olah raga, akan tetapi jika ada teman-teman / keluarga saya mengajak olah raga, saya pun mau melakukannya.') ? 'checked="checked"':''?> type="radio">

                                <label class="custom-control-label" for="pemahaman-2a">2. Saya tidak suka olah raga, akan tetapi jika ada teman-teman / keluarga saya mengajak olah raga, saya pun mau melakukannya.</label>

                              </div>

                              <div class="my-1 custom-control custom-radio mr-1">

                                <input name="soal1" class="custom-control-input" id="pemahaman-3a" value="3. Saya terkadang melakukan olahraga seminggu sekali, di waktu hari libur atau ketika saya cuti. Olah raga bagi saya adalah permainan." <?=$njeh1 = ($row->pemahaman_tugas1 == '3. Saya terkadang melakukan olahraga seminggu sekali, di waktu hari libur atau ketika saya cuti. Olah raga bagi saya adalah permainan.') ? 'checked="checked"':''?> type="radio">

                                <label class="custom-control-label" for="pemahaman-3a">3. Saya terkadang melakukan olahraga seminggu sekali, di waktu hari libur atau ketika saya cuti. Olah raga bagi saya adalah permainan.</label>

                              </div>

                              <div class="my-1 custom-control custom-radio mr-1">

                                <input name="soal1" class="custom-control-input" id="pemahaman-4a" value="4. Saya berolah raga setiap 2x dalam seminggu, baik itu berjalan, berlari,  bermain sepak bola, tennis, bulu tangkis, bersepeda ataupun ke tempat olah raga." <?=$njeh1 = ($row->pemahaman_tugas1 == '4. Saya berolah raga setiap 2x dalam seminggu, baik itu berjalan, berlari,  bermain sepak bola, tennis, bulu tangkis, bersepeda ataupun ke tempat olah raga.') ? 'checked="checked"':''?> type="radio">

                                <label class="custom-control-label" for="pemahaman-4a">4. Saya berolah raga setiap 2x dalam seminggu, baik itu berjalan, berlari,  bermain sepak bola, tennis, bulu tangkis, bersepeda ataupun ke tempat olah raga.</label>

                              </div>

                              <div class="my-1 custom-control custom-radio mr-1">

                                <input name="soal1" class="custom-control-input" id="pemahaman-5a" value="5. Saya selalu olahraga setiap hari, apakah itu berjalan kaki, berlari, naik sepeda ataupun pergi ke tempat olah raga. Bagi saya tiada hari tanpa olah raga. Dengan berolah raga yang rajin, hidup saya akan lebih baik dan terjaga. Dan saya tidak akan jauh dari rasa sakit." <?=$njeh1 = ($row->pemahaman_tugas1 == '5. Saya selalu olahraga setiap hari, apakah itu berjalan kaki, berlari, naik sepeda ataupun pergi ke tempat olah raga. Bagi saya tiada hari tanpa olah raga. Dengan berolah raga yang rajin, hidup saya akan lebih baik dan terjaga. Dan saya tidak akan jauh dari rasa sakit.') ? 'checked="checked"':''?> type="radio">

                                <label class="custom-control-label" for="pemahaman-5a">5. Saya selalu olahraga setiap hari, apakah itu berjalan kaki, berlari, naik sepeda ataupun pergi ke tempat olah raga. Bagi saya tiada hari tanpa olah raga. Dengan berolah raga yang rajin, hidup saya akan lebih baik dan terjaga. Dan saya tidak akan jauh dari rasa sakit.</label>

                              </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Kebersihan diri</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>2. Bagaimana cara anda menjaga kebersihan diri ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                              <div class="d-inline-block custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-1b" value="1. Saya jarang menjaga kebersihan diri. Saya suka apa adanya." <?=$njeh2 = ($row->pemahaman_tugas2 == '1. Saya jarang menjaga kebersihan diri. Saya suka apa adanya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1b">1. Saya jarang menjaga kebersihan diri. Saya suka apa adanya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-2b" value="2. Saya terkadang melakukan kebersihan jika saya hanya merasa kotor. Dan saya terkadang sikat gigi, kadang tidak." <?=$njeh2 = ($row->pemahaman_tugas2 == '2. Saya terkadang melakukan kebersihan jika saya hanya merasa kotor. Dan saya terkadang sikat gigi, kadang tidak.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2b">2. Saya terkadang melakukan kebersihan jika saya hanya merasa kotor. Dan saya terkadang sikat gigi, kadang tidak.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-3b" value="3. Saya mandi hanya 1x sehari. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar. Sikat gigi setiap hari." <?=$njeh2 = ($row->pemahaman_tugas2 == '3. Saya mandi hanya 1x sehari. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar. Sikat gigi setiap hari.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3b">3. Saya mandi hanya 1x sehari. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar. Sikat gigi setiap hari.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-4b" value="4. Saya mandi 2x sehari yaitu setiap pagi dan sore. Selalu sikat gigi pagi dan sore. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar." <?=$njeh2 = ($row->pemahaman_tugas2 == '4. Saya mandi 2x sehari yaitu setiap pagi dan sore. Selalu sikat gigi pagi dan sore. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4b">4. Saya mandi 2x sehari yaitu setiap pagi dan sore. Selalu sikat gigi pagi dan sore. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal2" class="custom-control-input" id="pemahaman-5b" value="5. Saya selalu mandi setiap pagi, sore dan ketika saya berasa kotor. Dan sikat gigi pagi dan malam sebelum tidur, serta makan setelah makan. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar." <?=$njeh2 = ($row->pemahaman_tugas2 == '5. Saya selalu mandi setiap pagi, sore dan ketika saya berasa kotor. Dan sikat gigi pagi dan malam sebelum tidur, serta makan setelah makan. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5b">5. Saya selalu mandi setiap pagi, sore dan ketika saya berasa kotor. Dan sikat gigi pagi dan malam sebelum tidur, serta makan setelah makan. Sebelum makan saya mencuci tangan dahulu, baik itu makan snack maupun makan besar.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Makanan & Minuman</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>3. Bagaimana pola makan anda setiap hari ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-1c" value="1. Saya suka jajan makanan jalanan seperti gorengan dan yang berlemak. Saya tidak suka sayur dan buah-buahan. Pola makan saya kurang teratur, dan terkadang saya suka telat makan. Saya suka minuman bersoda, manis-manis dan tidak pernah minum air putih." <?=$njeh3 = ($row->pemahaman_tugas3 == '1. Saya suka jajan makanan jalanan seperti gorengan dan yang berlemak. Saya tidak suka sayur dan buah-buahan. Pola makan saya kurang teratur, dan terkadang saya suka telat makan. Saya suka minuman bersoda, manis-manis dan tidak pernah minum air putih.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1c">1. Saya suka jajan makanan jalanan seperti gorengan dan yang berlemak. Saya tidak suka sayur dan buah-buahan. Pola makan saya kurang teratur, dan terkadang saya suka telat makan. Saya suka minuman bersoda, manis-manis dan tidak pernah minum air putih.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-2c" value="2. Saya suka jajan makanan jalanan, tetapi saya suka juga sayur dan buah-buah.Saya tidak suka air putih, lebih suka teh atau kopi." <?=$njeh3 = ($row->pemahaman_tugas3 == '2. Saya suka jajan makanan jalanan, tetapi saya suka juga sayur dan buah-buah.Saya tidak suka air putih, lebih suka teh atau kopi.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2c">2. Saya suka jajan makanan jalanan, tetapi saya suka juga sayur dan buah-buah.Saya tidak suka air putih, lebih suka teh atau kopi.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-3c" value="3. Saya suka makanan sehat, dan suka juga jajan. Bagi saya hidup seperti itu balance. Terkadang saya makan pola teratur, terkadang tidak. Saya  minum air putih dan suka minum yang manis seperti teh atau kopi." <?=$njeh3 = ($row->pemahaman_tugas3 == '3. Saya suka makanan sehat, dan suka juga jajan. Bagi saya hidup seperti itu balance. Terkadang saya makan pola teratur, terkadang tidak. Saya  minum air putih dan suka minum yang manis seperti teh atau kopi.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3c">3. Saya suka makanan sehat, dan suka juga jajan. Bagi saya hidup seperti itu balance. Terkadang saya makan pola teratur, terkadang tidak. Saya  minum air putih dan suka minum yang manis seperti teh atau kopi.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-4c" value="4. Saya suka makanan sehat, seperti sayur dan buah-buahan. Saya juga suka minum air putih dan suka minum yang manis seperti teh atau kopi." <?=$njeh3 = ($row->pemahaman_tugas3 == '4. Saya suka makanan sehat, seperti sayur dan buah-buahan. Saya juga suka minum air putih dan suka minum yang manis seperti teh atau kopi.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4c">4. Saya suka makanan sehat, seperti sayur dan buah-buahan. Saya juga suka minum air putih dan suka minum yang manis seperti teh atau kopi.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal3" class="custom-control-input" id="pemahaman-5c" value="5. Saya lebih suka makanan sehat. Seperti sayur, buah-buahan. Dan saya mengurangi makanan berlemak dan berminyak. Saya tidak pernah jajan di jalanan, terutama ketika saya melihat jajanan tersebut kurang sehat. Saya tidak suka kopi / the, saya lebih suka air putih. Dengan menjaga makanan tubuh saya terasa lebih sehat dan segar." <?=$njeh3 = ($row->pemahaman_tugas3 == '5. Saya lebih suka makanan sehat. Seperti sayur, buah-buahan. Dan saya mengurangi makanan berlemak dan berminyak. Saya tidak pernah jajan di jalanan, terutama ketika saya melihat jajanan tersebut kurang sehat. Saya tidak suka kopi / the, saya lebih suka air putih. Dengan menjaga makanan tubuh saya terasa lebih sehat dan segar.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5c">5. Saya lebih suka makanan sehat. Seperti sayur, buah-buahan. Dan saya mengurangi makanan berlemak dan berminyak. Saya tidak pernah jajan di jalanan, terutama ketika saya melihat jajanan tersebut kurang sehat. Saya tidak suka kopi / the, saya lebih suka air putih. Dengan menjaga makanan tubuh saya terasa lebih sehat dan segar.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Pendidikan</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>4. Apakah anda lakukan untuk mengembangkan pendidikan anda ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-1d" value="1. Jadwal saya sangatlah sibuk, sehingga saya tidak sempat untuk mengembangkan diri saya." <?=$njeh4 = ($row->pemahaman_tugas4 == '1. Jadwal saya sangatlah sibuk, sehingga saya tidak sempat untuk mengembangkan diri saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1d">1. Jadwal saya sangatlah sibuk, sehingga saya tidak sempat untuk mengembangkan diri saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-2d" value="2. Saya mengikuti kursus atau workshop apabila ada teman saya yang mengajak diri saya. Di luar keadaan tersebut saya, jarang untuk mengembangkan diri saya." <?=$njeh4 = ($row->pemahaman_tugas4 == '2. Saya mengikuti kursus atau workshop apabila ada teman saya yang mengajak diri saya. Di luar keadaan tersebut saya, jarang untuk mengembangkan diri saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2d">2. Saya mengikuti kursus atau workshop apabila ada teman saya yang mengajak diri saya. Di luar keadaan tersebut saya, jarang untuk mengembangkan diri saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-3d" value="3. Saya terkadang mengikuti kursus singkat/ workshop singkat / seminar singkat mengenai sesuatu hal menarik saja. Terutama yang berkaitan dengan pekerjaan saya." <?=$njeh4 = ($row->pemahaman_tugas4 == '3. Saya terkadang mengikuti kursus singkat/ workshop singkat / seminar singkat mengenai sesuatu hal menarik saja. Terutama yang berkaitan dengan pekerjaan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3d">3. Saya terkadang mengikuti kursus singkat/ workshop singkat / seminar singkat mengenai sesuatu hal menarik saja. Terutama yang berkaitan dengan pekerjaan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-4d" value="4. Saya mengambil kuliah dan kursus tambahan diluar pekerjaan saya. Saya merasakan bahwa saya bisa mengembangkan diri saya lebih baik lagi dengan adanya peningkatan pendidikan saya. Tapi saya jarang membaca buku atau ninton video mengenai motivasi dan pengembangan diri." <?=$njeh4 = ($row->pemahaman_tugas4 == '4. Saya mengambil kuliah dan kursus tambahan diluar pekerjaan saya. Saya merasakan bahwa saya bisa mengembangkan diri saya lebih baik lagi dengan adanya peningkatan pendidikan saya. Tapi saya jarang membaca buku atau ninton video mengenai motivasi dan pengembangan diri.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4d">4. Saya mengambil kuliah dan kursus tambahan diluar pekerjaan saya. Saya merasakan bahwa saya bisa mengembangkan diri saya lebih baik lagi dengan adanya peningkatan pendidikan saya. Tapi saya jarang membaca buku atau ninton video mengenai motivasi dan pengembangan diri.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal4" class="custom-control-input" id="pemahaman-5d" value="5. Saya mengikuti kuliah dan kursus diluar waktu kerja saya. Dan saya juga suka mengikuti workshop dan seminar. Selain itu saya suka membeli buku-buku yang berkaitan dengan pengembangan diri saya. Dan saya juga suka nonton video motivasi, atau tutorial yang mengembangan diri saya. Sehingga bagi saya, tiada waktu, tiada hari tanpa menambah pendidikan atau pelajaran dalam diri saya. Saya juga ikut berkelompok untuk berdiskusi dan berkoloborasi dalam meningkatkan / pengembangan diri saya." <?=$njeh4 = ($row->pemahaman_tugas4 == '5. Saya mengikuti kuliah dan kursus diluar waktu kerja saya. Dan saya juga suka mengikuti workshop dan seminar. Selain itu saya suka membeli buku-buku yang berkaitan dengan pengembangan diri saya. Dan saya juga suka nonton video motivasi, atau tutorial yang mengembangan diri saya. Sehingga bagi saya, tiada waktu, tiada hari tanpa menambah pendidikan atau pelajaran dalam diri saya. Saya juga ikut berkelompok untuk berdiskusi dan berkoloborasi dalam meningkatkan / pengembangan diri saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5d">5. Saya mengikuti kuliah dan kursus diluar waktu kerja saya. Dan saya juga suka mengikuti workshop dan seminar. Selain itu saya suka membeli buku-buku yang berkaitan dengan pengembangan diri saya. Dan saya juga suka nonton video motivasi, atau tutorial yang mengembangan diri saya. Sehingga bagi saya, tiada waktu, tiada hari tanpa menambah pendidikan atau pelajaran dalam diri saya. Saya juga ikut berkelompok untuk berdiskusi dan berkoloborasi dalam meningkatkan / pengembangan diri saya.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Sosialisasi dan Beribadah</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>5. Sosialisasi dan Beribadah</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-1e" value="1. Saya suka berfikir negatif. Saya kurang suka bersosialisasi dan saya jarang beribadah." <?=$njeh5 = ($row->pemahaman_tugas5 == '1. Saya suka berfikir negatif. Saya kurang suka bersosialisasi dan saya jarang beribadah.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1e">1. Saya suka berfikir negatif. Saya kurang suka bersosialisasi dan saya jarang beribadah.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-2e" value="2. Saya sangat mengikuti mood saya, terkadang suka kadang tidak. Oleh karena itu saya butuh motivasi dari orang lain untuk bisa terus menjaga mood saya." <?=$njeh5 = ($row->pemahaman_tugas5 == '2. Saya sangat mengikuti mood saya, terkadang suka kadang tidak. Oleh karena itu saya butuh motivasi dari orang lain untuk bisa terus menjaga mood saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2e">2. Saya sangat mengikuti mood saya, terkadang suka kadang tidak. Oleh karena itu saya butuh motivasi dari orang lain untuk bisa terus menjaga mood saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-3e" value="3. Saya suka bersosialiasi tapi hanya grup tertentu, pada hal tertentu saja. Saya beribadah jika pada waktu-waktu tertentu saja. Seperti hari besar atau ketika saya sedang mengalami kesusahan." <?=$njeh5 = ($row->pemahaman_tugas5 == '3. Saya suka bersosialiasi tapi hanya grup tertentu, pada hal tertentu saja. Saya beribadah jika pada waktu-waktu tertentu saja. Seperti hari besar atau ketika saya sedang mengalami kesusahan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3e">3. Saya suka bersosialiasi tapi hanya grup tertentu, pada hal tertentu saja. Saya beribadah jika pada waktu-waktu tertentu saja. Seperti hari besar atau ketika saya sedang mengalami kesusahan.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-4e" value="4. Saya suka berdoa dan beribadah. Bagi saya hidup itu harus balance antara bekerja dan beribadah. Semakin keras saya bekerja, semakin kuat saya beribadah. Karena dengan beribadah, saya yakin hidup saya akan lebih baik setiap harinya. Dan selain beribadah, saya suka bersosialisasi, berkumpul dan berkomunitas. Karena saya bisa mengungkapkan apa yang ada dalam pikiran saya, mengeluarkan pikiran-pikiran negatif." <?=$njeh5 = ($row->pemahaman_tugas5 == '4. Saya suka berdoa dan beribadah. Bagi saya hidup itu harus balance antara bekerja dan beribadah. Semakin keras saya bekerja, semakin kuat saya beribadah. Karena dengan beribadah, saya yakin hidup saya akan lebih baik setiap harinya. Dan selain beribadah, saya suka bersosialisasi, berkumpul dan berkomunitas. Karena saya bisa mengungkapkan apa yang ada dalam pikiran saya, mengeluarkan pikiran-pikiran negatif.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4e">4. Saya suka berdoa dan beribadah. Bagi saya hidup itu harus balance antara bekerja dan beribadah. Semakin keras saya bekerja, semakin kuat saya beribadah. Karena dengan beribadah, saya yakin hidup saya akan lebih baik setiap harinya. Dan selain beribadah, saya suka bersosialisasi, berkumpul dan berkomunitas. Karena saya bisa mengungkapkan apa yang ada dalam pikiran saya, mengeluarkan pikiran-pikiran negatif.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal5" class="custom-control-input" id="pemahaman-5e" value="5. Saya suka berdoa dan beribadah dan bersosialisasi. Selain itu juga saya suka juga membantu memotivasi teman-teman kerja saya yang membutuhkan bantuan / kehadiran saya." <?=$njeh5 = ($row->pemahaman_tugas5 == '5. Saya suka berdoa dan beribadah dan bersosialisasi. Selain itu juga saya suka juga membantu memotivasi teman-teman kerja saya yang membutuhkan bantuan / kehadiran saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5e">5. Saya suka berdoa dan beribadah dan bersosialisasi. Selain itu juga saya suka juga membantu memotivasi teman-teman kerja saya yang membutuhkan bantuan / kehadiran saya.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Waktu luang</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>6. Apakah yang anda lakukan ketika waktu luang ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-1f" value="1. Tidak ngapa-ngapain / melamun" <?=$njeh6 = ($row->pemahaman_tugas6 == '1. Tidak ngapa-ngapain / melamun') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1f">1. Tidak ngapa-ngapain / melamun</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-2f" value="2. Tidur seharian" <?=$njeh6 = ($row->pemahaman_tugas6 == '2. Tidur seharian') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2f">2. Tidur seharian</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-3f" value="3. Jalan-jalan" <?=$njeh6 = ($row->pemahaman_tugas6 == '3. Jalan-jalan') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3f">3. Jalan-jalan</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-4f" value="4. Belajar" <?=$njeh6 = ($row->pemahaman_tugas6 == '4. Belajar') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4f">4. Belajar</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal6" class="custom-control-input" id="pemahaman-5f" value="5. Olahraga" <?=$njeh6 = ($row->pemahaman_tugas6 == '5. Olahraga') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5f">5. Olahraga</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Komunitas</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>7. Apakah yang anda mengikuti komunitas ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="pemahaman-1g" value="1. Tidak sama sekali" <?=$njeh21 = ($row->pelaksanaan_tugas1 == '1. Tidak sama sekali') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1g">1. Tidak sama sekali</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="pemahaman-2g" value="2. Tidak, Ya jika diajak teman. Itupun yang cuma sekedar ada yang ajak. Jika tidak saya pun tidak ikut apapun." <?=$njeh21 = ($row->pelaksanaan_tugas1 == '2. Tidak, Ya jika diajak teman. Itupun yang cuma sekedar ada yang ajak. Jika tidak saya pun tidak ikut apapun.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2g">2. Tidak, Ya jika diajak teman. Itupun yang cuma sekedar ada yang ajak. Jika tidak saya pun tidak ikut apapun.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="pemahaman-3g" value="3. Kadang-kadang saya mau ikut, kadang-kadang tidak." <?=$njeh21 = ($row->pelaksanaan_tugas1 == '3. Kadang-kadang saya mau ikut, kadang-kadang tidak.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3g">3. Kadang-kadang saya mau ikut, kadang-kadang tidak.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="pemahaman-4g" value="4. Ya saya ikut berkomunitas, tapi hanya satu. Apakah itu komunitas ibadah, komunitas komputer, komunitas travel atau komunitas lainnya." <?=$njeh21 = ($row->pelaksanaan_tugas1 == '4. Ya saya ikut berkomunitas, tapi hanya satu. Apakah itu komunitas ibadah, komunitas komputer, komunitas travel atau komunitas lainnya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4g">4. Ya saya ikut berkomunitas, tapi hanya satu. Apakah itu komunitas ibadah, komunitas komputer, komunitas travel atau komunitas lainnya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal7" class="custom-control-input" id="pemahaman-5g" value="5. Ya saya banyak ikut komunitas. Lebih dari satu, dan itu saya sangat suka." <?=$njeh21 = ($row->pelaksanaan_tugas1 == '5. Ya saya banyak ikut komunitas. Lebih dari satu, dan itu saya sangat suka.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5g">5. Ya saya banyak ikut komunitas. Lebih dari satu, dan itu saya sangat suka.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Semangat Kerja</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>8. Semangat Kerja</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="pemahaman-1h" value="1. Saya semakin hari semakin tidak bersemangat dalam bekerja. Saya merasa pekerjaan saya sangat membosankan dan itu-itu saja." <?=$njeh22 = ($row->pelaksanaan_tugas2 == '1. Saya semakin hari semakin tidak bersemangat dalam bekerja. Saya merasa pekerjaan saya sangat membosankan dan itu-itu saja.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1h">1. Saya semakin hari semakin tidak bersemangat dalam bekerja. Saya merasa pekerjaan saya sangat membosankan dan itu-itu saja.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="pemahaman-2h" value="2. Saya merasakan pekerjaan bagi saya hanyalah kewajiban yang harus saya jalankan." <?=$njeh22 = ($row->pelaksanaan_tugas2 == '2. Saya merasakan pekerjaan bagi saya hanyalah kewajiban yang harus saya jalankan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2h">2. Saya merasakan pekerjaan bagi saya hanyalah kewajiban yang harus saya jalankan.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="pemahaman-3h" value="3. Semangat kerja saya tergantung dengan mood saya pada waktu itu. Terkadang saya semangat, terkadang tidak." <?=$njeh22 = ($row->pelaksanaan_tugas2 == '3. Semangat kerja saya tergantung dengan mood saya pada waktu itu. Terkadang saya semangat, terkadang tidak.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3h">3. Semangat kerja saya tergantung dengan mood saya pada waktu itu. Terkadang saya semangat, terkadang tidak.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="pemahaman-4h" value="4. Saya bersemangat bekerja. Karena pekerjaan saya penuh dengan hal-hal baru yang saya rasakan ini sangat berguna dalam menambah ilmu saya dalam pengembangan diri saya." <?=$njeh22 = ($row->pelaksanaan_tugas2 == '4. Saya bersemangat bekerja. Karena pekerjaan saya penuh dengan hal-hal baru yang saya rasakan ini sangat berguna dalam menambah ilmu saya dalam pengembangan diri saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4h">4. Saya bersemangat bekerja. Karena pekerjaan saya penuh dengan hal-hal baru yang saya rasakan ini sangat berguna dalam menambah ilmu saya dalam pengembangan diri saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal8" class="custom-control-input" id="pemahaman-5h" value="5. Saya sangat senang bekerja saat ini. Tempat kerja yang menyenangkan. Rekan kerja yang bersahabat, sehingga saya bisa bekerja sama dengan baik.  Atasan yang mengerti dengan pekerjaan saya, memberikan kebebasan saya dalam bekerja. Sehingga saya menganggap pekerjaan saya adalah sebuah karya. Yang hasinya nanti jadi kebanggaan saya di masa depan." <?=$njeh22 = ($row->pelaksanaan_tugas2 == '5. Saya sangat senang bekerja saat ini. Tempat kerja yang menyenangkan. Rekan kerja yang bersahabat, sehingga saya bisa bekerja sama dengan baik.  Atasan yang mengerti dengan pekerjaan saya, memberikan kebebasan saya dalam bekerja. Sehingga saya menganggap pekerjaan saya adalah sebuah karya. Yang hasinya nanti jadi kebanggaan saya di masa depan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5h">5. Saya sangat senang bekerja saat ini. Tempat kerja yang menyenangkan. Rekan kerja yang bersahabat, sehingga saya bisa bekerja sama dengan baik.  Atasan yang mengerti dengan pekerjaan saya, memberikan kebebasan saya dalam bekerja. Sehingga saya menganggap pekerjaan saya adalah sebuah karya. Yang hasinya nanti jadi kebanggaan saya di masa depan.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Rencana</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>9. Bagaimana rencana anda dalam bekerja ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="pemahaman-1i" value="1. Saya tidak punya rencana" <?=$njeh23 = ($row->pelaksanaan_tugas3 == '1. Saya tidak punya rencana') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1i">1. Saya tidak punya rencana</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="pemahaman-2i" value="2. Saya bingung mau mempunyai rencana seperti apa" <?=$njeh23 = ($row->pelaksanaan_tugas3 == '2. Saya bingung mau mempunyai rencana seperti apa') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2i">2. Saya bingung mau mempunyai rencana seperti apa</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="pemahaman-3i" value="3. Saya baru mau merencakan tapi bukan saat ini. Saya masih mengumpulkan informasi." <?=$njeh23 = ($row->pelaksanaan_tugas3 == '3. Saya baru mau merencakan tapi bukan saat ini. Saya masih mengumpulkan informasi.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3i">3. Saya baru mau merencakan tapi bukan saat ini. Saya masih mengumpulkan informasi.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="pemahaman-4i" value="4. Saya tahu rencana saya untuk perkerjaan saya dalam waktu pendek yaitu 1 sampai 6 bulan ke depan." <?=$njeh23 = ($row->pelaksanaan_tugas3 == '4. Saya tahu rencana saya untuk perkerjaan saya dalam waktu pendek yaitu 1 sampai 6 bulan ke depan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4i">4. Saya tahu rencana saya untuk perkerjaan saya dalam waktu pendek yaitu 1 sampai 6 bulan ke depan.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal9" class="custom-control-input" id="pemahaman-5i" value="5. Saya mempunyai rencana besar untuk perusahaan besar. Untuk membuat perusahaan ini lebih besar lagi. (silahkan masukan rencana anda di dalam kolom pertanyaan REKOMENDASI di bagian berikutnya )" <?=$njeh23 = ($row->pelaksanaan_tugas3 == '5. Saya mempunyai rencana besar untuk perusahaan besar. Untuk membuat perusahaan ini lebih besar lagi. (silahkan masukan rencana anda di dalam kolom pertanyaan REKOMENDASI di bagian berikutnya )') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5i">5. Saya mempunyai rencana besar untuk perusahaan besar. Untuk membuat perusahaan ini lebih besar lagi. (silahkan masukan rencana anda di dalam kolom pertanyaan REKOMENDASI di bagian berikutnya )</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Passion / Kemauan</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">

                              <h5>10. Apa passion anda di saat ini ?</h5>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="pemahaman-1j" value="1. Saya hanya diperintahkan orang tua saya untuk bekerja" <?=$njeh24 = ($row->pelaksanaan_tugas4 == '1. Saya hanya diperintahkan orang tua saya untuk bekerja') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-1j">1. Saya hanya diperintahkan orang tua saya untuk bekerja</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="pemahaman-2j" value="2. Hanya sekedar bekerja" <?=$njeh24 = ($row->pelaksanaan_tugas4 == '2. Hanya sekedar bekerja') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-2j">2. Hanya sekedar bekerja</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="pemahaman-3j" value="3. Hanya mencari penghasilan tetap" <?=$njeh24 = ($row->pelaksanaan_tugas4 == '3. Hanya mencari penghasilan tetap') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-3j">3. Hanya mencari penghasilan tetap</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="pemahaman-4j" value="4. Mencari penghasilan tetap sambil kuliah / belajar" <?=$njeh24 = ($row->pelaksanaan_tugas4 == '4. Mencari penghasilan tetap sambil kuliah / belajar') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-4j">4. Mencari penghasilan tetap sambil kuliah / belajar</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal10" class="custom-control-input" id="pemahaman-5j" value="5. Mencari penghasilan tetap, ibadah dan karir yang bisa membuat saya lebih baik lagi di masa depan." <?=$njeh24 = ($row->pelaksanaan_tugas4 == '5. Mencari penghasilan tetap, ibadah dan karir yang bisa membuat saya lebih baik lagi di masa depan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="pemahaman-5j">5. Mencari penghasilan tetap, ibadah dan karir yang bisa membuat saya lebih baik lagi di masa depan.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 2 -->

                      <h6>TUGAS DAN PEKERJAAN</h6>

                      <fieldset>

                        <div class="text-center my-2">

                          <h1><b>TUGAS DAN PEKERJAAN</b></h1>

                        </div>

                        <div class="row mt-3">

                          <h3><b>PELAKSANAAN TUGAS</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>1. Perencanaan program kerja sesuai jabatannya</h5>
                            </div>

                            <div class="form-group ml-1 my-1">
                              <h5>Ketika ingin memulai pekerjaan, hal yang dilakukan adalah membuat rencana dahulu.</h5>
                            </div>

                            <div class="form-group ml-1 my-1">
                              <h5>Sebagai contoh : </h5>
                            </div>

                            <div class="form-group ml-1 my-1">
                              <h5>Designer : Ketika ingin membuat design, membuat wireframe, flowchart, structure atau pola apapun. </h5>
                            </div>

                            <div class="form-group ml-1 my-1 mb-2">
                              <h5 style="line-height: 22px;">Programer :  adalah suka membuat analisa dahulu, seperti struktur database, flowchart dsb.  sehingga pekerjaan tersebut terencana dan bisa diprakirakaan waktunya.  Apakah anda melalukan pekerjaan anda mengerti mengenai pemahaman pembuatan rencana program kerja sesuai dengan jabatan anda ?</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="tugas-1a" value="1. Saya tidak suka membuat rencana, bekerja hanya melakukan apa adanya." <?=$njeh25 = ($row->pelaksanaan_tugas5 == '1. Saya tidak suka membuat rencana, bekerja hanya melakukan apa adanya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1a">1. Saya tidak suka membuat rencana, bekerja hanya melakukan apa adanya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="tugas-2a" value="2. Saya tergantung siapa menyuruh saya bekerja, sehingga kadang saya melakukan jika perintahkan saja." <?=$njeh25 = ($row->pelaksanaan_tugas5 == '2. Saya tergantung siapa menyuruh saya bekerja, sehingga kadang saya melakukan jika perintahkan saja.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2a">2. Saya tergantung siapa menyuruh saya bekerja, sehingga kadang saya melakukan jika perintahkan saja.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="tugas-3a" value="3. Kadang saya membuat, kadang tidak" <?=$njeh25 = ($row->pelaksanaan_tugas5 == '3. Kadang saya membuat, kadang tidak') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3a">3. Kadang saya membuat, kadang tidak</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="tugas-4a" value="4. Saya suka melakukan membuat rencana, akan tetapi hanya untuk beberapa pekerjaan yang saya anggap penting saja. Untuk pekerjaan yang mudah saya jarang melakukan hal ini." <?=$njeh25 = ($row->pelaksanaan_tugas5 == '4. Saya suka melakukan membuat rencana, akan tetapi hanya untuk beberapa pekerjaan yang saya anggap penting saja. Untuk pekerjaan yang mudah saya jarang melakukan hal ini.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4a">4. Saya suka melakukan membuat rencana, akan tetapi hanya untuk beberapa pekerjaan yang saya anggap penting saja. Untuk pekerjaan yang mudah saya jarang melakukan hal ini.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal11" class="custom-control-input" id="tugas-5a" value="5. Saya selalu membuat rencana, baik dibutuhkan ataupun tidak, karena menurut saya rencana sebelum bekerja itu adalah sangat penting, karena pekerjaan tersebut jadi rapi dan mudah dipelajari untuk waktu akan datang dikarenakan catatan saya lengkap. Sehingga pekerjaan saya lebih efisien dan hemat waktu." <?=$njeh25 = ($row->pelaksanaan_tugas5 == '5. Saya selalu membuat rencana, baik dibutuhkan ataupun tidak, karena menurut saya rencana sebelum bekerja itu adalah sangat penting, karena pekerjaan tersebut jadi rapi dan mudah dipelajari untuk waktu akan datang dikarenakan catatan saya lengkap. Sehingga pekerjaan saya lebih efisien dan hemat waktu.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5a">5. Saya selalu membuat rencana, baik dibutuhkan ataupun tidak, karena menurut saya rencana sebelum bekerja itu adalah sangat penting, karena pekerjaan tersebut jadi rapi dan mudah dipelajari untuk waktu akan datang dikarenakan catatan saya lengkap. Sehingga pekerjaan saya lebih efisien dan hemat waktu.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Proses alur dari pekerjaan</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>2. Pekerjaan itu adalah sebuah proses. Proses dimana ada info masuk diawal dan diakhiri dengan sebuah hasil atau karya. Bagaimana sikap anda mengenai proses alur pekerjaan anda ?</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="tugas-1b" value="1. Saya tidak mengerti apa yang saya kerjakan. Yang penting bagi saya adalah pekerjaan itu selesai." <?=$njeh26 = ($row->pelaksanaan_tugas6 == '1. Saya tidak mengerti apa yang saya kerjakan. Yang penting bagi saya adalah pekerjaan itu selesai.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1b">1. Saya tidak mengerti apa yang saya kerjakan. Yang penting bagi saya adalah pekerjaan itu selesai.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="tugas-2b" value="2. Saya sedikit mengerti apa yang dimaksud pekerjaan saya." <?=$njeh26 = ($row->pelaksanaan_tugas6 == '2. Saya sedikit mengerti apa yang dimaksud pekerjaan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2b">2. Saya sedikit mengerti apa yang dimaksud pekerjaan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="tugas-3b" value="3. Kadang saya mengerti, kadang tidak." <?=$njeh26 = ($row->pelaksanaan_tugas6 == '3. Kadang saya mengerti, kadang tidak.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3b">3. Kadang saya mengerti, kadang tidak.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="tugas-4b" value="4. Saya sering menanyakan pekerjaan saya secara jelas kepada atasan saya agar saya lebih mengerti apa yang saya kerjakan. Sehingga semua pekerjaan saya sesuai dengan apa yang dijelaskan oleh atasan saya." <?=$njeh26 = ($row->pelaksanaan_tugas6 == '4. Saya sering menanyakan pekerjaan saya secara jelas kepada atasan saya agar saya lebih mengerti apa yang saya kerjakan. Sehingga semua pekerjaan saya sesuai dengan apa yang dijelaskan oleh atasan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4b">4. Saya sering menanyakan pekerjaan saya secara jelas kepada atasan saya agar saya lebih mengerti apa yang saya kerjakan. Sehingga semua pekerjaan saya sesuai dengan apa yang dijelaskan oleh atasan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal12" class="custom-control-input" id="tugas-5b" value="5 . Saya selalu tahu apa yang saya kerjakan, bagaimana prosesnya dan bagaimana hasilnya. Jika saya tidak tahu, saya selalu menanyakan ke atasan saya. Apabila atasan saya menjelaskan hanya sedikit, saya berusaha mencari tahu mengenai pekerjaan ini, kemudian saya diskusikan dengan atasan saya. Karena menurut saya pekerjaan itu harus jelas prosesnya, bagaimana pekerjaan itu di mulai, dan bagaimana hasil yang akan dihasilkan. Pekerjaan itu adalah sebuah karya. Dan karya yang baik adalah dari sebuah proses yang detil dan rapi." <?=$njeh26 = ($row->pelaksanaan_tugas6 == '5 . Saya selalu tahu apa yang saya kerjakan, bagaimana prosesnya dan bagaimana hasilnya. Jika saya tidak tahu, saya selalu menanyakan ke atasan saya. Apabila atasan saya menjelaskan hanya sedikit, saya berusaha mencari tahu mengenai pekerjaan ini, kemudian saya diskusikan dengan atasan saya. Karena menurut saya pekerjaan itu harus jelas prosesnya, bagaimana pekerjaan itu di mulai, dan bagaimana hasil yang akan dihasilkan. Pekerjaan itu adalah sebuah karya. Dan karya yang baik adalah dari sebuah proses yang detil dan rapi.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5b">5 . Saya selalu tahu apa yang saya kerjakan, bagaimana prosesnya dan bagaimana hasilnya. Jika saya tidak tahu, saya selalu menanyakan ke atasan saya. Apabila atasan saya menjelaskan hanya sedikit, saya berusaha mencari tahu mengenai pekerjaan ini, kemudian saya diskusikan dengan atasan saya. Karena menurut saya pekerjaan itu harus jelas prosesnya, bagaimana pekerjaan itu di mulai, dan bagaimana hasil yang akan dihasilkan. Pekerjaan itu adalah sebuah karya. Dan karya yang baik adalah dari sebuah proses yang detil dan rapi.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Waktu Pekerjaan</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>3. Waktu Pekerjaan</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="tugas-1c" value="1. Saya suka telat dalam mengerjakan pekerjaan." <?=$njeh31 = ($row->penampilan_diri1 == '1. Saya suka telat dalam mengerjakan pekerjaan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1c">1. Saya suka telat dalam mengerjakan pekerjaan.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="tugas-2c" value="2. Saya hanya mengerjakan pekerjaan. Tidak peduli dengan waktu. Yang penting bagi saya pekerjaan itu dapat selesai. Oleh karena itu saya sering sekali melakukan pekerjaan lewat dari waktu yang telah di tentukan" <?=$njeh31 = ($row->penampilan_diri1 == '2. Saya hanya mengerjakan pekerjaan. Tidak peduli dengan waktu. Yang penting bagi saya pekerjaan itu dapat selesai. Oleh karena itu saya sering sekali melakukan pekerjaan lewat dari waktu yang telah di tentukan') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2c">2. Saya hanya mengerjakan pekerjaan. Tidak peduli dengan waktu. Yang penting bagi saya pekerjaan itu dapat selesai. Oleh karena itu saya sering sekali melakukan pekerjaan lewat dari waktu yang telah di tentukan</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="tugas-3c" value="3. Saya terkadang sesuai dengan waktu pekerjaan, dan terkadang tidak. Tergantung situasi dan kondisi pada waktu itu" <?=$njeh31 = ($row->penampilan_diri1 == '3. Saya terkadang sesuai dengan waktu pekerjaan, dan terkadang tidak. Tergantung situasi dan kondisi pada waktu itu') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3c">3. Saya terkadang sesuai dengan waktu pekerjaan, dan terkadang tidak. Tergantung situasi dan kondisi pada waktu itu</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="tugas-4c" value="4 . Saya sudah mengerjakan pekerjaan sesuai dengan waktu yang telah ditentukan. Sesuai dengan atasan atau klien minta." <?=$njeh31 = ($row->penampilan_diri1 == '4 . Saya sudah mengerjakan pekerjaan sesuai dengan waktu yang telah ditentukan. Sesuai dengan atasan atau klien minta.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4c">4 . Saya sudah mengerjakan pekerjaan sesuai dengan waktu yang telah ditentukan. Sesuai dengan atasan atau klien minta.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal13" class="custom-control-input" id="tugas-5c" value="5 . Waktu pekerjaan itu penting. Karena dengan waktu pekerjaan yang efektif maka berarti pekerjaan yang saya lakukan sudah sesuai dengan kebutuhan yang di minta oleh klien atau atasan saya. Sehingga saya tidak keberatan jika harus lembur demi menyelesaikan pekerjaan tersebut. Selain itu saya juga menghitung waktu kerja, sehingga pekerjaan yang sama saya lakukan lebih efektif dan cepat di masa yang akan datang" <?=$njeh31 = ($row->penampilan_diri1 == '5 . Waktu pekerjaan itu penting. Karena dengan waktu pekerjaan yang efektif maka berarti pekerjaan yang saya lakukan sudah sesuai dengan kebutuhan yang di minta oleh klien atau atasan saya. Sehingga saya tidak keberatan jika harus lembur demi menyelesaikan pekerjaan tersebut. Selain itu saya juga menghitung waktu kerja, sehingga pekerjaan yang sama saya lakukan lebih efektif dan cepat di masa yang akan datang') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5c">5 . Waktu pekerjaan itu penting. Karena dengan waktu pekerjaan yang efektif maka berarti pekerjaan yang saya lakukan sudah sesuai dengan kebutuhan yang di minta oleh klien atau atasan saya. Sehingga saya tidak keberatan jika harus lembur demi menyelesaikan pekerjaan tersebut. Selain itu saya juga menghitung waktu kerja, sehingga pekerjaan yang sama saya lakukan lebih efektif dan cepat di masa yang akan datang</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Ketelitian</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>4. Ketelitian</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="tugas-1d" value="1. Saya jarang perhatikan pada detil pekerjaan, sehingga saya suka melakukan kesalahan pekerjaan." <?=$njeh32 = ($row->penampilan_diri2 == '1. Saya jarang perhatikan pada detil pekerjaan, sehingga saya suka melakukan kesalahan pekerjaan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1d">1. Saya jarang perhatikan pada detil pekerjaan, sehingga saya suka melakukan kesalahan pekerjaan.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="tugas-2d" value="2. Saya lebih suka pekerjaan saya di cek kembali oleh atasan saya. Langkah demi langkah pekerjaan saya di cek kembali kepada atasan saya. Bagi saya pekerjaan yang saya lakukan adalah membuat dan proses, untuk quality control bukanlah bagian dari saya." <?=$njeh32 = ($row->penampilan_diri2 == '2. Saya lebih suka pekerjaan saya di cek kembali oleh atasan saya. Langkah demi langkah pekerjaan saya di cek kembali kepada atasan saya. Bagi saya pekerjaan yang saya lakukan adalah membuat dan proses, untuk quality control bukanlah bagian dari saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2d">2. Saya lebih suka pekerjaan saya di cek kembali oleh atasan saya. Langkah demi langkah pekerjaan saya di cek kembali kepada atasan saya. Bagi saya pekerjaan yang saya lakukan adalah membuat dan proses, untuk quality control bukanlah bagian dari saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="tugas-3d" value="3. Melihat kondisi saya pada waktu itu, apakah saya sedang bersemangat bekerja atau tidak. Jika saya lagi tidak bersemangat, pekerjaan pun terkadang terlepas dari kedetilan pekerjaan. Sehingga saya melakukan perbaikan pekerjaan berulang-ulang. Jika saya sedang semangat atau saya menyukai pekerjaan itu, maka pekerjaan itu akan saya cek berulang-ulang. Sehingga hasilnya bagus dan maksimal. " <?=$njeh32 = ($row->penampilan_diri2 == '3. Melihat kondisi saya pada waktu itu, apakah saya sedang bersemangat bekerja atau tidak. Jika saya lagi tidak bersemangat, pekerjaan pun terkadang terlepas dari kedetilan pekerjaan. Sehingga saya melakukan perbaikan pekerjaan berulang-ulang. Jika saya sedang semangat atau saya menyukai pekerjaan itu, maka pekerjaan itu akan saya cek berulang-ulang. Sehingga hasilnya bagus dan maksimal. ') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3d">3. Melihat kondisi saya pada waktu itu, apakah saya sedang bersemangat bekerja atau tidak. Jika saya lagi tidak bersemangat, pekerjaan pun terkadang terlepas dari kedetilan pekerjaan. Sehingga saya melakukan perbaikan pekerjaan berulang-ulang. Jika saya sedang semangat atau saya menyukai pekerjaan itu, maka pekerjaan itu akan saya cek berulang-ulang. Sehingga hasilnya bagus dan maksimal. </label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="tugas-4d" value="4. Saya sering melakukan cek kembali pekerjaan tersebut 2x." <?=$njeh32 = ($row->penampilan_diri2 == '4. Saya sering melakukan cek kembali pekerjaan tersebut 2x.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4d">4. Saya sering melakukan cek kembali pekerjaan tersebut 2x.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal14" class="custom-control-input" id="tugas-5d" value="5. Saya melihat dan mengulang kembali pekerjaan saya 2x sampai 3x sehingga tidak ada lagi berulang atau revisi. Ketika atasan atau klien saya mengecek maka bisa saya pastikan tidak ada terlupa dari pekerjaan saya. Dan terkadang saya memberikan ide kepada atasan atau klien, bagaimana agar pekerjaan ini lebih efektif dan baik lagi." <?=$njeh32 = ($row->penampilan_diri2 == '5. Saya melihat dan mengulang kembali pekerjaan saya 2x sampai 3x sehingga tidak ada lagi berulang atau revisi. Ketika atasan atau klien saya mengecek maka bisa saya pastikan tidak ada terlupa dari pekerjaan saya. Dan terkadang saya memberikan ide kepada atasan atau klien, bagaimana agar pekerjaan ini lebih efektif dan baik lagi.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5d">5. Saya melihat dan mengulang kembali pekerjaan saya 2x sampai 3x sehingga tidak ada lagi berulang atau revisi. Ketika atasan atau klien saya mengecek maka bisa saya pastikan tidak ada terlupa dari pekerjaan saya. Dan terkadang saya memberikan ide kepada atasan atau klien, bagaimana agar pekerjaan ini lebih efektif dan baik lagi.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Kerapian dokumen</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>5. Kerapian dokumen adalah suatu hal yang sangat penting dalam proses pekerjaan. Karena tanpa adanya dokumen, pekerjaan tersebut tidak dapat di ulang kembali, atau di cek kembali jika terjadi kesalahan. Contoh dari dokumen seperti :</h5>
                            </div>

                            <div class="form-group ml-1 my-1">
                              <h5>Kerapian dokumen adalah suatu hal yang sangat penting dalam proses pekerjaan. Karena tanpa adanya dokumen, pekerjaan tersebut tidak dapat di ulang kembali, atau di cek kembali jika terjadi kesalahan. Contoh dari dokumen seperti :</h5>
                            </div>

                            <div class="form-group ml-1 my-1">
                              <h5>Desainer :</h5>
                              <ul>
                                <li>Membuat Source management : File PSD, PNG, GIF, JPEG atau material lainnya dalam satu folder.</li>
                                <li>Penamaan file pada setiap pekerjaan yang rapi dan sesuai pekerjaan . Spt namaproyek-keterangan(revisi/alt)-bulan-tahun.JPG/PSD</li>
                                <li>Dibuat tanggal updated</li>
                                <li>File Coding CSS yang rapi, jika tidak dibutuhkan di hapus atau di buang</li>
                              </ul>
                            </div>

                            <div class="form-group ml-1 my-1 mb-2">
                              <h5>Programer :</h5>
                              <ul>
                                <li>Membuat Source management : Membuat dokumentasi dan file pekerjaan dalam 1 folder dan dibuat tanggal updated</li>
                              </ul>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="tugas-1e" value="1. Saya kurang rapi dalam menjaga kerapian dokumen.  Dan tidak pernah merapikannya." <?=$njeh41 = ($row->sikap_kerja1 == '1. Saya kurang rapi dalam menjaga kerapian dokumen.  Dan tidak pernah merapikannya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1e">1. Saya kurang rapi dalam menjaga kerapian dokumen.  Dan tidak pernah merapikannya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="tugas-2e" value="2. Dokumen saya rapi jika atasan saya merintahkan untuk merapikan." <?=$njeh41 = ($row->sikap_kerja1 == '2. Dokumen saya rapi jika atasan saya merintahkan untuk merapikan.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2e">2. Dokumen saya rapi jika atasan saya merintahkan untuk merapikan.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="tugas-3e" value="3. Saya hanya merapikan dokumen yang penting saja." <?=$njeh41 = ($row->sikap_kerja1 == '3. Saya hanya merapikan dokumen yang penting saja.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3e">3. Saya hanya merapikan dokumen yang penting saja.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="tugas-4e" value="4. Saya suka merapikan dokumen yang penting atau tidak penting." <?=$njeh41 = ($row->sikap_kerja1 == '4. Saya suka merapikan dokumen yang penting atau tidak penting.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4e">4. Saya suka merapikan dokumen yang penting atau tidak penting.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal15" class="custom-control-input" id="tugas-5e" value="5. Saya suka merapikan dokumen dan kemudian mem-backup dokumen tersebut dalam cloud, google drive atau flashdisk /  external disk." <?=$njeh41 = ($row->sikap_kerja1 == '5. Saya suka merapikan dokumen dan kemudian mem-backup dokumen tersebut dalam cloud, google drive atau flashdisk /  external disk.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5e">5. Saya suka merapikan dokumen dan kemudian mem-backup dokumen tersebut dalam cloud, google drive atau flashdisk /  external disk.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Kepedulian terhadap lingkungan kerja atau penyesuaian diri terhadap lingkungan kerja</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>6. Kepedulian terhadap lingkungan kerja atau penyesuaian diri terhadap lingkungan kerja</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="tugas-1f" value="1. Saya tidak peduli dengan tempat saya bekerja. Itu bukan urusan saya." <?=$njeh42 = ($row->sikap_kerja2 == '1. Saya tidak peduli dengan tempat saya bekerja. Itu bukan urusan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1f">1. Saya tidak peduli dengan tempat saya bekerja. Itu bukan urusan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="tugas-2f" value="2. Saya hanya peduli dengan meja kerja saya saja." <?=$njeh42 = ($row->sikap_kerja2 == '2. Saya hanya peduli dengan meja kerja saya saja.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2f">2. Saya hanya peduli dengan meja kerja saya saja.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="tugas-3f" value="3. Saya peduli dengan rekan kerja saya yang akrab dengan saya saja." <?=$njeh42 = ($row->sikap_kerja2 == '3. Saya peduli dengan rekan kerja saya yang akrab dengan saya saja.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3f">3. Saya peduli dengan rekan kerja saya yang akrab dengan saya saja.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="tugas-4f" value="4. Saya peduli dengan teman-teman kerja saya, dengan atasan saya. Kerja bukan hanya untuk diri saya, tetapi untuk orang-orang yang bekerja dengan saya." <?=$njeh42 = ($row->sikap_kerja2 == '4. Saya peduli dengan teman-teman kerja saya, dengan atasan saya. Kerja bukan hanya untuk diri saya, tetapi untuk orang-orang yang bekerja dengan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4f">4. Saya peduli dengan teman-teman kerja saya, dengan atasan saya. Kerja bukan hanya untuk diri saya, tetapi untuk orang-orang yang bekerja dengan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal16" class="custom-control-input" id="tugas-5f" value="5. Pekerjaan adalah rumah ke 2 bagi saya. Oleh karena itu saya peduli dengan kantor ini. Terutama dengan rekan kerja, saya anggap seperti saudara saya. Atasan saya seperti orang tua bagi saya. Saya menghormati mereka dan mereka pun akan menghormati saya. Oleh karena itu saya sangat peduli terjadi dengan mereka, jika mereka ada kesulitan, akan saya usahakan untuk membantu." <?=$njeh42 = ($row->sikap_kerja2 == '5. Pekerjaan adalah rumah ke 2 bagi saya. Oleh karena itu saya peduli dengan kantor ini. Terutama dengan rekan kerja, saya anggap seperti saudara saya. Atasan saya seperti orang tua bagi saya. Saya menghormati mereka dan mereka pun akan menghormati saya. Oleh karena itu saya sangat peduli terjadi dengan mereka, jika mereka ada kesulitan, akan saya usahakan untuk membantu.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5f">5. Pekerjaan adalah rumah ke 2 bagi saya. Oleh karena itu saya peduli dengan kantor ini. Terutama dengan rekan kerja, saya anggap seperti saudara saya. Atasan saya seperti orang tua bagi saya. Saya menghormati mereka dan mereka pun akan menghormati saya. Oleh karena itu saya sangat peduli terjadi dengan mereka, jika mereka ada kesulitan, akan saya usahakan untuk membantu.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Kedisiplinan</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>7. Kedisiplinan</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="tugas-1g" value="1. Saya suka datang telat dan Saya jarang absen." <?=$njeh43 = ($row->sikap_kerja3 == '1. Saya suka datang telat dan Saya jarang absen.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1g">1. Saya suka datang telat dan Saya jarang absen.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="tugas-2g" value="2. Saya suka datang telat, tapi selalu absen." <?=$njeh43 = ($row->sikap_kerja3 == '2. Saya suka datang telat, tapi selalu absen.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2g">2. Saya suka datang telat, tapi selalu absen.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="tugas-3g" value="3. Saya suka datang sebelum waktu telat tiba, tapi jarang absen" <?=$njeh43 = ($row->sikap_kerja3 == '3. Saya suka datang sebelum waktu telat tiba, tapi jarang absen') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3g">3. Saya suka datang sebelum waktu telat tiba, tapi jarang absen</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="tugas-4g" value="4. Saya selalu tepat datang dan pulang pada waktunya. Tapi suka lupa absen." <?=$njeh43 = ($row->sikap_kerja3 == '4. Saya selalu tepat datang dan pulang pada waktunya. Tapi suka lupa absen.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4g">4. Saya selalu tepat datang dan pulang pada waktunya. Tapi suka lupa absen.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal17" class="custom-control-input" id="tugas-5g" value="5. Saya selalu tepa datang, dan pulang pada waktunya, atau lembur, dan rajin absen." <?=$njeh43 = ($row->sikap_kerja3 == '5. Saya selalu tepa datang, dan pulang pada waktunya, atau lembur, dan rajin absen.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5g">5. Saya selalu tepa datang, dan pulang pada waktunya, atau lembur, dan rajin absen.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Hubungan Pekerjaan dengan rekan kerja</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>8. Hubungan Pekerjaan dengan rekan kerja</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="tugas-1h" value="1. Saya tidak pernah berkomunikasi dengan rekan kerja" <?=$njeh44 = ($row->sikap_kerja4 == '1. Saya tidak pernah berkomunikasi dengan rekan kerja') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1h">1. Saya tidak pernah berkomunikasi dengan rekan kerja</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="tugas-2h" value="2. Saya jarang berkomunikasi dengan rekan kerja." <?=$njeh44 = ($row->sikap_kerja4 == '2. Saya jarang berkomunikasi dengan rekan kerja.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2h">2. Saya jarang berkomunikasi dengan rekan kerja.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="tugas-3h" value="3. Saya hanya berkomunikasi dengan rekan kerja seperlu saya saja jika saya ada kebutuhan untuk pekerjaan saya." <?=$njeh44 = ($row->sikap_kerja4 == '3. Saya hanya berkomunikasi dengan rekan kerja seperlu saya saja jika saya ada kebutuhan untuk pekerjaan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3h">3. Saya hanya berkomunikasi dengan rekan kerja seperlu saya saja jika saya ada kebutuhan untuk pekerjaan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="tugas-4h" value="4. Saya senang berkomunikasi dengan rekan di kantor." <?=$njeh44 = ($row->sikap_kerja4 == '4. Saya senang berkomunikasi dengan rekan di kantor.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4h">4. Saya senang berkomunikasi dengan rekan di kantor.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal18" class="custom-control-input" id="tugas-5h" value="5. Saya senang sekali berteman dan berdiskusi dengan rekan kerja saya. Hal ini membuat saya senang ke kantor, maupun diluar kantor. Kami suka berjalan-jalan bersama." <?=$njeh44 = ($row->sikap_kerja4 == '5. Saya senang sekali berteman dan berdiskusi dengan rekan kerja saya. Hal ini membuat saya senang ke kantor, maupun diluar kantor. Kami suka berjalan-jalan bersama.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5h">5. Saya senang sekali berteman dan berdiskusi dengan rekan kerja saya. Hal ini membuat saya senang ke kantor, maupun diluar kantor. Kami suka berjalan-jalan bersama.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-3">

                          <h3><b>Hubungan pekerjaan dengan atasan</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>9. Hubungan pekerjaan dengan atasan</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="tugas-1i" value="1. Saya bekerja sendiri, baik itu ada ada atasan atau tidak." <?=$njeh45 = ($row->sikap_kerja5 == '1. Saya bekerja sendiri, baik itu ada ada atasan atau tidak.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1i">1. Saya bekerja sendiri, baik itu ada ada atasan atau tidak.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="tugas-2i" value="2. Saya tidak terlalu peduli dengan atasan saya. Saya hanya melakukan pekerjaan hingga selesai." <?=$njeh45 = ($row->sikap_kerja5 == '2. Saya tidak terlalu peduli dengan atasan saya. Saya hanya melakukan pekerjaan hingga selesai.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2i">2. Saya tidak terlalu peduli dengan atasan saya. Saya hanya melakukan pekerjaan hingga selesai.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="tugas-3i" value="3. Saya selalu mengikuti apa yang di tugaskan oleh atasan saya." <?=$njeh45 = ($row->sikap_kerja5 == '3. Saya selalu mengikuti apa yang di tugaskan oleh atasan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3i">3. Saya selalu mengikuti apa yang di tugaskan oleh atasan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="tugas-4i" value="4. Saya selalu bertanya dengan atasan saya. Sehingga pekerjaan yang saya hasilkan sesuai diminta oleh atasan saya. Saya juga meminta atasan saya untuk, mengecek kembali pekerjaan saya." <?=$njeh45 = ($row->sikap_kerja5 == '4. Saya selalu bertanya dengan atasan saya. Sehingga pekerjaan yang saya hasilkan sesuai diminta oleh atasan saya. Saya juga meminta atasan saya untuk, mengecek kembali pekerjaan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4i">4. Saya selalu bertanya dengan atasan saya. Sehingga pekerjaan yang saya hasilkan sesuai diminta oleh atasan saya. Saya juga meminta atasan saya untuk, mengecek kembali pekerjaan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal19" class="custom-control-input" id="tugas-5i" value="5. Saya senang berdiskusi dengan atasan saya. Menghasilkan ide-ide baru demi untuk memperbaiki sistem pekerjaan yang ada sekarang." <?=$njeh45 = ($row->sikap_kerja5 == '5. Saya senang berdiskusi dengan atasan saya. Menghasilkan ide-ide baru demi untuk memperbaiki sistem pekerjaan yang ada sekarang.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5i">5. Saya senang berdiskusi dengan atasan saya. Menghasilkan ide-ide baru demi untuk memperbaiki sistem pekerjaan yang ada sekarang.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row mt-1">

                          <h3><b>Hubungan Pekerjaan dengan klien</b></h3>

                        </div>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="form-group mt-1 my-1">
                              <h5>10. Hubungan Pekerjaan dengan klien</h5>
                            </div>

                            <div class="form-group ml-1 my-1">
                              <h5>Sebuah pekerjaan yang baik dan bagus selalu dilandasi dengan sebuah prosedur dari sebuah prosedur pelayanan klien. Karena apapun dikerjakan akhirnya kembali kepada klien sebagai pembeli.</h5>
                            </div>

                            <div class="form-group mt-1 my-1">
                              <h5 class="font-italic">Apakah itu Standart Pelayanan Klien :</h5>
                              <ul>
                                <li>Pemenuhan janji atau pemenuhan permintaan klien</li>
                                <li>Memberikan laporan apa yang telah dikerjakan kepada klien dilakukan dengan kesopanan, secara akurat dicatat, dan diverifikasi dengan klien melalui WA, Email, Telp atau alat komunikasi lainnya.</li>
                                <li>Pemberikan informasi yang lengkap pada klien mengenai pekerjaan yang telah diselesaikan, cakupan pekerjaan, dan waktu yang dikenakan.</li>
                              </ul>
                            </div>

                            <div class="form-group ml-1 my-1 mb-2">
                              <h5>Bagaimana sikap anda mengenai standar pelayanan klien ?</h5>
                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <div class="ml-2">

                                <div class="mb-1 custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="tugas-1j" value="1. Saya tidak tahu bagaimana standar pelayanan klien.  Bagi saya urusan klien adalah urusan atasan saya. Saya hanya bekerja sesuai di minta oleh atasan saya." <?=$njeh46 = ($row->sikap_kerja6 == '1. Saya tidak tahu bagaimana standar pelayanan klien.  Bagi saya urusan klien adalah urusan atasan saya. Saya hanya bekerja sesuai di minta oleh atasan saya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-1j">1. Saya tidak tahu bagaimana standar pelayanan klien.  Bagi saya urusan klien adalah urusan atasan saya. Saya hanya bekerja sesuai di minta oleh atasan saya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="tugas-2j" value="2.  Saya baru tahu mengenai standar pelayanan klien. Saya akan mempelajari hal ini untuk waktu akan datang." <?=$njeh46 = ($row->sikap_kerja6 == '2.  Saya baru tahu mengenai standar pelayanan klien. Saya akan mempelajari hal ini untuk waktu akan datang.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-2j">2.  Saya baru tahu mengenai standar pelayanan klien. Saya akan mempelajari hal ini untuk waktu akan datang.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="tugas-3j" value="3. Saya tahu tentang standar pelayanan klien, tapi kadang saya kerjakan, kadang tidak." <?=$njeh46 = ($row->sikap_kerja6 == '3. Saya tahu tentang standar pelayanan klien, tapi kadang saya kerjakan, kadang tidak.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-3j">3. Saya tahu tentang standar pelayanan klien, tapi kadang saya kerjakan, kadang tidak.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="tugas-4j" value="4.  Saya sudah tahu, dan saya sering melakukan standar pelayanan klien. Jika saya, jika pekerjaan sesuai dengan kebutuhan klien, maka pekerjaan tersebut akan cepat selesai dan saya bisa melakukan pekerjan lainnya." <?=$njeh46 = ($row->sikap_kerja6 == '4.  Saya sudah tahu, dan saya sering melakukan standar pelayanan klien. Jika saya, jika pekerjaan sesuai dengan kebutuhan klien, maka pekerjaan tersebut akan cepat selesai dan saya bisa melakukan pekerjan lainnya.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-4j">4.  Saya sudah tahu, dan saya sering melakukan standar pelayanan klien. Jika saya, jika pekerjaan sesuai dengan kebutuhan klien, maka pekerjaan tersebut akan cepat selesai dan saya bisa melakukan pekerjan lainnya.</label>

                                </div>

                                <div class="my-1 custom-control custom-radio mr-1">

                                  <input name="soal20" class="custom-control-input" id="tugas-5j" value="5.  Saya anggap klien adalah seseorang yang memberikan kesepempatan saya untuk mendapatkan hasil yang lebih baik. Saya senang mendengarkan dan memberikan pendapat kepada klien, bagi saya klien dapat menambah wawasan dan ilmu mengenai pekerjaan yang saya lakukan. Sehingga saya senang melayani konsumen dengan penuh hati. Bagi saya klien happy = saya pun ikut happy." <?=$njeh46 = ($row->sikap_kerja6 == '5.  Saya anggap klien adalah seseorang yang memberikan kesepempatan saya untuk mendapatkan hasil yang lebih baik. Saya senang mendengarkan dan memberikan pendapat kepada klien, bagi saya klien dapat menambah wawasan dan ilmu mengenai pekerjaan yang saya lakukan. Sehingga saya senang melayani konsumen dengan penuh hati. Bagi saya klien happy = saya pun ikut happy.') ? 'checked="checked"':''?> type="radio">

                                  <label class="custom-control-label" for="tugas-5j">5.  Saya anggap klien adalah seseorang yang memberikan kesepempatan saya untuk mendapatkan hasil yang lebih baik. Saya senang mendengarkan dan memberikan pendapat kepada klien, bagi saya klien dapat menambah wawasan dan ilmu mengenai pekerjaan yang saya lakukan. Sehingga saya senang melayani konsumen dengan penuh hati. Bagi saya klien happy = saya pun ikut happy.</label>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 3 -->

                      <h6>CATATAN KHUSUS</h6>

                      <fieldset>

                        <div class="row">

                          <div class="col-md-12">

                            <div class="row mt-3">

                              <h3><b>CATATAN KHUSUS</b></h3>

                            </div>

                            <div class="form-group mt-2">

                              <label for=""><h6>Dalam kolom ini, Anda dipersilahkan untuk memberikan catatan-catatan yang dianggap perlu mengenai karyawan yang Anda nilai, terutama mengenai kondite (track record), proses, dan hasil kerja yang bersangkutan selama berada dibawah pengawasan Anda.</h6></label>

                              <textarea name="catatankhusus" id="" rows="" class="form-control"><?=$row->catatan_khusus?></textarea>

                            </div>

                          </div>

                        </div>

                      </fieldset>

                      <!-- Step 6 -->

                      <h6>AREA YANG HARUS DIPERBAIKI</h6>

                      <fieldset>

                        <div class="row mt-2">

                          <h3><b>AREA YANG HARUS DIPERBAIKI</b></h3>
                          <div class="col-md-12">
                            <div class="form-group mt-1 my-1">
                              <h5>Menurut anda, apa yang perlu anda perbaiki ?</h5>
                            </div>
                          </div>
                          <div class="col-md-6">      
                            <div class="form-group mt-1 my-1">
                              <h5 class="font-weight-bold">TENTANG DIRI SENDIRI</h5>
                              <ol style="list-style: none;padding-left: 20px;">
                                <li>1. Olah raga</li>
                                <li>2. Kebersihan diri</li>
                                <li>3. Makanan &amp; Minuman</li>
                                <li>4. Pendidikan</li>
                                <li>5. Sosialisasi dan Beribadah</li>
                                <li>6. Waktu luang</li>
                                <li>7. Komunitas</li>
                                <li>8. Semangat kerja</li>
                                <li>9. Rencana</li>
                                <li>10. Passion</li>
                              </ol>
                            </div>
                          </div>
                          <div class="col-md-6">      
                            <div class="form-group mt-1 my-1">
                              <h5 class="font-weight-bold">TUGAS DAN PEKERJAAN</h5>
                              <ol style="list-style: none;padding-left: 20px;">
                                <li>1. Perencanaan program kerja sesuai jabatannya</li>
                                <li>2. Proses alur dari pekerjaan</li>
                                <li>3. Waktu Pekerjaan</li>
                                <li>4. Ketelitian</li>
                                <li>5. Kerapian dokumen</li>
                                <li>6. Kepedulian terhadap lingkungan kerja atau penyesuaian diri terhadap lingkungan kerja</li>
                                <li>7. Kedisiplinan</li>
                                <li>8. Hubungan Pekerjaan dengan rekan kerja</li>
                                <li>9. Hubungan pekerjaan dengan atasan</li>
                                <li>10. Hubungan Pekerjaan dengan klien</li>
                              </ol>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group mt-1 my-1">
                              <h5>Silahkan anda pilih dari topik diatas. Boleh lebih dari satu topik. Silahkan tuliskan mengapa anda perlu perbaiki ? Dan bagaimana cara anda memperbaikinya ?</h5>
                            </div>
                          </div>
                        </div>

                        <div class="form-group mt-2">

                          <textarea name="areadiperbaiki" id="" rows="5" class="form-control"><?=$row->area_ygharusdiperbaiki?></textarea>

                        </div>

                      </fieldset>

                      <!-- Step 7 -->

                      <h6>AREA YANG HARUS DITINGKATKAN</h6>

                      <fieldset>

                        <div class="row mt-2">

                          <h3><b>AREA YANG HARUS DITINGKATKAN</b></h3>
                          <div class="col-md-12">
                            <div class="form-group mt-1 my-1">
                              <h5>Menurut anda, apa yang perlu anda tingkatkan ?</h5>
                            </div>
                          </div>
                          <div class="col-md-6">      
                            <div class="form-group mt-1 my-1">
                              <h5 class="font-weight-bold">TENTANG DIRI SENDIRI</h5>
                              <ol style="list-style: none;padding-left: 20px;">
                                <li>1. Olah raga</li>
                                <li>2. Kebersihan diri</li>
                                <li>3. Makanan &amp; Minuman</li>
                                <li>4. Pendidikan</li>
                                <li>5. Sosialisasi dan Beribadah</li>
                                <li>6. Waktu luang</li>
                                <li>7. Komunitas</li>
                                <li>8. Semangat kerja</li>
                                <li>9. Rencana</li>
                                <li>10. Passion</li>
                              </ol>
                            </div>
                          </div>
                          <div class="col-md-6">      
                            <div class="form-group mt-1 my-1">
                              <h5 class="font-weight-bold">TUGAS DAN PEKERJAAN</h5>
                              <ol style="list-style: none;padding-left: 20px;">
                                <li>1. Perencanaan program kerja sesuai jabatannya</li>
                                <li>2. Proses alur dari pekerjaan</li>
                                <li>3. Waktu Pekerjaan</li>
                                <li>4. Ketelitian</li>
                                <li>5. Kerapian dokumen</li>
                                <li>6. Kepedulian terhadap lingkungan kerja atau penyesuaian diri terhadap lingkungan kerja</li>
                                <li>7. Kedisiplinan</li>
                                <li>8. Hubungan Pekerjaan dengan rekan kerja</li>
                                <li>9. Hubungan pekerjaan dengan atasan</li>
                                <li>10. Hubungan Pekerjaan dengan klien</li>
                              </ol>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group mt-1 my-1">
                              <h5>Silahkan anda pilih dari topik diatas. Boleh lebih dari satu topik. Sama halnya dengan diatas, apa yang anda perlu tingkatkan ? Mengapa perlu di tingkatkan ?</h5>
                            </div>
                          </div>
                        </div>

                        <div class="form-group mt-2">

                          <textarea name="areadipertahankan" id="" rows="5" class="form-control"><?=$row->area_ygharusdipertahankan?></textarea>

                        </div>

                      </fieldset>

                      <!-- Step 8 -->

                      <h6>REKOMENDASI</h6>

                      <fieldset>

                        <div class="row mt-3">

                          <h3><b>REKOMENDASI</b></h3>

                          <div class="col-md-12">
                            <div class="form-group mt-1 my-1">
                              <h5>Apa yang disarankan menurut anda untuk perkembangan diri anda ? Untuk perkembangan perusahaan ? berikan alasan anda, mengapa anda me-rekomendasikan hal tersebut ?</h5>
                            </div>
                          </div>

                        </div>

                        <div class="form-group mt-2">

                          <textarea name="rekomendasi" id="" rows="" class="form-control"><?=$row->rekomendasi?></textarea>

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

 
<!-- Fungsi Modal Html Cek Tanggal Merah dan Absen -->
<?php $this->load->view('inc/menucekabsen');?>

</body>



</html>