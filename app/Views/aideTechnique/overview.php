<div class="row mt-md-3 mx-3 mb-4 ">
    <?php if ($categorie != "" || $group != "") { ?>
        <div class="card shadow col-12">
            <div class="card-body">
                <h5 class="h5 mb-0 text-gray-800 ml-5">
                    <?php if ($categorie != "") { ?>
                        <a href="<?php echo base_url('categories') ?>">
                            Liste des catégories
                        </a>
                    <?php } ?>
                    <?php if ($group != "") { ?>
                        <a href="<?php echo base_url('cibler-mon-besoin') ?>">
                            Cibler mon besoin
                        </a>
                    <?php } ?>
                    <?php if (isset($previouspage)) { ?>
                        <?= ucfirst(esc($previouspage)); ?>
                    <?php } ?>
                </h5>
            </div>
        </div>
    <?php } ?>
</div>
<div class="row justify-content-center m-5">
    <h2><?= esc($title); ?></h2>
    <p id="catid" class="d-none "><?= esc($categorie); ?></p>
</div>
<?php if (isset($infos)) { ?>
    <div class="row justify-content-center m-5">
        <h4><?= esc($infos); ?></h4>
    </div>
<?php } ?>
<p id="searchInput" class="d-none"> <?= esc($searchInput) ?></p>
<?php if (!empty($aideTechnique) && is_array($aideTechnique)) :
    $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
?>
    <div class="row justify-content-center">
        <div class="dropdown mb-4">
            <button class="btn btn-light dropdown-toggle" type="select" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trier les résultats
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <option class="dropdown-item active" id="alphabeticalOrderOption">Ordre alphabétique (A-Z)</option>
                <option class="dropdown-item" id="invertedOrderOption">Ordre alphabétique (Z-A)</option>
            </div>
        </div>
        <div class="ml-4 mb-4">
            <button type="button" class="btn btn-light dropdown-toggle" id="filterbutton">Filtrer les résultats</button>
        </div>
    </div>
    <div class="row justify-content-md-center d-none" id="filterForm">
        <div class="card shadow mt-3 mb-3 ml-5 mr-5">
            <div class="card-header py-3">
                <h4 class="font-weight-bold text-gray-900 text-uppercase mb-0 small">Choix des filtres à appliquer :</h4>
            </div>
            <div class="card-body">
                <form class="font-weight-bold text-gray-900 small">
                    <div class="form-row">
                        <div class="col-md-3 mb-3 ">
                            <label for="largeurMax">Largeur maximale. (en cm)</label>
                            <input type="number" class="form-control" id="largeurMax">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="longueurMax">Longueur maximale. (en cm)</label>
                            <input type="number" class="form-control" id="longueurMax">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="hauteurMax">Hauteur maximale. (en cm)</label>
                            <input type="number" class="form-control" id="hauteurMax">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="prixMax">Prix maximal.</label>
                            <input type="number" class="form-control" id="prixMax">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="supPoidsMax">Poids supporté. (en kg)</label>
                            <input type="number" class="form-control" id="supPoidsMax">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="poidsMax">Poids maximal. (en kg)</label>
                            <input type="number" class="form-control" id="poidsMax">
                        </div>
                        <div class="col-md-2 col-sm-3  mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="estAjustable">
                                <label class="custom-control-label " for="estAjustable">Est ajustable.</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="estPliable">
                                <label class="custom-control-label " for="estPliable">Est pliable.</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="solo">
                                <label class="custom-control-label " for="solo">Peut s'utiliser seul.</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 mb-3 mt-4 pt-2">
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="rembourse">
                                <label class="custom-control-label " for="rembourse">Est remboursé</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-sm-12 col-md-4 d-flex justify-content-center mt-3">
                            <button class="btn btn-primary" id="reset-filter" type="button">Réinitialiser les filtres</button>
                        </div>
                        <div class="col-sm-12 col-md-4 d-flex justify-content-center mt-3">
                            <button class="btn btn-primary" id="submit-filter" type="button">Appliquer les filtres</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div id="container" class="row col-md-10 m-3 m-md-0">
            <?php
            $lettre = '';
            foreach ($aideTechnique as $aideTechnique_item) :
                $newletter = esc($aideTechnique_item['nom'])[0];
                if ($newletter != $lettre) {
                    $lettre = $newletter;
            ?>
                    <div class="aideTechnique col-md-12 mt-4">
                        <h5 class="lettre sortinvert"><?= esc($lettre); ?></h5>
                        <h5 class="d-none lettre sort-noninvert"><?= esc($lettre); ?></h5>
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
                                    <div class="mb-0 text-gray-800 text-justify max-lines"><?= esc($aideTechnique_item['description']); ?>
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

        </div>
    </div>

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

        <div class="row d-flex justify-content-center">
            <!-- Topbar Search -->
            <form class="d-block d-sm-none float-right form-inline mr-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?php echo base_url('aideTechniques') ?>" method="post">
                <div class="input-group">
                    <input type="text" name="searchBar" class="form-control bg-darkerlight border-0 small" placeholder="Rechercher une aide technique..." aria-label="Search" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif ?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/js/sort.js') ?>" type="text/javascript"></script>