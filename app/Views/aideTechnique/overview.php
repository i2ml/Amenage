<div class="row justify-content-center m-5">
    <h2><?= esc($title); ?></h2>
</div>
<?php if (!empty($aideTechnique) && is_array($aideTechnique)) :
    $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
?>
    <div class="row justify-content-center">
        <div class="dropdown mb-4">
            <button class="btn btn-primary dropdown-toggle" type="select" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trier les résultats
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <option class="dropdown-item active" id="alphabeticalOrderOption">Ordre alphabétique (A-Z)</option>
                <option class="dropdown-item" id="invertedOrderOption">Ordre alphabétique (Z-A)</option>
            </div>
        </div>
        <div class="ml-4 mb-4">
            <button type="button" class="btn btn-primary">Filtrer les résultats</button>
        </div>
    </div>

    <div class="row justify-content-md-center" id="container">
        <?php foreach ($aideTechnique as $aideTechnique_item) : ?>

            <div class="aideTechnique col-md-5 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <h5 class="font-weight-bold text-primary text-uppercase mb-1"><?= esc($aideTechnique_item['nom']); ?></h5>
                                <div class="small mb-0 font-weight-bold text-gray-800"><?= esc($aideTechnique_item['description']); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="<?= esc($emoji[$aideTechnique_item['idCat']]); ?> fa-2x text-gray-300"></i>
                            </div>
                            <a href="<?= base_url('public/aideTechniques/view/' . esc($aideTechnique_item['id'], 'url')) ?>" class="stretched-link"></a>
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="<?= base_url('assets/js/sort.js') ?>" type="text/javascript"></script>