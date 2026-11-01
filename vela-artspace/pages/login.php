<?php
/*
 * Login page. Not part of the header menu, so no menu item is underlined.
 * There is no database yet, so submitting the form only shows a notice.
 */
require_once __DIR__ . '/../includes/init.php';

$notice = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notice = 'Login is not connected to a database yet.';
}

$pageTitle  = 'Login';
$activePage = '';
require __DIR__ . '/../includes/header.php';
?>

<section class="login-wrap">
    <h1>Artspace<br>Welcome Back</h1>
    <p class="sub">Sign in to your account</p>

    <?php if ($notice): ?>
        <p class="notice"><?= e($notice) ?></p>
    <?php endif; ?>

    <form method="post" action="login.php">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <div class="login-extras">
            <label style="margin:0;font-weight:400"><input type="checkbox" name="remember"> Remember me</label>
            <a href="#">Forgot password?</a>
        </div>

        <button class="btn" type="submit">Login</button>
        <p class="signup">Don't have an account? <a href="#">Sign up</a></p>
    </form>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
