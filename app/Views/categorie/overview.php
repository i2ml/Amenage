<div class="row justify-content-center m-5">
    <h2><?= esc($title); ?></h2>
</div>
<div class="container"></div>
<div class="row justify-content-md-center">
    <?php if (!empty($categorie) && is_array($categorie)) :

        $colors = array("primary", "secondary", "info", "warning", "danger", "success", "primary", "secondary", "info", "warning", "danger", "success", "primary", "secondary", "info", "warning", "danger", "success");
        $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset");
        foreach ($categorie as $categorie_item) : ?>
            <!-- Pending Requests Card Example -->
            
                <div class="col-md-5 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1"><?= esc($categorie_item['nom']); ?></div>
                                    <div class="small mb-0 font-weight-bold text-gray-800">Nombre d'aides techniques : <?= esc($categorie_item['aideTechAmount']); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="<?= esc($emoji[$categorie_item['id']]); ?> fa-2x text-gray-300"></i>
                                </div>
                                <a href="aideTechniques" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
      
        <?php endforeach; ?>
</div>
<?php else :
        // TODO : faire la partie ci-dessous
?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>