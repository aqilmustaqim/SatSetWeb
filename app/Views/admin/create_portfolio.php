<?php $this->extend('templates/admin'); ?>
<?php $this->section('content'); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


   
    <section class="home">
    <h1 class="text py-3">Create New Portfolio</h1>
    <div class="container">
        
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Website</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Website">
        </div>
        
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Website</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Deskripsi Website"></textarea>
        </div>
        
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Jenis Website</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Jenis Website">
        </div>

        <div class="mb-3">
        <label for="formFile" class="form-label">Masukkan Image</label>
        <input class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Link Website</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Link Website">
        </div>

        <a class="btn btn-primary" href="<?= base_url('Home/porto'); ?>" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save</a>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Portfolio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin membuat portfolio baru ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="<?= base_url('Home/porto'); ?>" role="button">Save change</a>
            </div>
            </div>
        </div>
        </div>

    </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

$<?php $this->endSection(); ?>