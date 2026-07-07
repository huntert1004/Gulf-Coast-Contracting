<?php require_once __DIR__ . '/../partials/Header.php'; ?>

<main class="auth-page">
    <form class="auth-card" action="/register-submit" method="POST">

        <h1>Create Account</h1>

        <div class="form-group">
            <label for="name">Full Name</label>
            <input
                type="text"
                id="name"
                name="name"
                required
            >
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                required
            >
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input
                type="password"
                id="confirm_password"
                name="confirm_password"
                required
            >
        </div>

        <button type="submit">
            Create Account
        </button>

        <p class="auth-link">
            Already have an account?
            <a href="/login">Sign In</a>
        </p>

    </form>
</main>

<?php require_once __DIR__ . '/../partials/Footer.php'; ?>