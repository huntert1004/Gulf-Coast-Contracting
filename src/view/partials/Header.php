<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Gulf Coast Contracting'; ?></title>
    <link rel="stylesheet" href="/assets/css/Layouts.css">
</head>

<body>

    <div class="top-header-section">
        <p class="nav-text">Located in SWFL</p>
        <p class="nav-text">Call or Text 239-322-4444</p>
    </div>
    <header class="site-nav">

        <nav>
            <ul class="menu">
                <div class="nav-left">
                    <li><a href="/" class="nav-text-animation nav-text" data-foo="Home">Home</a></li>
                    <li><a href="/services" class="nav-text-animation nav-text" data-foo="Services">Services</a></li>
                    <li><a href="/projects" class="nav-text-animation nav-text" data-foo="Projects">Projects</a></li>
                </div>
                <li class="logo-container">
                    <a href="/">
                        <img
                            class="logo"
                            src="/assets/images/logo.png"
                            alt="Gulf Coast Contracting Logo">
                    </a>
                </li>
                <div class="nav-right">
                    <li><a href="/contact" class="nav-text-animation nav-text" data-foo="Contact">Contact</a></li>

                    <?php if (!empty($_SESSION['logged_in'])): ?>
                        <li><a href="/dashboard" class="nav-text-animation nav-text" data-foo="Dashboard">Dashboard</a></li>
                        <li><a href="/logout" class="nav-text-animation nav-text" data-foo="Logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="/login" class="nav-text-animation nav-text" data-foo="Login">Login</a></li>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
    </header>
    <main>