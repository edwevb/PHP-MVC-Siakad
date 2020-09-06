<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= url();?>/assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= url();?>">CRUD PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="border: 0; box-shadow: none;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto text-center">
					<a class="nav-link active" aria-current="page" href="<?= url();?>">Home</a>
					<a class="nav-link" href="<?= url().'/about';?>">About</a>
					<a class="nav-link" href="<?= url().'/dashboard';?>">Dashboard</a>
				</div>
			</div>
		</div>
	</nav>