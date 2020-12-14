<div class="row justify-content-center m-5">
    <h2><?= esc($title); ?></h2>
</div>
<div class="row justify-content-md-center">
    <div class="col-md-10 ">
        <?php if (!empty($categorie) && is_array($categorie)) :

            $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
            foreach ($categorie as $categorie_item) : ?>
                <div class="col-md-5 mb-4 m-3">
                    <div class="card border-left-dark border-left-yellowonhover shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-gray-800 text-uppercase mb-1"><?= esc($categorie_item['nom']); ?></div>
                                    <div class="small mb-0 font-weight-bold text-gray-800">Nombre d'aides techniques : <?= esc($categorie_item['aideTechAmount']); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="<?= esc($emoji[$categorie_item['id']]); ?> fa-2x text-gray-800"></i>
                                </div>
                                <a href="aideTechniques/categorie/<?= esc($categorie_item['id']); ?>" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>
<?php else :
?>
    <div class="container px-5">
        <div class="row d-flex justify-content-center">
            <h3>Nous n'avons pas trouvé de résultat :/</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <p>Aucune catégorie n'a été trouvée. Contactez les administrateurs du site !</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-8 col-lg-6 col-xl-4 align-self-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/Character.jpg'); ?>" alt="No result illustration">
            </div>
        </div>
    </div>

<?php endif ?>