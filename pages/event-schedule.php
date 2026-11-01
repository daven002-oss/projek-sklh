<?php
/*
 * Artspace Events - Schedule page.   event-schedule.php?id=2  shows event #2.
 * Not part of the header menu, so no menu item is underlined.
 */
require_once __DIR__ . '/../includes/init.php';

$id    = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$event = find_by_id($events, $id);

if (!$event) {
    http_response_code(404);
}

$pageTitle  = $event ? $event['title'] . ' - Schedule' : 'Event not found';
$activePage = '';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>Artspace Events - Schedule</h1>
</div>

<?php if ($event): ?>
    <article class="event-row">
        <div class="media r-169"><?= render_image($event['image'], $event['title']) ?></div>
        <div>
            <p class="location"><?= e($event['location']) ?></p>
            <h2><?= e($event['title']) ?></h2>
            <p class="desc"><?= e($event['description']) ?></p>
        </div>
        <button class="btn" type="button">Schedule</button>
    </article>

    <section class="schedule-box">
        <h3>Schedule details</h3>
        <dl>
            <dt>Date</dt>  <dd><?= e($event['date']) ?></dd>
            <dt>Time</dt>  <dd><?= e($event['time']) ?></dd>
            <dt>Venue</dt> <dd><?= e($event['venue']) ?></dd>
        </dl>
        <p class="note">Placeholder box - change the event details in includes/data.php.</p>
    </section>

    <p style="margin-top:20px"><a class="view-all" href="events.php">&larr; Back to all events</a></p>
<?php else: ?>
    <p class="empty-state">We couldn't find that event. <a href="events.php"><u>Back to events</u></a></p>
<?php endif; ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
