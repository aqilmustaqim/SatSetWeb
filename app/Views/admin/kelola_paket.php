<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>

<section class="home">
   <div class="text text-center">Kelola Paket</div>
   <div class="container table-responsive">
      <table class="table table-hover">
         <a class="btn btn-success mb-3" href="<?= base_url('Home/createpaket'); ?>" role="button">Buat Daftar Paket</a>
         <thead>
            <tr>
               <th scope="col">No</th>
               <th scope="col">Nama Paket</th>
               <th scope="col">Harga Paket</th>
               <th scope="col">Status</th>
            </tr>
         </thead>
         <tbody>
            <?php $nomor = 1; ?>
            <?php foreach ($data as $d) : ?>
               <tr>
                  <td scope="col"><?= $nomor++; ?></td>
                  <td scope="col"><?= $d['namapaket']; ?></td>
                  <td scope="col"> <?= number_format($d['hargapaket']); ?></td>
                  <td scope="col" class="text-start">
                     <a href="<?= base_url(); ?>/Home/edit_paket/<?= $d['id']; ?>" class="btn btn-sm btn-primary" role="button"><i class="bi bi-pencil-square"></i>Edit</a>
                     <a href="<?= base_url(); ?>/Home/hapus_paket/<?= $d['id']; ?>" class="btn btn-sm btn-danger tombol-hapus" role="button"><i class="fa fas fa-trash"></i>Hapus</a>
                  </td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</section>

<?= $this->endSection(); ?>