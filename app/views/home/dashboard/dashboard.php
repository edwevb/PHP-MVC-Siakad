	<div class="container bg-white shadow rounded-lg mt-4 p-3" style="height: 100%;">
		<div id="jumbotron">
			<h1 class="display-4">DASHBOARD</h1>
			<p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti error quod quia possimus, magni doloribus laboriosam iusto ipsam eligendi impedit vero ducimus quidem facilis ut nostrum temporibus consequuntur tempore alias.</p>
			<hr class="my-4">
			<div class="mb-2 d-flex align-items-center">
				<h3>DATA MAHASISWA</h3>
				<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#addDataMahasiswa">Add</button>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$row = 1;
					foreach ($data['mhs'] as $m) :?>
						<tr>
							<td><?= $row++; ?></td>
							<td><?= $m['nama']; ?></td>
							<td><a href="<?= url().'/dashboard/detailMahasiswa/'.$m['id']; ?>" class="btn btn-light">Detail</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="addDataMahasiswa" tabindex="-1" aria-labelledby="addDataMahasiswaLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addDataMahasiswaLabel">Form tambah data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= url().'/dashboard/tambahMahasiswa'?>" method="POST">
						<div class="row">
							<div class="col-md-8 mx-auto">
								<div class="mb-3">
									<label for="nama" class="form-label">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama">
								</div>
							</div>
							<div class="col-md-8 mx-auto">
								<div class="mb-3">
									<label for="npm" class="form-label">NPM</label>
									<input type="text" name="npm" class="form-control" id="npm">
								</div>
							</div>
							<div class="col-md-8 mx-auto">
								<div class="mb-3">
									<label for="jurusan" class="form-label">Jurusan</label>
									<input type="text" name="jurusan" class="form-control" id="jurusan">
								</div>
							</div>
						</div>
						<div class="mx-auto col-md-8 pl-1">
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>