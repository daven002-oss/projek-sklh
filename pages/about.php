<?php
/*
 * About Us page (opened from the footer). Not part of the header menu,
 * so no menu item is underlined.
 */
require_once __DIR__ . '/../includes/init.php';
$pageTitle  = 'About Us';
$activePage = '';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-title">
    <h1>About Us</h1>
</div>

<section class="text-block">
    <h2>Who we are</h2>
    <p>Placeholder text. Write about VELA Art Space here: what it is, who runs it, and what you want visitors to know.</p>
</section>

<section class="text-block" id="contact">
    <h2>Contact Us</h2>
    <p>Placeholder text. Add your email address, phone number and location here.</p>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
