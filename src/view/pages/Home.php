<?php
$title = "Home | Gulf Coast Contracting";
require __DIR__ . '/../partials/Header.php';
?>


<section>
    <div class="hero">
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
    </div>
</section>


<section class="fails-early">
    <div class="left-text">
        <h3>Why Roofs Fail Early</h3>
        <h1>Most Roof Problems Start With What You Can’t See</h1>
        <p>Leaks, insurance issues, and early replacements often come from small installation details: flashing, fasteners, ventilation, underlayment, and cleanup. Rectangle Roofing follows a documented process on every Naples roof so those details are checked before they become expensive problems.</p>
    </div>
    <div class="right-image">
        <img class="fails-image" src="/assets/images/roof-stock.png" alt="Roofing contractor inspecting a roof">
    </div>
</section>


<!-- What we OFFER sECTION -->
<section class="offer-section">

    <div class="offer-wrapper">

        <h1>What We Offer</h1>

        <div class="offer-grid">

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/rrs.png"
                    alt="Residential Roofing">

                <h2>Residential Roofing</h2>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/srs.webp"
                    alt="Specialized Roofing">

                <h2>Specialized Roofing</h2>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/crs.png"
                    alt="Commercial Roofing">

                <h2>Commercial Roofing</h2>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/repairs.webp"
                    alt="Roof Repairs">

                <h2>Roof Repair Services</h2>
            </div>

        </div>

    </div>

</section>







<?php require __DIR__ . '/../partials/Footer.php'; ?>