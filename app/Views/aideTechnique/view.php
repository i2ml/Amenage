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
                <h4 class="m-0 font-weight-bold text-primary">Description :</h4>
            </div>
            <div class="card-body">
                <div class="text-justify">
                    <?= esc($aideTechnique['description']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class=" col-xl-7 col-md-6">
        <div class="card shadow mt-3 mr-3">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Caractéristiques :</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Catégorie : </h6>
                        <h6 class="d-inline"><?= ucfirst(esc($aideTechnique['nomCat'])); ?>.</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Dimensions : </h6>
                        <h6 class="d-inline">
                            <?php if (esc($aideTechnique['idDim']) === null) {
                            ?>
                                Information inconnue ou non applicable.
                                <?php
                            }
                            if (esc($aideTechnique['longueurMax']) != 0 && esc($aideTechnique['longueurMax']) != null) {
                                if (esc($aideTechnique['longueurMin']) === esc($aideTechnique['longueurMax'])) {
                                ?>
                                    <br> Longueur : environ <?= esc($aideTechnique['longueurMin']); ?> cm
                                <?php
                                } else {
                                ?>
                                    <br> Longueur : de <?= esc($aideTechnique['longueurMin']); ?> à <?= esc($aideTechnique['longueurMax']); ?> cm
                                <?php
                                }
                            }
                            if (esc($aideTechnique['largeurMax']) != 0 && esc($aideTechnique['largeurMax']) != null) {
                                if (esc($aideTechnique['largeurMin']) === esc($aideTechnique['largeurMax'])) {
                                ?>
                                    <br> Largeur : environ <?= esc($aideTechnique['largeurMax']); ?> cm
                                <?php
                                } else {
                                ?>
                                    <br> Largeur : de <?= esc($aideTechnique['largeurMin']); ?> à <?= esc($aideTechnique['largeurMax']); ?> cm
                                <?php
                                }
                            }
                            if (esc($aideTechnique['hauteurMax']) != 0 && esc($aideTechnique['hauteurMax']) != null) {
                                if (esc($aideTechnique['hauteurMin']) === esc($aideTechnique['hauteurMax'])) {
                                ?>
                                    <br> Hauteur : environ <?= esc($aideTechnique['hauteurMin']); ?> cm
                                <?php

                                } else {
                                ?>
                                    <br> Hauteur : de <?= esc($aideTechnique['hauteurMin']); ?> à <?= esc($aideTechnique['hauteurMax']); ?> cm
                            <?php
                                }
                            }
                            ?>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Prix : </h6>

                        <?php
                        if (esc($aideTechnique['idPrix']) === null) {
                        ?>
                            <h6 class="d-inline"> Information inconnue ou non applicable.</h6>
                        <?php
                        } else if (esc($aideTechnique['prixMin']) >= esc($aideTechnique['prixMax'])) {
                        ?>
                            <h6 class="d-inline"> environ <?= esc($aideTechnique['prixMax']); ?> €</h6>
                        <?php
                        } else {
                        ?>
                            <h6 class="d-inline"> de <?= esc($aideTechnique['prixMin']); ?> à <?= esc($aideTechnique['prixMax']); ?> €</h6>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Remboursement : </h6>

                        <?php
                        if (esc($aideTechnique['idPec']) === null) {
                        ?>
                            <h6 class="d-inline"> Information inconnue ou non applicable.</h6>
                        <?php
                        } else if (esc($aideTechnique['priseEnChargeMin']) >= esc($aideTechnique['priseEnChargeMax'])) {
                        ?>
                            <h6 class="d-inline"> environ <?= esc($aideTechnique['priseEnChargeMax']); ?> €</h6>
                        <?php
                        } else {
                        ?>
                            <h6 class="d-inline"> de <?= esc($aideTechnique['priseEnChargeMin']); ?> à <?= esc($aideTechnique['priseEnChargeMax']); ?> €</h6>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Poids : </h6>
                        <?php
                        if (esc($aideTechnique['idPoids']) === null) {
                        ?>
                            <h6 class="d-inline"> Information inconnue ou non applicable.</h6>
                        <?php
                        } else if (esc($aideTechnique['poidsMin']) >= esc($aideTechnique['poidsMax'])) {
                        ?>
                            <h6 class="d-inline"> environ
                                <?php
                                if ($aideTechnique['poidsMax'] < 999) {
                                    echo (esc($aideTechnique['poidsMax']) . "g");
                                } else {
                                    echo (esc($aideTechnique['poidsMax'] / 1000) . "Kg");
                                } ?>
                            </h6>
                        <?php
                        } else {
                        ?>
                            <h6 class="d-inline"> de
                                <?php
                                if ($aideTechnique['poidsMin'] < 999) {
                                    echo (esc($aideTechnique['poidsMin']) . "g");
                                } else {
                                    echo (esc($aideTechnique['poidsMin'] / 1000) . "Kg");
                                } ?>
                                à
                                <?php
                                if ($aideTechnique['poidsMax'] < 999) {
                                    echo (esc($aideTechnique['poidsMax']) . "g");
                                } else {
                                    echo (esc($aideTechnique['poidsMax'] / 1000) . "Kg");
                                } ?>
                            </h6>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Est ajustable : </h6>
                        <h6 class="d-inline">
                            <?php if (esc($aideTechnique['estAjustable']) == 0) {
                                echo ("Non.");
                            } else if (esc($aideTechnique['estAjustable']) == 1) {
                                echo ("Oui.");
                            } else if (esc($aideTechnique['estAjustable']) == 2) {
                                echo ("Sur certains modèles.");
                            } else {
                                echo ("Information inconnue.");
                            }
                            ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Dimensions plié : </h6>
                        <h6 class="d-inline">
                            <?php
                            if ($aideTechnique['idDimPlie'] === null) {
                                echo ("Ne se plie pas.");
                            }
                            if (esc($aideTechnique['longueurMaxPlie']) != 0 && esc($aideTechnique['longueurMaxPlie']) != null) {
                                if (esc($aideTechnique['longueurMinPlie']) === esc($aideTechnique['longueurMaxPlie'])) {
                            ?>
                                    <br> Longueur : environ <?= esc($aideTechnique['longueurMinPlie']); ?> cm
                                <?php
                                } else {
                                ?>
                                    <br> Longueur : de <?= esc($aideTechnique['longueurMinPlie']); ?> à <?= esc($aideTechnique['longueurMaxPlie']); ?> cm
                                <?php
                                }
                            }
                            if (esc($aideTechnique['largeurMaxPlie']) != 0 && esc($aideTechnique['largeurMaxPlie']) != null) {
                                if (esc($aideTechnique['largeurMinPlie']) === esc($aideTechnique['largeurMaxPlie'])) {
                                ?>
                                    <br> Largeur : environ <?= esc($aideTechnique['largeurMaxPlie']); ?> cm
                                <?php
                                } else {
                                ?>
                                    <br> Largeur : de <?= esc($aideTechnique['largeurMinPlie']); ?> à <?= esc($aideTechnique['largeurMaxPlie']); ?> cm
                                <?php
                                }
                            }
                            if (esc($aideTechnique['hauteurMaxPlie']) != 0 && esc($aideTechnique['hauteurMaxPlie']) != null) {
                                if (esc($aideTechnique['hauteurMinPlie']) === esc($aideTechnique['hauteurMaxPlie'])) {
                                ?>
                                    <br> Hauteur : environ <?= esc($aideTechnique['hauteurMinPlie']); ?> cm
                                <?php
                                } else {
                                ?>
                                    <br> Hauteur : de <?= esc($aideTechnique['hauteurMinPlie']); ?> à <?= esc($aideTechnique['hauteurMaxPlie']); ?> cm
                            <?php
                                }
                            }
                            ?>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Poids supporté : </h6>
                        <?php
                        if (esc($aideTechnique['idPSupporte']) === null) {
                        ?>
                            <h6 class="d-inline"> Information inconnue ou non applicable.</h6>
                        <?php
                        } else if (esc($aideTechnique['poidsMinSupporte']) >= esc($aideTechnique['poidsMaxSupporte'])) {
                        ?>
                            <h6 class="d-inline"> environ
                                <?php
                                if ($aideTechnique['poidsMaxSupporte'] < 999) {
                                    echo (esc($aideTechnique['poidsMaxSupporte']) . "g");
                                } else {
                                    echo (esc($aideTechnique['poidsMaxSupporte'] / 1000) . "Kg");
                                } ?>
                            </h6>
                        <?php
                        } else {
                        ?>
                            <h6 class="d-inline"> de
                                <?php
                                if ($aideTechnique['poidsMinSupporte'] < 999) {
                                    echo (esc($aideTechnique['poidsMinSupporte']) . "g");
                                } else {
                                    echo (esc($aideTechnique['poidsMinSupporte'] / 1000) . "Kg");
                                } ?>
                                à
                                <?php
                                if ($aideTechnique['poidsMaxSupporte'] < 999) {
                                    echo (esc($aideTechnique['poidsMaxSupporte']) . "g");
                                } else {
                                    echo (esc($aideTechnique['poidsMaxSupporte'] / 1000) . "Kg");
                                } ?>
                            </h6>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Alimentation : </h6>
                        <h6 class="d-inline">
                            <?= esc($aideTechnique['estAlimenté']);?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">Necessite une autre personne pour être utilisée : </h6>
                        <h6 class="d-inline">
                            <?php if (esc($aideTechnique['estMultiUtilisateur']) == 0) {
                                echo ("Non.");
                            } else if (esc($aideTechnique['estMultiUtilisateur']) == 1) {
                                echo ("Oui.");
                            } else if (esc($aideTechnique['estMultiUtilisateur']) == 2) {
                                echo ("Sur certains modèles.");
                            } else {
                                echo ("Information inconnue.");
                            }
                            ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <h6 class="d-inline m-0 font-weight-bold text-primary">S'utilise en exterieur : </h6>
                        <h6 class="d-inline">
                            <?php if (esc($aideTechnique['sutiliseEnExterieur']) == 0) {
                                echo ("Non.");
                            } else if (esc($aideTechnique['sutiliseEnExterieur']) == 1) {
                                echo ("Oui.");
                            } else if (esc($aideTechnique['sutiliseEnExterieur']) == 2) {
                                echo ("Sur certains modèles.");
                            } else {
                                echo ("Information inconnue.");
                            }
                            ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>