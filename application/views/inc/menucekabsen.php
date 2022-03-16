<!-- Jika belum absen maka tampil modal -->

<?php 
    $kpnnipush = kpnpush($this->session->userdata("user_id"));
        
    $now = date_now_ymd(true);

    $tglskrg = date_utc_ymd($now);

    $now_id = date_utc($now);

    $punch_date = format_date($now_id, "Ymd");
    
    $CI =& get_instance();
    $CI->load->model('today_mod');
    
    $today = $CI->today_mod->get(user_id(),$punch_date);
  ?>

  <?php

  if($this->session->userdata("rule")=='1'){

    if(tanggalMerah($punch_date)=='bukan tanggal merah')
    {
      
    }else{
      
      if($this->uri->segment(1) == ''){

        // $pesantanggalmerah = tanggalMerah($punch_date);

        // echo "
        //   <div class='modal fade bd-example-modal-lg' id='modalKondisiAbsen' style='display: none;' aria-hidden='true'>
        //       <div class='modal-dialog modal-dialog-centered modal-dialog modal-lg' role='document'>
        //         <div class='modal-content' style='border: none!important;'>
                  
        //         <div class='modal-header' style='background-color: #2C303B!important;'>
        //               <h1 class='text-center'><span class='text-white font-weight-bold'>Pesan</span></h1>                                                                      
        //               <button type='button' class='close' data-dismiss='modal'><span>×</span></button>
        //           </div>

        //           <div class='modal-content py-5'>
        //               <h1 class='font-weight-bold text-center mx-auto my-auto'>$pesantanggalmerah</h1>
        //           </div>
                      
        //         </div>
        //       </div>
        //   </div> 
        // ";

      }else{

      }

    }
        
  }else{
              
    if(tanggalMerah($punch_date)=='bukan tanggal merah')
    {
      
      if(!$today){
        
        $linkhome = base_url();
        $linkabsen = 'absen';
        $linkhomeabsen = $linkhome.$linkabsen; 
  
        echo "
          <div class='modal fade bd-example-modal-lg' id='modalKondisiAbsen' style='display: none;' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-centered modal-dialog modal-lg' role='document'>
                <div class='modal-content' style='border: none!important;'>
                  
                <div class='modal-header' style='background-color: #2C303B!important;'>
                      <h1 class='text-center'><span class='text-white font-weight-bold'>Pesan</span></h1>                                                                      
                      <button type='button' class='close' data-dismiss='modal'><span>×</span></button>
                  </div>
  
                  <div class='modal-content py-5'>
                      <h1 class='font-weight-bold text-center mx-auto my-auto'>ANDA BELUM ABSEN. SILAHKAN ABSEN HARI INI !</h1>
                  </div>
  
                  <div class='modal-footer'>
                    <a class='btn btn-info mx-auto btn-block' href='$linkhomeabsen/#absenlink'>ABSEN</a>
                  </div>
                      
                </div>
              </div>
          </div> 
        ";

      }else{

      }

    }else{

      if($this->uri->segment(1) == 'dashboard'){

        // $pesantanggalmerah = tanggalMerah($punch_date);

        // echo "
        //   <div class='modal fade bd-example-modal-lg' id='modalKondisiAbsen' style='display: none;' aria-hidden='true'>
        //       <div class='modal-dialog modal-dialog-centered modal-dialog modal-lg' role='document'>
        //         <div class='modal-content' style='border: none!important;'>
                  
        //         <div class='modal-header' style='background-color: #2C303B!important;'>
        //               <h1 class='text-center'><span class='text-white font-weight-bold'>Pesan</span></h1>                                                                      
        //               <button type='button' class='close' data-dismiss='modal'><span>×</span></button>
        //           </div>

        //           <div class='modal-content py-5'>
        //               <h1 class='font-weight-bold text-center mx-auto my-auto'>$pesantanggalmerah</h1>
        //           </div>
                      
        //         </div>
        //       </div>
        //   </div> 
        // ";

        $linkhome = base_url();
        $linkabsen = 'absen';
        $linkhomeabsen = $linkhome.$linkabsen; 
  
        echo "
          <div class='modal fade bd-example-modal-lg' id='modalKondisiAbsen' style='display: none;' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-centered modal-dialog modal-lg' role='document'>
                <div class='modal-content' style='border: none!important;'>
                  
                <div class='modal-header' style='background-color: #2C303B!important;'>
                      <h1 class='text-center'><span class='text-white font-weight-bold'>Pesan</span></h1>                                                                      
                      <button type='button' class='close' data-dismiss='modal'><span>×</span></button>
                  </div>
  
                  <div class='modal-content py-5'>
                      <h1 class='font-weight-bold text-center mx-auto my-auto'>ANDA BELUM ABSEN. SILAHKAN ABSEN HARI INI !</h1>
                  </div>
  
                  <div class='modal-footer'>
                    <a class='btn btn-info mx-auto btn-block' href='$linkhomeabsen/#absenlink'>ABSEN</a>
                  </div>
                      
                </div>
              </div>
          </div> 
        ";

      }else{

      }

    }

  }
  ?>

  <!-- Modal belum Absen -->
  <script>
  $(function() {
    $("#modalKondisiAbsen").modal();
  });
  </script>