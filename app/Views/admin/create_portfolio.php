    <?php $this->extend('templates/admin'); ?>
    <?php $this->section('content'); ?>

    <div class="container">
        <h1 class="text-center py-3">Create New Portfolio</h1>
        
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Website</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Website</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Jenis Website</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>

        <div class="mb-3">
        <label for="formFile" class="form-label">Masukkan Image</label>
        <input class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Link Website</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>

        <button type="button" class="btn btn-primary">Save</button>
    </div>

    <?php $this->endSection(); ?>