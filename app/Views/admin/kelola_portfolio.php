<?php $this->extend('templates/admin'); ?>
<?php $this->section('content'); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <section class="home">
    <h1 class="text py-3">Kelola Portfolio</h1>
    <div class="container">
        <table class="table">
            <button type="button" class="btn btn-success mb-3">Create New Portfolio</button>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Web</th>
            <th scope="col">Jenis Web</th>
            <th scope="col">Link Web</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">1</td>
                <td scope="col">AppBakery</td>
                <td scope="col">Web Perusahaan</td>
                <td scope="col">www.AppBakery.com</td>
                <td scope="col" class="text-start">
                    <a class="btn btn-sm btn-primary">EDIT</a>
                    <a class="btn btn-sm btn-danger">HAPUS</a>
                </td>
            </tr>
            <tr>
                <td scope="col">2</td>
                <td scope="col">AppSampah</td>
                <td scope="col">Web Perusahaan</td>
                <td scope="col">www.AppSampah.com</td>
                <td scope="col" class="text-start">
                    <a class="btn btn-sm btn-primary">EDIT</a>
                    <a class="btn btn-sm btn-danger">HAPUS</a>
                </td>
            </tr>

        
        </tbody>
        </table>
    </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

$<?php $this->endSection(); ?>