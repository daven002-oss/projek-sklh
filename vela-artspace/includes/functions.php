<?php
/*
 * VELA - small helper functions used by every page.
 */

// Safely print text inside HTML.
function e($text): string
{
    return htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8');
}

// Find one item (artwork, artist, event) in an array by its 'id'.
function find_by_id(array $items, $id): ?array
{
    foreach ($items as $item) {
        if ((int) $item['id'] === (int) $id) {
            return $item;
        }
    }
    return null;
}

function artist_name(int $artistId): string
{
    global $artists;
    $artist = find_by_id($artists, $artistId);
    return $artist ? $artist['name'] : 'Unknown artist';
}

// Show a picture if the file exists, otherwise a grey placeholder box.
// $src is relative to the project root, e.g. 'images/artworks/art1.jpg'
function render_image(string $src, string $alt = 'Image'): string
{
    $file = dirname(__DIR__) . '/' . ltrim($src, '/');
    if ($src !== '' && is_file($file)) {
        return '<img src="../' . e(ltrim($src, '/')) . '" alt="' . e($alt) . '">';
    }
    return '<div class="placeholder" role="img" aria-label="' . e($alt) . '"><span>' . e($alt) . '</span></div>';
}

// Card used in the gallery and on artist profiles.
function art_card(array $art): void
{ ?>
    <article class="art-card">
        <a class="art-link" href="artwork-detail.php?id=<?= (int) $art['id'] ?>">
            <div class="media r-43"><?= render_image($art['image'], $art['title']) ?></div>
            <div class="art-meta">
                <strong><?= e($art['title']) ?></strong>
                <span>By <?= e(artist_name((int) $art['artist_id'])) ?></span>
            </div>
        </a>
        <button class="heart" type="button" aria-pressed="false" aria-label="Like <?= e($art['title']) ?>">&#9825;</button>
    </article>
<?php }

// Small card used in the home page scroller.
function mini_card(array $art, bool $hidden = false): void
{ ?>
    <a class="mini-card" href="artwork-detail.php?id=<?= (int) $art['id'] ?>"<?= $hidden ? ' aria-hidden="true" tabindex="-1"' : '' ?>>
        <div class="media r-34"><?= render_image($art['image'], $art['title']) ?></div>
        <strong><?= e($art['title']) ?></strong>
        <span>By <?= e(artist_name((int) $art['artist_id'])) ?></span>
    </a>
<?php }
