<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<section class="vh-100">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h3 class=" text-center">Sign Up</h3>

                        <h6 class="mb-5 text-center">Sudah ada akun ? <a href="<?= base_url('login'); ?>">Login</a></h6>

                        <form method="post" action="<?= base_url('auth/registerSave'); ?>">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Nama Lengkap</label>
                                <input type="text" name="nama" id="typeEmailX-2" class="form-control form-control-lg <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" />
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Email</label>
                                <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg <?= ($validation->hasError('email') ? 'is-invalid' : ''); ?>" />
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg <?= ($validation->hasError('password') ? 'is-invalid' : ''); ?>" />
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <button class="btnlogin">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>