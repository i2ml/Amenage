<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aménâge</title>
    <meta name="description"
          content="Aménâge est une application web permettant d’obtenir simplement et rapidement des informations sur les aides techniques en fonction de sa situation (état de santé, environnement existant et difficultés en découlant).">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

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
<div class="hero-bg-3d-2">
    <header>
        <a class="logo" href="<?php echo base_url('3d') ?>"><img class="ml-5 mt-2 p-2"
                                                                 src="<?php echo base_url('assets/img/pngs/LOGOSAnsfondblanc.png'); ?>"
                                                                 alt="logo"></a>
    </header>

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

<div class="row align-items-end hero-titlerow d-flex justify-content-center">
    <h1>
        <div class="d-sm-block d-none title">Aménâge - Présentation du logiciel</div>
        <div class="d-sm-none smalltitle">Aménâge - Présentation du logiciel</div>
    </h1>
</div>
<div class="row justify-content-center my-5" id="guide">
    <div class="d-block d-md-none col-8 align-self-center text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"
             src="<?php echo base_url('assets/img/présentation/biblioMan.jpg'); ?>"
             alt="No result illustration">
    </div>
    <div class="col-md-5 col-12 align-self-center text-center justify-content-center">
        <h2 class="h3 mb-3 subtitle bold">Guide d'utilisation</h2>
        <h3 class="h4 mb-0">Pour commencer directement la prise en main du logiciel, cliquez sur le lien
            ci-dessous.</h3>
        <div class="row justify-content-center my-5 ">
            <div class="col-md-12 col-lg-10 col-xl-8 align-self-center text-center justify-content-center test">
                <a href="<?php echo base_url('https://fondation-i2ml.gitbook.io/amenage-mode-d-emploi/') ?> "
                   target="_blank" rel="noreferrer"
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
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 "
             src="<?php echo base_url('assets/img/présentation/biblioMan.jpg'); ?>"
             alt="No result illustration">
    </div>
</div>


<div class="row justify-content-center my-5">

    <div class="d-none d-md-block col-8 align-self-center text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 w-50"
             src="<?php echo base_url('assets/img/présentation/lab.jpg'); ?>"
             alt="No result illustration">
    </div>
</div>
<div class="row justify-content-center my-5 txt">
    <div class="col-md-5 col-12 align-self-center text-center justify-content-center">
        <h2 class="h3 mb-3 subtitle bold ">Qu'est-ce qu'Aménâge3D ?</h2>
        <p class="h4 mb-0 mr-5 ml-5">Aménage3D est un logiciel en libre accès vous permettant de reproduire votre cadre
            de vie en 2D et 3D. Une multitude de meubles sont à votre disposition afin de vous aider à recréer votre
            logement au plus près de la réalité.</p>
    </div>
    <div class="d-block d-md-none col-10 align-self-center text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/présentation/lab.jpg'); ?>"
             alt="No result illustration">
    </div>
    <div class="col-md-5 col-12 align-self-center text-center justify-content-center">
        <h2 class="h3 mb-3 subtitle bold">Pour qui ?</h2>
        <p class="h4 mb-0 mr-5 ml-5">L'accès au logiciel est libre et gratuit, ce qui signifie que n'importe qui peut
            travailler sur le logiciel que ce soit à des fins personnels ou professionnels, pour ce qui est de la
            participation au développement du logiciel nous vous conseillons de vous référer au guide juste <a
                    href="#guide">ici</a>.</p>


    </div>
</div>
<div class="row justify-content-center my-5 ">
    <div class="col-md-5 col-12 align-self-center text-center justify-content-center txt">
        <h2 class="h3 mb-3 subtitle bold">Pourquoi Aménâge3D ?</h2>
        <p class="h4 mb-0 mr-5 ml-5">Aménage3D met à disposition un panel de meubles différents et variés. Cette liste
            permet déjà de créer un environnement propice à l'accueil d'une personne physiquement diminuée ou encore
            d'adapter un logement déjà existant avec des aides techniques nécessaires au bien être d'une personne. Des
            mesures automatiques sont mis à votre disposition pour faciliter un maximum l'insertion de nouveaux meubles
            dans votre environnement.</p>
    </div>
</div>
<div class="d-none d-md-block">
    <main>
        <div class="image--container"></div>
        <div class="image--selection"></div>
    </main>
</div>


<div class="d-block d-md-none">
    <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="3000">

        <ol class="carousel-indicators">
            <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExemple" data-slide-to="1"></li>
            <li data-target="#carouselExemple" data-slide-to="2"></li>
            <li data-target="#carouselExemple" data-slide-to="3"></li>
            <li data-target="#carouselExemple" data-slide-to="4"></li>
            <li data-target="#carouselExemple" data-slide-to="5"></li>

        </ol>


        <div class="carousel-inner">

            <div class="carousel-item active">
                <img alt="Capture d'écran du logiciel amenage 3D" src="assets/img/présentation/appart1.jpg"
                     class="d-block">
            </div>

            <div class="carousel-item">
                <img alt="Capture d'écran du logiciel amenage 3D" src="assets/img/présentation/appart1VueHaut.jpg"
                     class="d-block">
            </div>

            <div class="carousel-item">
                <img alt="Capture d'écran du logiciel amenage 3D" src="assets/img/présentation/appart2.jpg"
                     class="d-block">
            </div>

            <div class="carousel-item">
                <img alt="Capture d'écran du logiciel amenage 3D" src="assets/img/présentation/appart2VueHaut.jpg"
                     class="d-block">
            </div>
            <div class="carousel-item">
                <img alt="Capture d'écran du logiciel amenage 3D" src="assets/img/présentation/appart3.jpg"
                     class="d-block">
            </div>

            <div class="carousel-item">
                <img alt="Capture d'écran du logiciel amenage 3D" src="assets/img/présentation/appart3VueHaut.jpg"
                     class="d-block">
            </div>

        </div>

        <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Aménâge - I2ML 2020</span>
        </div>
    </div>
</footer>


<script>
    const image_gallery = document.querySelector(".image--container")
    const image_container = document.querySelector(".image--selection")
    let nomImage
    const image_gal = ['appart1', 'appart1VueHaut', 'appart2', 'appart2VueHaut', 'appart3', 'appart3VueHaut']

    const showImages = () => {

        for (let i = 0; i < image_gal.length - 1; i++) {
            createImageGallery(image_gal[i]);
        }
    }
    const createImageGallery = images => {
        let output = ""
        // Show the first image on the viewer
        image_gallery.innerHTML = `<img src="assets/img/présentation/${images}.jpg" class="animate-entrance image--gallery" alt="${images}">`
        setTimeout(() => {
            image_gallery.children[0].classList.remove("animate-entrance")
        }, 500)
        // show unselected images
        for (let i = 0; i <= image_gal.length - 1; i++) {

            if (i != images) {

                output += `<img src="assets/img/présentation/${image_gal[i]}.jpg" alt="Bonjour" class="image__item" id="${image_gal[i]}" onClick="changeImage('${image_gal[i]}')"/>`
            }
        }
        image_container.innerHTML = output
    }

    function changeImage(nomImage) {
        const image = image_gallery.children[0]
        image.classList.add("animate-entrance")
        image.src = "assets/img/illustrationsQuestions/" + nomImage + ".jpg"
        createImageGallery(nomImage)
        setTimeout(() => {
            image.classList.remove("animate-entrance")
        }, 800)

    }

    // Event listeners
    document.addEventListener("DOMContentLoaded", showImages)
</script>
</body>
