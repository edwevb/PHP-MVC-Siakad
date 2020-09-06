	<div class="container bg-white shadow rounded-lg mt-4 p-3" style="height: 100%;">
		<div id="jumbotron">
			<h1 class="display-4">DASHBOARD</h1>
			<p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti error quod quia possimus, magni doloribus laboriosam iusto ipsam eligendi impedit vero ducimus quidem facilis ut nostrum temporibus consequuntur tempore alias.</p>
			<hr class="my-4">
			<h3>DATA MAHASISWA</h3>
			<div class="row">
				<div class="col-md-6">
					<ul class="list-group">
						<?php foreach ($data['mhs'] as $m) :?>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<?= $m['nama']; ?>
								<a href="<?= url().'/dashboard/detailMahasiswa/'.$m['id']; ?>" class="btn btn-light">Detail</a>
							</li>
							  
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>