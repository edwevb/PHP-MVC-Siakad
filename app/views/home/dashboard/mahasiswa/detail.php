	<div class="container bg-white shadow rounded-lg mt-4 p-3" style="height: 100%;">
		<div id="jumbotron" class="mx-auto col-md-6 text-center">
			<h3>DETAIL MAHASISWA</h3>
			<hr>
			<div class="card">
				<div class="card-body shadow">
					<h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['npm']; ?></h6>
					<p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
					<a href="<?= url().'/dashboard' ;?>" class="card-link">Back</a>
				</div>
			</div>
		</div>
	</div>