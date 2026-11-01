<?php
require_once __DIR__ . '/../includes/init.php';
$pageTitle  = 'Home';
$activePage = 'home';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>Home</h1>
    <p>Welcome back</p>
</div>

<!-- Big picture: changes automatically. Timing is $heroSlideInterval in includes/config.php -->
<section class="hero-slider" data-interval="<?= (int) $heroSlideInterval ?>" aria-label="Featured">
    <div class="slides">
        <?php foreach ($heroSlides as $i => $slide): ?>
            <div class="slide<?= $i === 0 ? ' active' : '' ?>">
                <?= render_image($slide['image'], $slide['alt']) ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="dots">
        <?php foreach ($heroSlides as $i => $slide): ?>
            <button class="dot<?= $i === 0 ? ' active' : '' ?>" type="button" aria-label="Show slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
    </div>
</section>

<!-- Small pictures: scroll sideways forever. Speed is $marqueeSeconds in includes/config.php -->
<section class="curated">
    <div class="section-head">
        <div>
            <h2>Curated Selection</h2>
            <p>Hand-picked artworks from our artists</p>
        </div>
        <a class="view-all" href="gallery.php">View all &#8964;</a>
    </div>

    <div class="marquee" style="--marquee-duration: <?= (int) $marqueeSeconds ?>s">
        <div class="marquee-track">
            <?php for ($copy = 0; $copy < 4; $copy++): ?>
                <?php foreach ($artworks as $art): ?>
                    <?php mini_card($art, $copy > 0); ?>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
