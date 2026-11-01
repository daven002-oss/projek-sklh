<?php
require_once __DIR__ . '/../includes/init.php';
$pageTitle  = 'Gallery';
$activePage = 'gallery';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>All Exhibitions</h1>
</div>

<section class="grid-3">
    <?php foreach ($artworks as $art): ?>
        <?php art_card($art); ?>
    <?php endforeach; ?>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
