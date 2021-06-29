<?php if (!empty($aideTechnique) && is_array($aideTechnique)) :
    $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
    ?>
    <?php
    $lettre = '';
    foreach ($aideTechnique as $aideTechnique_item) :
        $newletter = esc($aideTechnique_item['nom'])[0];
        if ($newletter != $lettre && $newletter != '�') {
            $lettre = $newletter;
            ?>
            <div class="aideTechnique col-md-12 mt-4">
                <h5 class="lettre sortinvert"><?= esc($lettre); ?></h5>
                <h5 class="d-none lettre sort-noninvert"><?= esc($lettre); ?></h5>
                <hr>
            </div>
            <?php
        }
        ?>
        <div class="aideTechnique col-md-6 mb-4 p-3">
            <div class="card border-left-dark border-left-yellowonhover shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h5 class="font-weight-bold text-gray-800 text-uppercase mb-1 sort-noninvert sortinvert"><?= esc($aideTechnique_item['nom']); ?></h5>
                            <div class="mb-0 text-gray-800 text-justify"><?= esc($aideTechnique_item['description']); ?>
                            </div>
                        </div>
                        <div class="col-auto mx-5">
                            <i class="<?= esc($emoji[$aideTechnique_item['idCat']]); ?> fa-2x text-gray-800"></i>
                        </div>
                        <a href="<?= base_url('aideTechniques/view/' . esc($aideTechnique_item['id'], 'url')) ?>" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php if (sizeof($aideTechnique) % 2 != 0) { ?>
    <div class="col-md-5 mb-4 m-3">
    </div>
    <?php
} ?>


<?php else :
    ?>
    <div class="container px-5 mt-5">
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