<?php
$title = "Home | Gulf Coast Contracting";
require __DIR__ . '/../partials/header.php';
?>


<section class="hero">
    <div class="hero-content">
        <h1 class="hero-header">Gulf Coast Contracting</h1>
        <p class="hero-description">Free Inspections and Estimates</p>
        <p class="hero-description">Locally Owned and Operated</p>
        <p class="hero-description">Financing Available and 5-Year Labor Warranty</p>
    </div>

    <form class="hero-form" method="POST" action="/contact-submit">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your full name..">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">

        <label for="work_type">Type of Project</label>
        <select id="work_type" name="work_type">
            <option value="commercial roofing services">Commercial Roofing Services</option>
            <option value="residential roofing services">Residental Roofing Services</option>
            <option value="specialized roofing services">Specialized Roofing Services</option>
        </select>


        <button type="submit" value="Submit">Submit</button>
    </form>
</section>



<?php require __DIR__ . '/../partials/footer.php'; ?>