<?php if (!empty($aideTechnique) && is_array($aideTechnique)) :
    $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
?>
    <?php foreach ($aideTechnique as $aideTechnique_item) : ?>
        <div class="aideTechnique col-md-5 mb-4 m-3">
            <div class="card border-left-dark border-left-yellowonhover shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h5 class="font-weight-bold text-gray-800 text-uppercase mb-1"><?= esc($aideTechnique_item['nom']); ?></h5>
                            <div class="small mb-0 font-weight-bold text-gray-800"><?= esc($aideTechnique_item['description']); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="<?= esc($emoji[$aideTechnique_item['idCat']]); ?> fa-2x text-gray-800"></i>
                            <p class="d-none" id="prix"><?= esc($aideTechnique_item['prixMin']); ?>0</p>
                        </div>
                        <a href="<?= base_url('aideTechniques/view/' . esc($aideTechnique_item['id'], 'url')) ?>" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else :
?>
    <div class="container px-5">
        <div class="row d-flex justify-content-center">
            <h3>Nous n'avons pas trouvé de résultat :/</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <p>Aucune aide technique n'a été trouvée. Tentez d'élargir vos critères de sélection !</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-8 col-lg-6 col-xl-4 align-self-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/Character.jpg'); ?>" alt="No result illustration">
            </div>
        </div>
    </div>
<?php endif ?>