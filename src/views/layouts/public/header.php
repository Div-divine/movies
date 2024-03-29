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


</head>

<body class="admin-body">
	<header class="public-menu">
		<div class="menu-frame">
			<div class="logo">
				<a class="navbar-brand" href="<?= $router->generate('home') ?>">BestMovies</a>
			</div>
			<div class="menu-items">
				<div class="In-demand">
					<div style="width:23px" class="video-icon">
						<a href="" class="icon-video">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								version="1.1" width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">
								<defs></defs>
								<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
									transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
									<path
										d="M 45 0 C 20.187 0 0 20.187 0 45 c 0 24.813 20.187 45 45 45 c 24.813 0 45 -20.187 45 -45 C 90 20.187 69.813 0 45 0 z M 61.806 47.026 l -12.91 7.453 l -12.91 7.453 c -1.559 0.9 -3.508 -0.225 -3.508 -2.026 V 45 V 30.093 c 0 -1.801 1.949 -2.926 3.508 -2.026 l 12.91 7.453 l 12.91 7.453 C 63.366 43.875 63.366 46.125 61.806 47.026 z"
										style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1; transition: fill 0.1s ease;"
										transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"
										onmouseover="this.style.fill='#356444'" onmouseout="this.style.fill='#FFFFFF'" />
								</g>
							</svg>
						</a>
					</div>
					<div class="demand-div">
						<a href="" class="text-demand">À la demande</a>
					</div>
				</div>
				<div class="demand-div">
					<a href="" class="text-demand">Films</a>
				</div>
				<div class="demand-div">
					<a href="" class="text-demand">Séries</a>
				</div>
				<div class="search">
					<div class="search-icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">

							<defs>
							</defs>
							<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
								transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
								<path
									d="M 89.414 86.586 L 62.862 60.034 c 5.931 -6.612 9.178 -15.063 9.178 -24.014 c 0 -9.622 -3.747 -18.667 -10.551 -25.47 C 54.687 3.747 45.641 0 36.02 0 c -9.622 0 -18.667 3.747 -25.47 10.55 C 3.747 17.353 0 26.398 0 36.02 c 0 9.621 3.747 18.667 10.55 25.469 c 6.803 6.804 15.848 10.551 25.47 10.551 c 8.951 0 17.402 -3.247 24.014 -9.178 l 26.552 26.552 C 86.977 89.805 87.488 90 88 90 s 1.023 -0.195 1.414 -0.586 C 90.195 88.633 90.195 87.367 89.414 86.586 z M 13.378 58.661 C 7.331 52.613 4 44.573 4 36.02 c 0 -8.553 3.331 -16.594 9.378 -22.642 S 27.467 4 36.02 4 c 8.553 0 16.593 3.331 22.641 9.378 S 68.04 27.467 68.04 36.02 c 0 8.553 -3.331 16.593 -9.379 22.641 S 44.573 68.04 36.02 68.04 C 27.467 68.04 19.426 64.709 13.378 58.661 z"
									style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
							</g>
						</svg>
					</div>
					<div class="form-field">
						<form action="<?= $router->generate('search')?>" method="post">
							<input type="text" placeholder="Rechercher films ou séries ..."
								style="background-color: #111111; border-top: 0px; border-right: 0px; border-left: 0px;color : #FFFFFF;" name="search">
						</form>
					</div>
				</div>
			</div>
			<div class="connect-div">
				<div>
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							width="45" height="42" viewBox="0 0 256 256" xml:space="preserve">

							<defs>
							</defs>
							<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
								transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
								<path
									d="M 45 88 c -11.049 0 -21.18 -2.003 -29.021 -8.634 C 6.212 71.105 0 58.764 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 c 0 13.765 -6.212 26.105 -15.979 34.366 C 66.181 85.998 56.049 88 45 88 z"
									style="stroke: #FFFFFF; stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #111111; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 45 60.71 c -11.479 0 -20.818 -9.339 -20.818 -20.817 c 0 -11.479 9.339 -20.818 20.818 -20.818 c 11.479 0 20.817 9.339 20.817 20.818 C 65.817 51.371 56.479 60.71 45 60.71 z"
									style="stroke: #FFFFFF; stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #111111; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
								<path
									d="M 45 90 c -10.613 0 -20.922 -3.773 -29.028 -10.625 c -0.648 -0.548 -0.88 -1.444 -0.579 -2.237 C 20.034 64.919 31.933 56.71 45 56.71 s 24.966 8.209 29.607 20.428 c 0.301 0.793 0.069 1.689 -0.579 2.237 C 65.922 86.227 55.613 90 45 90 z"
									style="stroke: #FFFFFF; stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #111111; fill-rule: nonzero; opacity: 1;"
									transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
							</g>
						</svg>
					</a>
				</div>
				<div class="demand-div">
					<a href="" class="text-demand">Se connecter</a>
				</div>
			</div>
		</div>
	</header>
	<main class="container mb-4">
		<?php displayAlert(); ?>