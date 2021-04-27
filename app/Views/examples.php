<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Aménâge</title>
  <meta name="description"
  content="Aménâge est une application web permettant d’obtenir simplement et rapidement des informations sur les aides techniques en fonction de sa situation (état de santé, environnement existant et difficultés en découlant).">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
</head>

<link href="<?php echo base_url('assets/packages/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet"
type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

<body>
  <div class="container-fluid p-0 mb-4 hero-bg">
    <header>
      <a class="logo" href="<?php echo base_url() ?>"><img class="ml-5 mt-2 p-2"
        src="<?php echo base_url('assets/img/pngs/LOGOSAnsfondblanc.png'); ?>"
        alt="logo"></a>
      </header>
      <!-- bg-gradient-primary -->
      <div class="hero-infos container">

        <div class="row align-items-end hero-titlerow d-flex justify-content-center">
          <h1>
            <div class="d-sm-block d-none title">Aménâge - Présentation du logiciel</div>

          </h1>
        </div>
      </div>
      <div class="row mt-3">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" width="100%" height="150" fill="none" version="1.1"
        xmlns="http://www.w3.org/2000/svg">
        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#fff"/>
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
        <animate repeatCount="indefinite" fill="url(#grad1)" attributeName="d" dur="35s" attributeType="XML"
        values="
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
<div class="row justify-content-center my-5" id="guide">
  <div class="d-block d-md-none col-8 align-self-center text-center">
    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/présentation/biblioMan.jpg'); ?>"
    alt="No result illustration">
  </div>
  <div class="col-md-5 col-12 align-self-center text-center justify-content-center">
    <h2 class="h3 mb-3 subtitle bold">Guide d'utilisation</h2>
    <h3 class="h4 mb-0">Pour commencer directement la prise en main du logiciel, cliquez sur le lien ci-dessous.</h3>
    <div class="row justify-content-center my-5 ">
      <div class="col-md-12 col-lg-10 col-xl-8 align-self-center text-center justify-content-center test" >
        <a href="<?php echo base_url('https://fondation-i2ml.gitbook.io/amenage-mode-d-emploi/') ?> "  target="_blank" rel="noreferrer"
          class="button btn-dark buttonLarge w-10 p-3 px-5 d-flex justify-content-center ">
          <p class="m-auto">
            <i class="fa fa-book mr-2"></i>

            Guide d'utilisation du logiciel
          </p>
        </a>
      </div>
    </div>
  </div>
  <div class="d-none d-md-block col-3 align-self-center text-center">
    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 " src="<?php echo base_url('assets/img/présentation/biblioMan.jpg'); ?>"
    alt="No result illustration">
  </div>
</div>

<div class="row justify-content-center my-5">

  <div class="d-none d-md-block col-8 align-self-center text-center">
    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 " src="<?php echo base_url('assets/img/présentation/ecranPrincipal.jpg'); ?>"
    alt="No result illustration">
  </div>
</div>
<div class="row justify-content-center my-5">
  <div class="col-md-5 col-12 align-self-center text-center justify-content-center">
    <h2 class="h3 mb-3 subtitle bold">Qu'est-ce qu'Aménâge3D ?</h2>
    <h3 class="h4 mb-0">Aménage3D est un logiciel en libre accès vous permettant de reproduire votre cadre de vie en 2D et 3D. Une multitude de meubles sont à votre dispostion afin de vous aider à recréer votre logement au plus près de la réalité.</h3>
  </div>
  <div class="d-block d-md-none col-10 align-self-center text-center">
    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/présentation/ecranPrincipal.jpg'); ?>"
    alt="No result illustration">
  </div>
  <div class="col-md-5 col-12 align-self-center text-center justify-content-center">
    <h2 class="h3 mb-3 subtitle bold">Pour qui ?</h2>
    <h3 class="h4 mb-0">L'accès au logiciel est libre, ce qui signifie que n'importe qui peut travailler sur le logiciel que ce soit à des fins personnels ou professionnels, pour ce qui est de la participation au développement du logiciel nous vous conseillons de vous réfèrer au guide juste <a href="#guide">ici</a>.</h3>


  </div>
</div>
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Aménâge - I2ML 2020</span>
    </div>
  </div>
</footer>
</body>
