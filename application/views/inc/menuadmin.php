<div class="row">
  <div class="col-xl-2 col-lg-6 col-6">
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

  <div class="col-xl-2 col-lg-6 col-6">
    <div class="card pull-up">
      <div class="card-content">
        <a href="<?=base_url()?>cuti" class="position-relative">
        <span class="btn-danger notif-pending"><?= jumlah_cuti_pending()?></span>
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

  <div class="col-xl-2 col-lg-6 col-6">
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

  <div class="col-xl-2 col-lg-6 col-6">
    <div class="card pull-up">
      <div class="card-content">
        <a href="<?=base_url()?>izin" class="position-relative">
        <span class="btn-danger notif-pending"><?= jumlah_izin_pending()?></span>
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


  <div class="col-xl-2 col-lg-6 col-6">
    <div class="card pull-up">
      <div class="card-content">
        <a href="<?=base_url()?>tugas" class="position-relative">
        <span class="btn-danger notif-pending"><?= jumlah_tugas_pending()?></span>
          <div class="card-body">
            <div class="media d-flex">
            <div class="media-body text-left">
              <h3 class="primary">Tugas</h3>
            </div>
            <div>
              <i class="icon-doc primary font-large-2 float-right"></i>
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

  <div class="col-xl-2 col-lg-6 col-12">
    <div class="card pull-up">
      <div class="card-content">
        <a href="<?=base_url()?>profile_hrd">
          <div class="card-body-report">
            <div class="media d-flex">
            <div class="media-body text-left">
              <h3 class="info">My Profile</h3>
            </div>
            <div>
              <i class="icon-user info font-large-2 float-right"></i>
            </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

</div>