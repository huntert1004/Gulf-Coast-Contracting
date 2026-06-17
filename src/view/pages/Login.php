<?php require_once __DIR__ . '/../partials/Header.php'; ?>

<main class="auth-page">
    <form class="auth-card" action="/login-submit" method="POST">
        <h1>Login</h1>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="username" id="username">
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

        <button type="submit">Sign In</button>

        <p class="auth-link">
            Don't have an account?
            <a href="/register">Register</a>
        </p>
    </form>
</main>

<?php require_once __DIR__ . '/../partials/Footer.php'; ?>