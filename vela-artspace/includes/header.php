<?php
/*
 * Shared header - used by every page.
 *
 * Each page sets these before including this file:
 *   $pageTitle  - text for the browser tab
 *   $activePage - which menu item gets the underline:
 *                 'home', 'gallery', 'artists', 'artwork', 'events'
 *                 Leave it '' (or unset) for pages that are not in the menu
 *                 (login, about, artist profile, event schedule).
 */
require_once __DIR__ . '/init.php';

$activePage = $activePage ?? '';
$pageTitle  = $pageTitle ?? 'Home';

$nav = [
    'home'    => ['Home',            'home.php'],
    'gallery' => ['Gallery',         'gallery.php'],
    'artists' => ['Artists',         'artists.php'],
    'artwork' => ['Artwork Detail',  'artwork-detail.php'],
    'events'  => ['Artspace Events', 'events.php'],
];

$logoFile = dirname(__DIR__) . '/' . $logoImage;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?> | <?= e($siteName) ?> Art Space</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="site-header">
    <div class="header-inner">
        <a class="logo" href="home.php" aria-label="<?= e($siteName) ?> - go to home">
            <?php if (is_file($logoFile)): ?>
                <img src="../<?= e($logoImage) ?>" alt="<?= e($siteName) ?> logo">
            <?php else: ?>
                <span class="logo-placeholder">LOGO</span>
            <?php endif; ?>
        </a>

        <nav class="site-nav" aria-label="Main">
            <?php foreach ($nav as $key => [$label, $href]): ?>
                <a href="<?= e($href) ?>"<?= $activePage === $key ? ' class="active" aria-current="page"' : '' ?>><?= e($label) ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="header-actions">
            <button class="icon-btn" type="button" aria-label="Search">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="16.5" y1="16.5" x2="21" y2="21"/></svg>
            </button>
            <a class="btn-outline" href="login.php">Login</a>
        </div>
    </div>
</header>

<main>
