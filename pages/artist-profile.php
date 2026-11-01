<?php
/*
 * Profile - Artists page.   artist-profile.php?id=2  shows artist #2.
 * Not part of the header menu, so no menu item is underlined.
 */
require_once __DIR__ . '/../includes/init.php';

$id     = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$artist = find_by_id($artists, $id);

if (!$artist) {
    http_response_code(404);
}

$pageTitle  = $artist ? $artist['name'] . ' - Profile' : 'Artist not found';
$activePage = '';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>Profile</h1>
</div>

<?php if ($artist): ?>
    <?php
    $works = array_filter($artworks, function ($a) use ($artist) {
        return (int) $a['artist_id'] === (int) $artist['id'];
    });
    ?>
    <section class="profile-head">
        <div class="media r-34"><?= render_image($artist['image'], $artist['name']) ?></div>

        <div class="profile-info">
            <div class="profile-tools">
                <button class="tool-btn" type="button" aria-label="Share">&#8599;</button>
                <button class="tool-btn" type="button" aria-label="More">&#8943;</button>
            </div>
            <h2><?= e($artist['name']) ?></h2>
            <p class="meta">
                Joined <?= e($artist['joined']) ?><br>
                <?= (int) $artist['followers'] ?> followers &bull; <?= (int) $artist['following'] ?> following
            </p>
            <div class="socials">
                <a href="#" class="social-dot" aria-label="Instagram">IG</a>
                <a href="#" class="social-dot" aria-label="TikTok">TT</a>
                <a href="#" class="social-dot" aria-label="Facebook">FB</a>
                <a href="#" class="social-dot" aria-label="X">X</a>
            </div>
            <button class="btn" type="button" data-follow>Follow</button>
        </div>
    </section>

    <section>
        <div class="section-head">
            <div>
                <h2>Artworks</h2>
                <p>Works by <?= e($artist['name']) ?></p>
            </div>
            <a class="view-all" href="gallery.php">View all</a>
        </div>

        <?php if ($works): ?>
            <div class="grid-3">
                <?php foreach ($works as $art): ?>
                    <?php art_card($art); ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-state">No artworks yet.</p>
        <?php endif; ?>
    </section>
<?php else: ?>
    <p class="empty-state">We couldn't find that artist. <a href="artists.php"><u>Back to artists</u></a></p>
<?php endif; ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
