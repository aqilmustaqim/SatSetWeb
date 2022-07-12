<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>
<section class="home">
   <div class="text">
      <h1 class="py-5 text-center">Kelola Ulasan</h1>
         <div class="table-responsive">
            <table class="table table-sm table-hover">
                  <thead>
                      <tr>
                          <th scope="col" class="text">No</th>
                          <th scope="col" class="text">Nama</th>
                          <th scope="col" class="text">Email</th>
                          <th scope="col" class="text">Ulasan</th>
                          <th scope="col" class="text">Status</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($ulasdata as $data) : ?>
                          <tr>
                              <th class="text" scope="row"><?= $nomor++; ?></th>
                              <td class="text"><?= $data['nama']; ?></td>
                              <td class="text"><?= $data['email']; ?></td>
                              <td class="text"><?= $data['deskripsiulasan']; ?></td>
                              <td class="text">
                                 <a href="<?= base_url(); ?>/Home/deleteulas/<?= $data['id']; ?>" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i></a>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
         </div>   
      </div>      
   </div>
</section>
<?= $this->endSection(); ?>