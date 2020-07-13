<div class="row mt-md-3 ml-md-3">
    <h1 class="h3 mb-0 text-gray-800"><?= ucfirst(esc($aideTechnique['nom'])); ?></h1>
</div>
<div class="row">
    <div class="col-xl-5 col-md-6">
        <div class="card shadow m-3">
            <div class="card-body">
                <div class="text-center">
                    <?php if (file_exists(base_url('assets/img/illustrationsAt/' . $aideTechnique['id'] . '.jpg'))) : ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php base_url('assets/img/illustrationsAt/' . $aideTechnique['id'] . '.jpg'); ?>" alt="Banière page d'accueil">
                    <?php else : ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/illustrationsAt/error.jpg'); ?>" alt="Banière page d'accueil">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card shadow m-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Description :</h6>
            </div>
            <div class="card-body">
                <div class="text-justify">
                    <?= esc($aideTechnique['description']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-md-6 mt-md-3 pl-5 pr-5 pt-md-3 pb-md-3">
        <div class="row">
            <h4>Catégorie :</h4>
            <h6>Je suis une banane<?= ucfirst(esc($aideTechnique['idCategorie'])); ?></h6>
        </div>
    </div>
</div>