<?php
$title = "Home | Gulf Coast Contracting";
require __DIR__ . '/../partials/Header.php';
?>


<section class="hero">
    <div class="hero-content">
        <h1 class="hero-header">Gulf Coast Contracting</h1>
        <p class="hero-description">Free Inspections and Estimates</p>
        <p class="hero-description">Locally Owned and Operated</p>
        <p class="hero-description">Financing Available and 5-Year Labor Warranty</p>
    </div>

    <form class="hero-form" method="POST" action="/contact-submit">
        <h2>Contact Us Today</h2>

        <div class="user-box">
            <input type="text" id="name" name="name" required>
            <label for="name">Name</label>
        </div>

        <div class="user-box">
            <input type="email" id="email" name="email" required>
            <label for="email">Email</label>
        </div>

        <div class="user-box">
            <select id="work_type" name="work_type" required>
                <option value="" disabled selected></option>
                <option value="commercial roofing services">Commercial Roofing Services</option>
                <option value="residential roofing services">Residential Roofing Services</option>
                <option value="specialized roofing services">Specialized Roofing Services</option>
            </select>
            <label for="work_type">Service Needed</label>
        </div>

        <button class="quote-submit-btn" type="submit">
            <span class="btn-text">
                Get Free Estimate
            </span>

            <i class="btn-icon fa-solid fa-spinner"></i>
        </button>



    </form>
</section>



<?php require __DIR__ . '/../partials/Footer.php'; ?>