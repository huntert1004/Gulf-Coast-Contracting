<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Gulf Coast Contracting'; ?></title>
    <link rel="stylesheet" href="/assets/css/Main.css">
</head>

<div class="wrapper">

    <aside class="sidebar">

        <div class="sidebar-header">
            <a href='/'>
                <img src="/assets/images/logo.png" alt="Gulf Coast Contracting"></a>
        </div>

        <nav class="sidebar-nav">

            <a href="/dashboard" class="sidebar-link">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </a>

            <a href="/dashboard/quotes" class="sidebar-link">
                <i class="fa-solid fa-file-signature"></i>
                <span>Quote Requests</span>
            </a>

            <a href="/dashboard/contacts" class="sidebar-link">
                <i class="fa-solid fa-envelope-open-text"></i>
                <span>Contact Requests</span>
            </a>

        </nav>

        <div class="sidebar-footer">

            <a href="/logout" class="sidebar-link logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>

        </div>
    </aside>
    <main>