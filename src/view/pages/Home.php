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

<!-- Failer Early Section -->
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
        <p>Comprehensive roofing services designed to maximize protection, durability, and long-term value for residential and commercial properties.</p>

        <div class="offer-grid">

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/rrs.png"
                    alt="Residential Roofing">

                <h2>Residential Roofing</h2>
                <p>Complete roof replacements, inspections, and repairs designed to protect your home through Florida heat, rain, and storms.</p>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/srs.webp"
                    alt="Specialized Roofing">

                <h2>Specialized Roofing</h2>
                <p>Metal, tile, flat roof, and custom roofing solutions installed with the right materials and details for each property.</p>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/crs.png"
                    alt="Commercial Roofing">

                <h2>Commercial Roofing</h2>
                <p>Durable roofing systems for offices, retail spaces, warehouses, and commercial properties that need long-term protection.</p>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/repairs.webp"
                    alt="Roof Repairs">

                <h2>Roof Repair Services</h2>
                <p>Fast repair services for leaks, storm damage, missing shingles, flashing issues, and small problems before they become expensive.</p>
            </div>

        </div>

    </div>

</section>

<!-- 5 Step section -->
<section class="five-step">
    <h3>WHAT HAPPENS ON YOUR ROOF</h3>
    <h1>Five Steps. Every Roof. No Shortcuts.</h1>
    <p>Here's exactly what we do, and why each step matters for your home.</p>
    <div class="step-card">
        <div class="step-num">1</div>
        <p>Measure & Plan</p>
        <p>We map your roof down to the square foot before writing a single number. Slope, facets, penetrations, your estimate reflects your actual roof, not a guess from the driveway.</p>
    </div>
    <div class="step-card">
        <div class="step-num">2</div>
        <p>Inspect the Deck</p>
        <p>Before anything goes on top, we check what's underneath. Damaged plywood gets replaced. Proper underlayment and waterproofing go down to protect against Florida rain.</p>
    </div>

    <div class="step-card">
        <div class="step-num">3</div>
        <p>‍Seal Every Penetration</p>
        <p>Pipe boots, vents, flashing around walls and edges, these are where most leaks actually start. We seal each one correctly the first time.</p>
    </div>

    <div class="step-card">
        <div class="step-num">4</div>
        <p>Install to Manufacturer Specs</p>
        <p>Every shingle, tile, or panel is installed using the manufacturer's approved methods. That's what qualifies your roof for full warranty coverage, not just having the right material, but installing it correctly.</p>
    </div>
    <div class="step-card">
        <div class="step-num">5</div>
        <p>Final Inspection & Documentation</p>
        <p>We photograph every critical step and walk through a multi-point checklist. You'll see exactly what was done, not just trust that it was.</p>
    </div>

</section>







<?php require __DIR__ . '/../partials/Footer.php'; ?>