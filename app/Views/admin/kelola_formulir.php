<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>
<section class="home">
	<div class="text">
		<h1 class="py-5 text-center">Kelola Formulir</h1>
			<div class="container">
				<table class="table table-hover">
		            <thead>
		                <tr>
		                    <th scope="col" class="text">No</th>
		                    <th scope="col" class="text">Nama</th>
		                    <th scope="col" class="text">Email</th>
		                    <th scope="col" class="text">Nomor WA</th>
		                    <th scope="col" class="text">Jenis Paket</th>
		                    <th scope="col" class="text">Status Form</th>
		                </tr>
		            </thead>
		            <tbody>
		                <?php $nomor = 1; ?>
		                <?php foreach ($formdata as $data) : ?>
		                    <tr>
		                        <td scope="col"><?= $nomor++; ?></td>
		                        <td scope="col"><?= $data['nama']; ?></td>
		                        <td scope="col"><?= $data['email']; ?></td>
		                        <td scope="col"><?= $data['nomor_wa']; ?></td>
		                        <td scope="col"><?= $data['jenis_paket']; ?></td>
		                        <td scope="col"><?= $data['status'] ?></td>
		                        <td scope="col" class="text-start">
		                        	<a href="<?= base_url(); ?>/Home/deleteform/<?= $data['id']; ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fa fas fa-trash"></i>Hapus</a>
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