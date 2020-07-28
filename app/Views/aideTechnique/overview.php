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
            <button type="button" class="btn btn-primary dropdown-toggle" id="filterbutton">Filtrer les résultats</button>
        </div>
    </div>
    <div class="row justify-content-md-center d-none" id="filterForm">
        <div class="card shadow mt-3 mb-3 ml-5 mr-5">
            <div class="card-header py-3">
                <h4 class="font-weight-bold text-primary text-uppercase mb-0 small">Choix des filtres à appliquer :</h4>
            </div>
            <div class="card-body">
                <form class="font-weight-bold text-secondary small">
                    <div class="form-row">
                        <div class="col-md-3 mb-3 ">
                            <label for="validationCustom01">Largeur maximale (en cm)</label>
                            <input type="number" class="form-control" id="validationCustom01">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom02">Longueur maximale (en cm)</label>
                            <input type="number" class="form-control" id="validationCustom02">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom02">Hauteur maximale (en cm)</label>
                            <input type="number" class="form-control" id="validationCustom02">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom03">Prix maximal.</label>
                            <input type="number" class="form-control" id="validationCustom03">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom03">Poids maximal.</label>
                            <input type="number" class="form-control" id="validationCustom03">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom03">Poids maximal.</label>
                            <input type="number" class="form-control" id="validationCustom03">
                        </div>
                        <div class="col-md-2 col-sm-3  mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label " for="defaultUnchecked">Est ajustable</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3  mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                                <label class="custom-control-label " for="defaultUnchecked2">Est pliable</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                                <label class="custom-control-label " for="defaultUnchecked3">Peut s'utiliser seul</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3  mb-3 mt-2 pt-2">
                            Remboursement
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                                <label class="custom-control-label " for="defaultUnchecked4">Total</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                                <label class="custom-control-label " for="defaultUnchecked5">Partiel</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <button class="btn btn-primary mr-3" id="reset-filter" type="button">Réinitialiser les filtres</button>
                        <button class="btn btn-primary ml-3" id="submit-filter" type="button">Appliquer les filtres</button>
                    </div>
                </form>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <div id="container">
        <div class="row justify-content-md-center">
            <?php foreach ($aideTechnique as $aideTechnique_item) : ?>

                <div class="aideTechnique col-md-5 mb-4 m-3">
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
    </div>
<?php else :
    // TODO : faire la partie ci-dessous
?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/js/sort.js') ?>" type="text/javascript"></script>