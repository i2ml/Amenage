<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aménâge</title>
	<meta name="description" content="Aménâge est une application web permettant d’obtenir simplement et rapidement des informations sur les aides techniques en fonction de sa situation (état de santé, environnement existant et difficultés en découlant).">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="assets/img/favicon.ico" />
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
	<div class="hero-bg-3d">

		<header>
			<a class="logo" href="<?php echo base_url() ?>"><img class="ml-5 mt-2 p-2" src="<?php echo base_url('assets/img/pngs/LOGOSAnsfondblanc.png'); ?>" alt="logo"></a>
		</header>
		<!-- bg-gradient-primary -->
		<div class="hero-infos container">

			<div class="row align-items-end hero-titlerow d-flex justify-content-center">
				<h1>
					<div class="d-sm-block d-none title">Aménâge 3D - Faciliter les amenagements pour l'autonomie à domicile</div>
					<div class="d-sm-none smalltitle">Aménâge 3D- Faciliter les amenagements pour l'autonomie à domicile</div>
				</h1>
			</div>
			<div class=" row mt-5 align-items-center hero-row d-flex justify-content-center zindex-dropdown">
				<div class="col-12 col-lg-5 mb-lg-0 mb-3 d-flex justify-content-lg-end justify-content-center">
					<a href="https://github.com/i2ml/Amenage3D/releases" class="button buttonWhite buttonLarge p-3 px-5" id="buttonJoin">
						<i class="fa fa-download buttonIcon"></i>
						Télécharger la dernière version
					</a>
				</div>
				<div class="col-12 col-lg-5 d-flex justify-content-lg-start justify-content-center">
					<a href="https://github.com/i2ml/Amenage3D" class="button btn-dark buttonLarge p-3 px-5">
						<i class="fab fa-github buttonIcon"></i>
						Collaborer au logiciel
					</a>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<svg viewBox="0 0 1440 150" preserveAspectRatio="none" width="100%" height="150" fill="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
					<stop offset="0%" stop-color="#fff" />
				</linearGradient>
				<path fill="url(#grad1)" d="
                    M0 67
                    C 273,183
                    822,0
                    1440.00,106
                    V 359
                    H 0
                    V 67
                    Z">
					<animate repeatCount="indefinite" fill="url(#grad1)" attributeName="d" dur="35s" attributeType="XML" values="
                    M0 67
                    C 473,283
                    822,0
                    1440,116
                    V 359
                    H 0
                    V 67
                    Z;
                    M0 67
                    C 473,0
                    1222,283
                    1440,67
                    V 359
                    H 0
                    V 67
                    Z;
                    M0 67
                    C 973,260
                    1722,0
                    1440,120
                    V 359
                    H 0
                    V 67
                    Z;
                    M0 67
                    C 473,283
                    822,0
                    1440,116
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

				<div class="row justify-content-center my-5">
					<div class="d-block d-md-none col-8 align-self-center text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/dowloadamenage3d.jpg'); ?>" alt="No result illustration">
					</div>
					<div class="col-md-5 col-12 align-self-center text-center justify-content-center">
						<h2 class="h2 mb-3 subtitle bold">Un logiciel complet</h2>
						<h3 class="h3 mb-0">Amenage 3D vous permet de modéliser un logement complet, équipé de toutes les aides techniques dont vous pouvez avoir besoin !</h3>
						<div class="row justify-content-center my-5">
							<div class="col-md-12 col-lg-10 col-xl-8 align-self-center text-center justify-content-center">
								<a href="examples" class="button btn-dark buttonLarge w-100 p-3 px-5 d-flex justify-content-center">
									<p class="m-auto">
										<i class="fa fa-camera buttonIcon"></i>
										Captures d'écran
									</p>
								</a>
							</div>
						</div>
					</div>
					<div class="d-none d-md-block col-5 align-self-center text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/dowloadamenage3d.jpg'); ?>" alt="No result illustration">
					</div>
				</div>

				<div class="row justify-content-center my-5">
					<div class="col-xl-3 col-md-5 col-8 align-self-center text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="https://draftbot.com/public/ressources/github-min.png" alt="No result illustration">
					</div>
					<div class="col-xl-1 d-xl-block d-none">
					</div>
					<div class="col-md-5 col-12 align-self-center text-center justify-content-center">
						<h2 class="h2 mb-3 subtitle bold">Open source et gratuit</h2>
						<h3 class="h3 mb-0">Notre logiciel est totalement gratuit et open-source. Retrouvez toutes les solutions libres de la Fondation i2ml sur notre Github :</h3>
						<div class="row justify-content-center my-5">
							<div class="col-md-12 col-lg-10 col-xl-8 align-self-center text-center justify-content-center">
								<a href="https://github.com/i2ml" class="button btn-dark buttonLarge w-100 p-3 px-5 d-flex justify-content-center">
									<p class="m-auto">
										<i class="fab fa-github buttonIcon"></i>
										Github i2ml
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-center my-5">
					<div class="d-block d-md-none col-8 align-self-center text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/appimg.jpg'); ?>" alt="No result illustration">
					</div>
					<div class="col-md-5 col-12 align-self-center text-center justify-content-center">
						<h2 class="h2 mb-3 subtitle bold">Recherchez des aides techniques sur Amenage</h2>
						<h3 class="h3 mb-0">Découvrez des aides techniques qui correspondent à votre besoin ou renseignez vous sur les caractèristiques techniques des aides que vous connaissez.</h3>
						<div class="row justify-content-center my-5">
							<div class="col-md-12 col-lg-10 col-xl-8 align-self-center text-center justify-content-center">
								<a href="accueil" class="button btn-dark buttonLarge w-100 p-3 px-5 d-flex justify-content-center">
									<p class="m-auto">
										<i class="fa fa-laptop buttonIcon"></i>
										Aller sur l'application
									</p>
								</a>
							</div>
						</div>
					</div>
					<div class="d-none d-md-block col-5 align-self-center text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/appimg.jpg'); ?>" alt="No result illustration">
					</div>
				</div>

				<div class="row justify-content-center">
					<h2 class="h3 mb-0 mt-5">Les acteurs du projet</h2>
				</div>
                <div class="row justify-content-center">
                    <div class="card shadow mb-4 m-3">
                        <a class="stretched-link" href="https://i2ml.fr" aria-label="Site d'un partenaire du projet">
                        </a>
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="m-0 font-weight-bold">Fondation i2ml</h6>
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 img-verysmall"
                                     src="<?php echo base_url('assets/img/Logo_Square.jpg'); ?>" alt="logo partenaire">
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4 m-3">
                        <a class="stretched-link"
                           href="https://www.gard.fr/toute-lactu-du-departement-du-gard/autonomie-la-conference-des-financeurs-lance-son-appel-a-initiatives-2020.html"
                           aria-label="Site d'un partenaire du projet">
                        </a>
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="m-0 font-weight-bold">CFPPA 30</h6>
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 img-verysmall"
                                     src="<?php echo base_url('assets/img/Logo-CFPPA30-Gard.jpg'); ?>" alt="logo partenaire">
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4 m-3">
                        <a class="stretched-link" href="https://www.gard.fr/accueil.html" aria-label="Site d'un partenaire du projet">
                        </a>
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="m-0 font-weight-bold">Département du gard</h6>
                                <img class="img-fluid px-3 px-sm-4 mt-1 mb-1 img-verysmall"
                                     src="<?php echo base_url('assets/img/logo_gard_2019_rvb_1000X1000.jpg'); ?>" alt="logo partenaire">
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