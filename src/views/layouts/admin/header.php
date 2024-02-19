<?php
$backgroundAddmovies = ($_SERVER['REQUEST_URI'] === $router->generate('createFilms')) ? '#356444' : 'none';
$backgroundAdminhome = ($_SERVER['REQUEST_URI'] === $router->generate('listFilms')) ? '#356444' : 'none';
$backgroundViewusers = ($_SERVER['REQUEST_URI'] === $router->generate('Users')) ? '#356444' : 'none';
$backgroundAddusers = ($_SERVER['REQUEST_URI'] === $router->generate('addUser')) ? '#356444' : 'none';
$backgroundEditUsers = (isset($_GET['id']) && ($_SERVER['REQUEST_URI'] === $router->generate('editUser', ['id' => $_GET['id']]))) ? '#356444' : 'none';
$backgroundCategories = (($_SERVER['REQUEST_URI'] === $router->generate('Categories'))) ? '#356444' : 'none';
$backgroundEditCategories = (isset($_GET['id']) && ($_SERVER['REQUEST_URI'] === $router->generate('editCategorie', ['id' => $_GET['id']]))) ? '#356444' : 'none';
$backgroundAddCategories = (($_SERVER['REQUEST_URI'] === $router->generate('addCategorie'))) ? '#356444' : 'none';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $title; ?> | Movies
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Zilla+Slab:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="/public/css/main.css">

	<style>
		.style-all{
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			width: 1200px;
		}

		.navbaradd-movies {
			background-color: <?= $backgroundAddmovies ?> ;
		}

		.admin-home {
			background-color: <?= $backgroundAdminhome ?> ;
		}

		.users {
			background-color: <?= $backgroundViewusers ?> ;
			background-color: <?= $backgroundAddusers ?> ;
			background-color: <?= $backgroundEditUsers ?> ;
		}

		.categories {
			background-color: <?= $backgroundCategories ?> ;
			background-color: <?= $backgroundAddCategories ?> ;
			background-color: <?= $backgroundEditCategories ?> ;
		}

		.container {
			width: 1200px;
			margin-right: auto;
			margin-left: auto;
		}

	</style>
</head>

<body class="admin-body">
	<header class="spaceheader-main">
		<nav class="navbar navbar-expand-lg mb-4 admin-navbar" data-bs-theme="dark">
			<div class="container">
				<div class="logo">
					<a class="navbar-brand" href="<?= $router->generate('listFilms')?>">BestMovies</a>
				</div>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 icon-center">
						<div class="navbar-icon">
							<li class="nav-item">
								<a class="nav-link" href="<?= $router->generate('addUser'); ?>">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										version="1.1" width="41" height="35" viewBox="0 0 256 256" xml:space="preserve">
										<defs></defs>
										<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
											transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
											<circle cx="69.253" cy="75.333" r="10.973"
												style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
												transform="  matrix(1 0 0 1 0 0) " />
											<path
												d="M 38.877 40.375 L 38.877 40.375 c -9.415 0 -17.118 -7.703 -17.118 -17.118 v -6.139 C 21.759 7.703 29.462 0 38.877 0 h 0 c 9.415 0 17.118 7.703 17.118 17.118 v 6.139 C 55.995 32.672 48.292 40.375 38.877 40.375 z"
												style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
												transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
											<path
												d="M 50.103 75.603 c 0 -10.209 7.969 -18.535 18.022 -19.154 c -3.98 -7.222 -11.159 -12.461 -19.609 -13.722 c -2.896 1.499 -6.169 2.363 -9.639 2.363 c -3.47 0 -6.743 -0.863 -9.639 -2.363 C 16.296 44.659 6.286 55.889 6.286 69.347 v 17.707 C 6.286 88.674 7.612 90 9.232 90 h 47.391 C 52.633 86.479 50.103 81.342 50.103 75.603 z"
												style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
												transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
											<path
												d="M 69.317 61.206 c -7.951 0 -14.397 6.446 -14.397 14.397 C 54.92 83.554 61.366 90 69.317 90 c 7.951 0 14.397 -6.446 14.397 -14.397 C 83.714 67.652 77.268 61.206 69.317 61.206 z M 77.351 77.375 c 0 0.57 -0.462 1.032 -1.032 1.032 h -4.012 v 4.012 c 0 0.57 -0.462 1.032 -1.032 1.032 h -3.756 c -0.57 0 -1.032 -0.462 -1.032 -1.032 v -4.012 h -4.012 c -0.57 0 -1.032 -0.462 -1.032 -1.032 v -3.756 c 0 -0.57 0.462 -1.032 1.032 -1.032 h 4.012 v -4.012 c 0 -0.57 0.462 -1.032 1.032 -1.032 h 3.756 c 0.57 0 1.032 0.462 1.032 1.032 v 4.012 h 4.012 c 0.57 0 1.032 0.462 1.032 1.032 V 77.375 z"
												style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(53,100,68); fill-rule: nonzero; opacity: 1;"
												transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
										</g>
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= $router->generate('Users'); ?>">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										version="1.1" width="41" height="35" viewBox="0 0 256 256" xml:space="preserve">
										<defs></defs>
										<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
											transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
											<circle cx="69.253" cy="75.333" r="10.973"
												style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
												transform="  matrix(1 0 0 1 0 0) " />
											<path
												d="M 38.877 40.375 L 38.877 40.375 c -9.415 0 -17.118 -7.703 -17.118 -17.118 v -6.139 C 21.759 7.703 29.462 0 38.877 0 h 0 c 9.415 0 17.118 7.703 17.118 17.118 v 6.139 C 55.995 32.672 48.292 40.375 38.877 40.375 z"
												style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
												transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
											<path
												d="M 50.103 75.603 c 0 -10.209 7.969 -18.535 18.022 -19.154 c -3.98 -7.222 -11.159 -12.461 -19.609 -13.722 c -2.896 1.499 -6.169 2.363 -9.639 2.363 c -3.47 0 -6.743 -0.863 -9.639 -2.363 C 16.296 44.659 6.286 55.889 6.286 69.347 v 17.707 C 6.286 88.674 7.612 90 9.232 90 h 47.391 C 52.633 86.479 50.103 81.342 50.103 75.603 z"
												style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
												transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
											<path
												d="M 69.317 61.206 c -7.951 0 -14.397 6.446 -14.397 14.397 C 54.92 83.554 61.366 90 69.317 90 c 7.951 0 14.397 -6.446 14.397 -14.397 C 83.714 67.652 77.268 61.206 69.317 61.206 z M 77.351 77.375 c 0 0.57 -0.462 1.032 -1.032 1.032 H 62.474 c -0.57 0 -1.032 -0.462 -1.032 -1.032 v -3.756 c 0 -0.57 0.462 -1.032 1.032 -1.032 h 13.844 c 0.57 0 1.032 0.462 1.032 1.032 V 77.375 z"
												style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(240,88,47); fill-rule: nonzero; opacity: 1;"
												transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
										</g>
									</svg>
								</a>
							</li>
						</div>
					</ul>
					<div class="admin-frame">
						<div class="admin-profile">
							<div class="active-circle">
							</div>
							<div>
								<a href="" class="text-admin">Admin</a>
							</div>
						</div>
					</div>
					<div class="navbar-text disconnect-button">
						<a href="<?= $router->generate('Logout'); ?>" class="btn">Déconnexion</a>
					</div>

				</div>
			</div>
		</nav>
	</header>
	<div>
		<div class="sidebar">
			<ul class="ul-sidebar admin-home d-flex align-items-center">
				<li class="nav-item">
					<a href="<?= $router->generate('listFilms'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							width="42" height="34" viewBox="0 0 256 256" xml:space="preserve">
							<defs></defs>
							<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
								transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
								<path
									d="M 89.132 43.062 l -42.05 -42.05 c -1.15 -1.15 -3.014 -1.15 -4.164 0 l -42.05 42.05 c -1.855 1.855 -0.541 5.026 2.082 5.026 h 6.335 c 1.626 0 2.944 1.318 2.944 2.944 v 31.874 c 0 1.626 1.318 2.944 2.944 2.944 h 19.249 V 61.811 c 0 -1.97 1.597 -3.566 3.566 -3.566 h 17.59 V 85.85 h 19.249 c 1.626 0 2.944 -1.318 2.944 -2.944 V 51.032 c 0 -1.626 1.318 -2.944 2.944 -2.944 h 6.335 C 89.673 48.088 90.986 44.917 89.132 43.062 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 55.578 58.245 l -11.11 2.932 c -2.384 0.629 -4.045 2.785 -4.045 5.251 V 89.85 l 15.155 -4 V 58.245 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
							</g>
						</svg>
					</a>
				</li>
			</ul>
			<ul class="navbaradd-movies">
				<div class="d-flex align-items-center">
					<li class="nav-item">
						<a href="<?= $router->generate('createFilms'); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								version="1.1" width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">
								<defs></defs>
								<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
									transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
									<polygon points="55.81,48.22 67,52.71 67,37.29 55.81,41.78 "
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
										transform="  matrix(1 0 0 1 0 0) " />
									<path
										d="M 45 0 C 20.147 0 0 20.147 0 45 c 0 24.853 20.147 45 45 45 s 45 -20.147 45 -45 C 90 20.147 69.853 0 45 0 z M 71 55.663 c 0 0.664 -0.329 1.284 -0.879 1.656 c -0.336 0.228 -0.728 0.344 -1.121 0.344 c -0.252 0 -0.504 -0.048 -0.744 -0.144 l -12.448 -4.99 v 4.873 c 0 1.104 -0.896 2 -2 2 H 21 c -1.104 0 -2 -0.896 -2 -2 V 32.598 c 0 -1.104 0.896 -2 2 -2 h 32.808 c 1.104 0 2 0.896 2 2 v 4.873 l 12.448 -4.99 c 0.615 -0.248 1.314 -0.173 1.865 0.2 C 70.671 33.053 71 33.673 71 34.337 V 55.663 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<polygon points="51.81,34.6 23,34.6 23,55.4 51.81,55.4 51.81,49.57 51.81,40.43 "
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
										transform="  matrix(1 0 0 1 0 0) " />
								</g>
							</svg>
						</a>
						<a>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								version="1.1" width="9" height="9" viewBox="0 0 256 256" xml:space="preserve">
								<defs></defs>
								<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
									transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
									<path
										d="M 45 90 c -6.075 0 -11 -4.925 -11 -11 V 11 c 0 -6.075 4.925 -11 11 -11 s 11 4.925 11 11 v 68 C 56 85.075 51.075 90 45 90 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<path
										d="M 79 56 H 11 C 4.925 56 0 51.075 0 45 s 4.925 -11 11 -11 h 68 c 6.075 0 11 4.925 11 11 S 85.075 56 79 56 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								</g>
							</svg>
						</a>
					</li>
				</div>
			</ul>
			<ul class="categories">
				<div class="d-flex align-items-center">
					<li>
						<a href="<?= $router->generate('Categories'); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								version="1.1" width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">
								<defs></defs>
								<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
									transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
									<circle cx="45" cy="45" r="45"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
										transform="  matrix(1 0 0 1 0 0) " />
									<path
										d="M 68.914 52.114 H 19.563 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 49.351 c 1.657 0 3 1.343 3 3 S 70.571 52.114 68.914 52.114 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<path
										d="M 68.914 66.515 H 19.563 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 49.351 c 1.657 0 3 1.343 3 3 S 70.571 66.515 68.914 66.515 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<path
										d="M 68.914 37.714 H 38.192 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 30.722 c 1.657 0 3 1.343 3 3 S 70.571 37.714 68.914 37.714 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<circle cx="23.143" cy="34.713" r="5.143"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;"
										transform="  matrix(1 0 0 1 0 0) " />
									<path
										d="M 72 49.028 H 22.649 c -1.657 0 -3 -1.343 -3 -3 c 0 -1.657 1.343 -3 3 -3 H 72 c 1.657 0 3 1.343 3 3 C 75 47.686 73.657 49.028 72 49.028 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<path
										d="M 72 63.429 H 22.649 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 H 72 c 1.657 0 3 1.343 3 3 S 73.657 63.429 72 63.429 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<path
										d="M 72 34.628 H 41.278 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 H 72 c 1.657 0 3 1.343 3 3 S 73.657 34.628 72 34.628 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
									<circle cx="26.233" cy="31.623" r="5.143"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
										transform="  matrix(1 0 0 1 0 0) " />
								</g>
							</svg>
						</a>
					</li>
				</div>
			</ul>
			<ul class="users d-flex align-items-center">
				<li>
					<a href="<?= $router->generate('Users'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">
							<defs></defs>
							<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
								transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
								<path
									d="M 45 49.519 L 45 49.519 c -7.68 0 -13.964 -6.284 -13.964 -13.964 v -5.008 c 0 -7.68 6.284 -13.964 13.964 -13.964 h 0 c 7.68 0 13.964 6.284 13.964 13.964 v 5.008 C 58.964 43.236 52.68 49.519 45 49.519 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 52.863 51.438 c -2.362 1.223 -5.032 1.927 -7.863 1.927 s -5.501 -0.704 -7.863 -1.927 C 26.58 53.014 18.414 62.175 18.414 73.152 v 14.444 c 0 1.322 1.082 2.403 2.403 2.403 h 48.364 c 1.322 0 2.403 -1.082 2.403 -2.403 V 73.152 C 71.586 62.175 63.42 53.014 52.863 51.438 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 71.277 34.854 c -2.362 1.223 -5.032 1.927 -7.863 1.927 c -0.004 0 -0.007 0 -0.011 0 c -0.294 4.412 -2.134 8.401 -4.995 11.43 c 10.355 3.681 17.678 13.649 17.678 24.941 v 0.263 h 11.511 c 1.322 0 2.404 -1.082 2.404 -2.404 V 56.568 C 90 45.59 81.834 36.429 71.277 34.854 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 63.414 0 c -7.242 0 -13.237 5.589 -13.898 12.667 c 8 2.023 13.947 9.261 13.947 17.881 v 2.385 c 7.657 -0.027 13.914 -6.298 13.914 -13.961 v -5.008 C 77.378 6.284 71.094 0 63.414 0 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 13.915 73.152 c 0 -11.292 7.322 -21.261 17.677 -24.941 c -2.861 -3.029 -4.702 -7.019 -4.995 -11.43 c -0.004 0 -0.007 0 -0.011 0 c -2.831 0 -5.5 -0.704 -7.863 -1.927 C 8.166 36.429 0 45.59 0 56.568 v 14.444 c 0 1.322 1.082 2.404 2.404 2.404 h 11.511 V 73.152 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 26.536 32.932 v -2.385 c 0 -8.62 5.946 -15.858 13.947 -17.881 C 39.823 5.589 33.828 0 26.586 0 c -7.68 0 -13.964 6.284 -13.964 13.964 v 5.008 C 12.622 26.635 18.879 32.905 26.536 32.932 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
							</g>
						</svg>
					</a>
				</li>
			</ul>
			<ul class="public-view d-flex align-items-center">
				<li><a href="<?= $router->generate('home'); ?>" target="_black"><svg xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="42" height="42"
							viewBox="0 0 256 256" xml:space="preserve">
							<defs></defs>
							<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
								transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
								<circle cx="45" cy="45" r="45"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill:#FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform="  matrix(1 0 0 1 0 0) " />
								<path
									d="M 73.729 43.994 C 69.162 36.149 57.886 31.08 45 31.08 s -24.163 5.069 -28.729 12.915 c -0.362 0.622 -0.362 1.39 0 2.012 C 20.837 53.851 32.114 58.92 45 58.92 s 24.162 -5.069 28.729 -12.914 C 74.091 45.384 74.091 44.616 73.729 43.994 z M 45 54.92 c -3.792 0 -6.878 -4.325 -6.878 -9.643 s 3.085 -9.643 6.878 -9.643 c 3.793 0 6.878 4.326 6.878 9.643 S 48.793 54.92 45 54.92 z M 20.376 45 c 3.162 -4.476 9.388 -7.812 16.82 -9.205 c -1.898 2.457 -3.073 5.799 -3.073 9.482 c 0 3.366 0.982 6.445 2.599 8.827 C 29.501 52.66 23.469 49.379 20.376 45 z M 53.279 54.104 c 1.617 -2.382 2.599 -5.461 2.599 -8.827 c 0 -3.684 -1.175 -7.025 -3.073 -9.482 c 7.431 1.393 13.658 4.728 16.82 9.205 C 66.531 49.379 60.499 52.66 53.279 54.104 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000000; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
							</g>
						</svg></a></li>
			</ul>
		</div>
		<main class="container mb-4">
			<?php displayAlert(); ?>