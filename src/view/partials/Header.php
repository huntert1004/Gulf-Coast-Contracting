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
                    <li><a href="/" class="nav-text">Home</a></li>
                    <li class="nav-item has-dropdown">
                        <a href="/services" class="nav-text">Services</a>

                        <ul class="dropdown-menu">
                            <li><a href="/services/construction">Construction</a></li>
                            <li><a href="/services/home-improvement">Home Improvement</a></li>
                            <li><a href="/services/outdoor-living">Outdoor Living</a></li>
                            <li><a href="/services/specialty">Specialty</a></li>
                            <li><a href="/services/solar">Solar Power</a></li>
                        </ul>
                    </li>
                    <li><a href="/projects" class="nav-text">Projects</a></li>
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
                    <li><a href="/contact" class="nav-text">Contact</a></li>

                    <?php if (!empty($_SESSION['logged_in'])): ?>
                        <li><a href="/dashboard" class="nav-text">Dashboard</a></li>
                        <li><a href="/logout" class="nav-text">Logout</a></li>
                    <?php else: ?>
                        <li><a href="/login" class="nav-text">Login</a></li>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
    </header>
    <main>