<div class="container mt-4">
	<div class="row">
		<div class="col-lg-5">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="">
		<div class="row mt-1">
			<div class="col-4">
				<form action="<?= base_url; ?>/siswa/cari" method="post">
					<div class="input-group mb-1">
						<input type="text" class="form-control" placeholder="Cari Siswa..." name="keyfind" id="keyfind" autocomplete="off">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit" id="tombolCari"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" /></svg>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<h3>Daftar Siswa
				<button type="button" class="btn btn-sm btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
					Tambah Data Siswa
				</button>
			</h3>
			<ul class="list-group">
				<?php foreach ($data['sw'] as $sw) : ?>
					<li class="list-group-item">
						<?= $sw['nama']; ?>
						<a href="<?= base_url; ?>/siswa/hapus/<?= $sw['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin mau hapus data?')">hapus</a>
						<a href="<?= base_url; ?>/siswa/ubah/<?= $sw['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $sw['id']; ?>">ubah</a>
						<a href="<?= base_url; ?>/siswa/detail/<?= $sw['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url; ?>/siswa/tambah" method="post">
							<input type="hidden" name="id" id="id">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="nama" class="form-control" id="nama" name="nama">
							</div>
							<div class="form-group">
								<label for="nis">NIS</label>
								<input type="nis" class="form-control" id="nis" name="nis">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="jurusan">Jurusan</label>
								<select class="form-control" id="jurusan" name="jurusan">
									<option value="Multimedia">Multimedia</option>
									<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
									<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
								</select>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Tambah Data</button>
					</div>
				</div>
			</div>
		</div>