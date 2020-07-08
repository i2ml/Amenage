<h2><?= esc($title); ?></h2>

<?php if (! empty($aideTechnique) && is_array($aideTechnique)) : ?>

    <?php foreach ($aideTechnique as $aideTechnique_item): ?>

        <h3><?= esc($aideTechnique_item['nom']); ?></h3>

        <div class="main">
            <?= esc($aideTechnique_item['description']); ?>
        </div>
        <p><a href="/Catalogue-Diagnostique-AT/public/aideTechnique/<?= esc($aideTechnique_item['id'], 'url'); ?>">Plus de détails</a></p>

    <?php endforeach; ?>

<?php else : 
    // TODO : faire la partie ci-dessous
    ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>