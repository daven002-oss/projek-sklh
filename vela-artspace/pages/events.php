<?php
require_once __DIR__ . '/../includes/init.php';
$pageTitle  = 'Artspace Events';
$activePage = 'events';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>Artspace Events</h1>
</div>

<section>
    <?php foreach ($events as $event): ?>
        <article class="event-row">
            <div class="media r-169"><?= render_image($event['image'], $event['title']) ?></div>
            <div>
                <p class="location"><?= e($event['location']) ?></p>
                <h2><?= e($event['title']) ?></h2>
                <p class="desc"><?= e($event['description']) ?></p>
            </div>
            <a class="btn" href="event-schedule.php?id=<?= (int) $event['id'] ?>">Schedule</a>
        </article>
    <?php endforeach; ?>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
