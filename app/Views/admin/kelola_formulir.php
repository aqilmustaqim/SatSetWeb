<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>
<section class="home">
	<div class="text">
		<h1 class="py-5 text-center">Kelola Formulir</h1>
			<div class="table-responsive">
				<table class="table table-sm table-hover">
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
		                        <th class="text" scope="row"><?= $nomor++; ?></th>
		                        <td class="text"><?= $data['nama']; ?></td>
		                        <td class="text"><?= $data['email']; ?></td>
		                        <td class="text"><?= $data['nomor_wa']; ?></td>
		                        <td class="text"><?= $data['jenis_paket']; ?></td>
		                        <td class="text">
									<div class="dropdown">
									  <?php if ($data['status'] == "Done") : ?>
									  	<button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
									    <?= $data['status'] ?>
									  	</button>										
									  <?php elseif ($data['status'] == "Proses") : ?>
									  	<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
									    <?= $data['status'] ?>
									  	</button>
									  <?php elseif ($data['status'] == "Tolak"):?>
										<button class="btn btn-sm btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><?= $data['status'] ?>
									  	</button>
									  <?php elseif ($data['status'] == "Baru"):?>
										<button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><?= $data['status'] ?>
									  	</button>
									  <?php endif ?>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
									    <li><a href="<?= base_url(); ?>/Home/UpdateFormProses/<?= $data['id']; ?>" class="dropdown-item btn-sm" type="button">Proses</a></li>
									    <li><a href="<?= base_url(); ?>/Home/UpdateFormDone/<?= $data['id']; ?>" class="dropdown-item btn-sm" type="button">Selesai</a></li>
									    <li><a href="<?= base_url(); ?>/Home/UpdateFormTolak/<?= $data['id']; ?>" class="dropdown-item btn-sm" type="button">DiTolak</a></li>
									  </ul>
									</div>
							      	<a href="<?= base_url(); ?>/Home/deleteform/<?= $data['id']; ?>" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i></a>
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