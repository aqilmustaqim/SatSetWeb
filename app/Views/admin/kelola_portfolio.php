<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>

<section class="home">
    <h1 class="text py-3">Kelola Portfolio</h1>
    <div class="porto" data-porto="<?= session()->getFlashdata('porto'); ?>"></div>
    <div class="container">
        <table class="table table-hover">
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
                <?php $nomor = 1; ?>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td scope="col"><?php echo $nomor++; ?></td>
                        <td scope="col"><?php echo $d['nama']; ?></td>
                        <td scope="col"><?php echo $d['jenis']; ?></td>
                        <td scope="col"><?php echo $d['link']; ?></td>
                        <td scope="col" class="text-start">
                            <a href="<?= base_url(); ?>/Home/editporto/<?= $d['id']; ?>" class="btn btn-sm btn-primary" role="button">EDIT</a>
                            <a href="<?= base_url(); ?>/Home/hapusPortfolio/<?= $d['id']; ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fa fas fa-trash"></i>Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection(); ?>