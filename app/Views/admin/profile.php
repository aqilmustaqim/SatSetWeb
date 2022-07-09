<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>
<section class="home">
  <div class="text">
    <?php if (session()->getFlashData('Pass')) : ?>
        <div class="alert alert-danger solid alert-dismissible fade show" style="text-align: center;">
            <strong><?= session()->getFlashdata('Pass'); ?></strong>
            <button type="button" data-dismiss="alert" aria-label="Close">
              <i class="bi bi-x-square"></i>
            </button>
        </div>
    <?php elseif (session()->getFlashData('KonfirmPass')) : ?>
        <div class="alert alert-warning solid alert-dismissible fade show" style="text-align: center;">
            <strong><?= session()->getFlashdata('KonfirmPass'); ?></strong>
            <button type="button" data-dismiss="alert" aria-label="Close">
              <i class="bi bi-x-square"></i>
            </button>
        </div>
    <?php elseif (session()->getFlashData('ChangePass')) : ?>
        <div class="alert alert-success solid alert-dismissible fade show" style="text-align: center;">
            <strong><?= session()->getFlashdata('ChangePass'); ?></strong>
            <button type="button" data-dismiss="alert" aria-label="Close">
              <i class="bi bi-x-square"></i>
            </button>
        </div>
    <?php endif; ?>
    <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
      <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" alt="Profile" style="width: 250px;" class="rounded-circle">
      <h2><?= $nama ?></h2>
      <h3>Admin</h3>
    </div>
    <!-- Bordered Tabs -->
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active profile-overview" id="profile-overview">
        <h5 class="text-center">About</h5>
        <p class="small fst-italic"></p>
        <h5>Profile Details</h5>
        <div class="row">
          <div class="col-lg-6">Full Name</div>
          <div class="col-lg-6"><?= $nama ?></div>
        </div>
        <div class="row">
          <div class="col-lg-6">Company</div>
          <div class="col-lg-6">SatSet Corporation</div>
        </div>
        <div class="row">
          <div class="col-lg-6">Email</div>
          <div class="col-lg-6"><?= $email ?></div>
        </div>
      </div>
      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
        

        <!-- Profile Edit Form -->
        <form action="<?= base_url(); ?>/Home/updateBio/<?= $email ?>" method="post" enctype="multipart/form-data">
          <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-4">
              <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" style="width: 150px; height: 150px;" alt="Profile">
              <div class="pt-2">
                <button type="button" name="changeimg" class="btn btn-primary btn-sm"><i class='bx bx-upload'></i></button>
                <button type="button" name="hapusimg" class="btn btn-danger btn-sm"><i class='bx bx-trash'></i></button>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-8 col-lg-5">
              <input name="namaganti" type="text" class="form-control" id="fullName">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-5">
              <input name="emailganti" type="email" class="form-control" id="email">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form><!-- End Profile Edit Form -->
      </div>

      <div class="tab-pane fade pt-3" id="profile-change-password">
        <!-- Change Password Form -->
        <form action="<?= base_url() ?>/Home/updatePassword/<?= $email ?>" method="post">
          <div class="row mb-3">
            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
            <div class="col-md-8 col-lg-5">
              <input name="password" type="password" class="form-control" id="currentPassword">
            </div>
          </div>

          <div class="row mb-3">
            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
            <div class="col-md-8 col-lg-5">
              <input name="newpassword" type="password" class="form-control" id="newPassword">
            </div>
          </div>

          <div class="row mb-3">
            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
            <div class="col-md-8 col-lg-5">
              <input name="confirmpassword" type="password" class="form-control" id="renewPassword">
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Change Password</button>
          </div>
        </form><!-- End Change Password Form -->
      </div>
    </div><!-- End Bordered Tabs -->
  </div>
  <!-- bandingkan app yang sudah ada dengan click up , yg belom ada tulis di sprint 5 -->
</section>
<?= $this->endSection(); ?>