<?php $this->extend('templates/admin'); ?>
<?php $this->section('content'); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <section class="home">
    <h1 class="text py-3">Kelola Portfolio</h1>
    <div class="container">
        <table class="table">
            <a class="btn btn-success mb-3" href="<?= base_url('Home/createporto'); ?>" role="button">Create New Portfolio</a>
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
        <?php $nomor = 1;?>
            <?php foreach($data as $d) :?>
            <tr>
                <td scope="col"><?php echo $nomor++;?></td>
                <td scope="col"><?php echo $d['nama'];?></td>
                <td scope="col"><?php echo $d['jenis'];?></td>
                <td scope="col"><?php echo $d['link'];?></td>
                <td scope="col" class="text-start">
                    <a class="btn btn-sm btn-primary" href="<?= base_url('Home/editporto'); ?>" role="button">EDIT</a>
                    <a class="btn btn-sm btn-danger" href="#" role="button">HAPUS</a>
                </td>
            </tr>
            <?php endforeach; ?>

        
        </tbody>
        </table>
    </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

$<?php $this->endSection(); ?>