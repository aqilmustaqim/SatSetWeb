<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>

<section class="home">
    <h1 class="text py-3">Create New Daftar Paket</h1>
    <div class="container">
        <form action="<?= base_url(); ?>/Home/updatePaket/<?= $daftarpaket['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama Paket</label>
                <input type="text" name="nama_paket" class="form-control" id="formGroupExampleInput" value="<?= $daftarpaket['namapaket']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Harga Paket</label>
                <input class="form-control" name="harga_paket" id="exampleFormControlTextarea1" value="<?= $daftarpaket['hargapaket']; ?>"></input>
            </div>

            <div class=" row">
                <div class="mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 1</label>
                    <textarea type="text" name="deskripsi_1" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi1']; ?></textarea>
                </div>
                <div class=" mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 2</label>
                    <textarea type="text" name="deskripsi_2" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi2']; ?></textarea>
                </div>
                <div class="mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 3</label>
                    <textarea type="text" name="deskripsi_3" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi3']; ?></textarea>
                </div>
                <div class=" mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 4</label>
                    <textarea type="text" name="deskripsi_4" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi4']; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 5</label>
                    <textarea type="text" name="deskripsi_5" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi5']; ?></textarea>
                </div>
                <div class=" mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 6</label>
                    <textarea type="text" name="deskripsi_6" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi6']; ?></textarea>
                </div>
                <div class="mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 7</label>
                    <textarea type="text" name="deskripsi_7" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi7']; ?></textarea>
                </div>
                <div class=" mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 8</label>
                    <textarea type="text" name="deskripsi_8" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi8']; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-3">
                    <label class="form-label">Deskripsi 9</label>
                    <textarea type="text" name="deskripsi_9" class="form-control" id="formGroupExampleInput"><?= $daftarpaket['deskripsi9']; ?></textarea>
                </div>

            </div>
            <button class=" btn btn-primary"> Save </button>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>