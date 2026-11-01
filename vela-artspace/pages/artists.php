<?php
require_once __DIR__ . '/../includes/init.php';
$pageTitle  = 'Artists';
$activePage = 'artists';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>Top Artists</h1>
</div>

<section class="row-list">
    <?php foreach ($artists as $artist): ?>
        <?php $profileUrl = 'artist-profile.php?id=' . (int) $artist['id']; ?>
        <article class="artist-row">
            <a href="<?= e($profileUrl) ?>" class="media r-11" aria-label="Open <?= e($artist['name']) ?>'s profile">
                <?= render_image($artist['image'], $artist['name']) ?>
            </a>
            <div>
                <h3><a href="<?= e($profileUrl) ?>"><?= e($artist['name']) ?></a></h3>
                <p>Joined <?= e($artist['joined']) ?></p>
            </div>
            <a class="btn" href="<?= e($profileUrl) ?>">Go to Profile</a>
        </article>
    <?php endforeach; ?>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
