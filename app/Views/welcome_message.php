<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aménâge</title>
	<meta name="description" content="Aménâge est une application web permettant d’obtenir simplement et rapidement des informations sur les aides techniques en fonction de sa situation (état de santé, environnement existant et difficultés en découlant).">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico" />
</head>
<!-- Custom fonts for this template-->
<link href="<?php echo base_url('assets/packages/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Custom styles for this template-->
<link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body>
	<div class="hero-bg">

		<header>
			<a class="logo" href="/"><img class=" p-2" src="<?php echo base_url('assets/img/LOGOSAnsfondblanc.png'); ?>" alt="logo"></a>
		</header>
		<!-- bg-gradient-primary -->
		<div class="hero-infos">
			<div>
				<h1 class="title">Aménâge - Catalogue d'aide technique</h1>
			</div>
			<a href="cibler-mon-besoin" class="button buttonWhite buttonLarge" id="buttonJoin"><i class="fa fa-bullseye buttonIcon"></i>
				Cibler mon besoin !</a>
			<a href="about" class="button buttonGrey buttonLarge buttonUse"><i class="fas fa-chevron-right buttonIcon"></i>En savoir plus...</a>
		</div>
		<div class="waves">
			<svg width="100%" height="175px" fill="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
					<stop offset="0%" stop-color="#fff" />
				</linearGradient>
				<path fill="url(#grad1)" d="
                    M0 67
                    C 273,183
                    822,-40
                    1920.00,106
                    V 359
                    H 0
                    V 67
                    Z">
					<animate repeatCount="indefinite" fill="url(#grad1)" attributeName="d" dur="35s" attributeType="XML" values="
                    M0 77
                    C 473,283
                    822,-40
                    1920,116
                    V 359
                    H 0
                    V 67
                    Z;
                    M0 77
                    C 473,-40
                    1222,283
                    1920,136
                    V 359
                    H 0
                    V 67
                    Z;
                    M0 77
                    C 973,260
                    1722,-53
                    1920,120
                    V 359
                    H 0
                    V 67
                    Z;
                    M0 77
                    C 473,283
                    822,-40
                    1920,116
                    V 359
                    H 0
                    V 67
                    Z
                    ">
					</animate>
				</path>
			</svg>
		</div>
	</div>
	<div class="container col-xl-10">

		<div class="justify-content-center">

			<div class="col-xl-12 col-lg-12 col-md-12 bg-white">

				<div class="row align-items-center m-5">
					<div class="col-lg">
						<form action="<?php echo base_url('aideTechniques') ?>" method="post">
							<div class="input-group">
								<input type="text" name="searchBar" class="form-control bg-light border-0 small" placeholder="Rechercher une aide technique..." aria-label="Search" aria-describedby="basic-addon2" required>
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit">
										<i class="fas fa-search fa-sm"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg">
						<div class="row justify-content-center m-3">
							<a type="button" class="btn btn-primary w-50  btn-lg btn-block" href="categories">Parcourir une catégorie</a>
						</div>
						<div class="row justify-content-center m-3">
							<a type="button" class="btn btn-primary w-50 btn-lg btn-block" href="aideTechniques">Voir toutes les aides techniques</a>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<h1 class="h3 mb-0 text-gray-800">Les acteurs du projet</h1>
				</div>
				<div class="row justify-content-center">
					<div class="card shadow mb-4 m-3">
						<div class="card-body">
							<div class="text-center">
								<h6 class="m-0 font-weight-bold">Fondation i2ml</h6>
								<img class="img-fluid px-3 px-sm-4 mt-3 mb-4 img-verysmall" src="<?php echo base_url('assets/img/Logo_Square.png'); ?>" alt="logo partenaire">
							</div>
						</div>
					</div>
					<div class="card shadow mb-4 m-3">
						<div class="card-body">
							<div class="text-center">
								<h6 class="m-0 font-weight-bold">CFPPA 30</h6>
								<img class="img-fluid px-3 px-sm-4 mt-3 mb-4 img-verysmall" src="<?php echo base_url('assets/img/Logo CFPPA30 Gard.png'); ?>" alt="logo partenaire">
							</div>
						</div>
					</div>
					<div class="card shadow mb-4 m-3">
						<div class="card-body">
							<div class="text-center">
								<h6 class="m-0 font-weight-bold">Département du gard</h6>
								<img class="img-fluid px-3 px-sm-4 mt-1 mb-1 img-verysmall" src="<?php echo base_url('assets/img/logo_gard_2019_rvb_1000X1000.jpg'); ?>" alt="logo partenaire">
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center pb-5">
					<p>
						<a href="mentions-legales">Mentions légales</a>
					</p>
				</div>
			</div>
		</div>
	</div>

</body>

</html>