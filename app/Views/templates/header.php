<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>" />

    <title><?= esc($title); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/packages/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <div class="container-fluid p-0 mb-4 hero-bg-center">

        <!-- Topbar -->
        <nav class="navbar navbar-dark p-5 navbar-expand topbar static-top">

            <a class="navbar-brand p-md-1 p-5" href="<?php echo base_url('accueil') ?>">
                <img src="<?php echo base_url('assets/img/pngs/LOGOSAnsfondblanc.png'); ?>" style="max-width:250px;" alt="logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="ml-auto pr-3 d-md-block d-none">
                    <form onsubmit="this.action='<?php echo(base_url('aideTechniques')) ?>/search/'+this.search.value;">
                        <div class="input-group border-heavy buttonLarge p-1 whitebar">
                            <input type="text" id="search" class="form-control buttonLarge p-1 pl-3 border-0 small" placeholder="Rechercher une aide technique..." aria-label="Search"  required>
                            <div class="input-group-append"></div>
                            <button class="btn buttonLarge m-1" type="submit" aria-label="Search">
                                <i class="fas fa-search fa-sm whitecolor"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </nav>
        <!-- End of Topbar -->

        <div class="row">
            <svg viewBox="0 0 1440 150"  width="100%" height="150" preserveAspectRatio="none" fill="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
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
                </path>
            </svg>
        </div>
    </div>
</head>

<body>
