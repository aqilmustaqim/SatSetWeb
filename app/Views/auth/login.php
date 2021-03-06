<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<section class="vh-100">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h3 class=" text-center">Sign In</h3>
                        <?php if (session()->getFlashData('login')) : ?>
                            <div class="alert alert-success solid alert-dismissible fade show">

                                <strong>Berhasil !</strong> <?= session()->getFlashdata('login'); ?>
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashData('loginsave')) : ?>
                            <div class="alert alert-danger solid alert-dismissible fade show">

                                <strong>Error !</strong> <?= session()->getFlashdata('loginsave'); ?>
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <h6 class="mb-5 text-center">Belum ada akun ? <a href="<?= base_url('auth/register'); ?>">Register</a></h6>

                        <form method="post" action="<?= base_url('auth/loginSave'); ?>">
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
                            <button class="btnlogin">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>