<h2><?= esc($title); ?></h2>

<?php if (!empty($categorie) && is_array($categorie)) : ?>

    <?php foreach ($categorie as $categorie_item) : ?>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-warning text-uppercase mb-1"><?= esc($categorie_item['nom']); ?></div>
                            <div class="small mb-0 font-weight-bold text-gray-800">Nombre d'aides techniques : <?= esc($categorie_item['aideTechAmount']); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach; ?>

<?php else :
    // TODO : faire la partie ci-dessous
?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>