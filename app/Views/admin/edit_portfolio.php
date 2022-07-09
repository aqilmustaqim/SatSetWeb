<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>

<section class="home">
    <h1 class="text py-3">Edit Portfolio</h1>
    <div class="container">
        <form action="<?= base_url(); ?>/Home/updatePortfolio/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama Website</label>
                <input type="text" name="nama_website" class="form-control" id="formGroupExampleInput" value="<?= $data['nama']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Website</label>
                <textarea class="form-control" name="deskripsi_website" id="exampleFormControlTextarea1" rows="3"><?= $data['deskripsi']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Website</label>
                <input type="text" name="jenis_website" class="form-control" id="formGroupExampleInput" value="<?= $data['jenis']; ?>">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Masukkan Image</label>
                <input class="form-control" name="gambar_website" type="file" id="formFile" value="<?= $data['gambar']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Link Website</label>
                <input type="text" class="form-control" name="link_website" id="formGroupExampleInput" value="<?= $data['link']; ?>">
            </div>

            <button class="btn btn-primary"> Save </button>
        </form>
    </div>
</section>

<?= $this->endSection(); ?>