<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data['judul']; ?></title>
	<link rel="icon" href="https://v5.getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand align-items-center d-flex" href="<?= url();?>"><img height="40" src="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" alt="logo">&nbsp;CRUD PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="border: 0; box-shadow: none;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
				<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link 
						<?php 
							$url = "/phpmvc/public/";
							if ($url == $_SERVER['REQUEST_URI']) 
							{
								echo "active";
							}
						?>" href="<?= url();?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link
						<?php 
							$url = "/phpmvc/public/about";
							if ($url == $_SERVER['REQUEST_URI']) 
							{
								echo "active";
							}
						?>" href="<?= url().'/about';?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link
						<?php 
							$url = "/phpmvc/public/dashboard";
							if ($url == $_SERVER['REQUEST_URI']) 
							{
								echo "active";
							}
						?>" href="<?= url().'/dashboard';?>">Dashboard</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		Lorem, ipsum, dolor.
	</div>
