<div class="row justify-content-center m-5">
    <h2><?= esc($title); ?></h2>
</div>
<div class="container"></div>
<div class="row justify-content-md-center">
    <?php if (!empty($questions) && is_array($questions)) :

        $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
        foreach ($questions as $question_item) : ?>
            <div class="col-md-5 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 font-weight-bold text-gray-800 text-uppercase mb-1"><?= esc($question_item['Domaine']); ?></div>
                                <div class="mb-0 font-weight-bold text-gray-800"><?= esc($question_item['intitule']); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-800"></i>
                            </div>
                            <?php if ($question_item['idGroupe'] == 0) {
                            ?>
                                <a href="<?= base_url('question/' . esc($question_item['id'])) ?>" class="stretched-link"></a>
                            <?php
                            } else {
                            ?>
                                <a href="<?= base_url('aideTechniques/group/' . esc($question_item['idGroupe'])) ?>" class="stretched-link"></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
</div>
<?php else :
        // TODO : faire la partie ci-dessous
?>

    <h3>Pas de résultat</h3>

    <p>Aucune question n'a été trouvée. Tentez d'élargir vos critères de sélection</p>

<?php endif ?>