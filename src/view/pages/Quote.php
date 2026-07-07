<?php require __DIR__ . '/../partials/Header.php'; ?>

<!-- Page Banner -->
<section class="mini-hero-container">

    <div class="hero-image"></div>

    <div class="mini-hero-content">

        <h1>Contact Us</h1>

        <div class="hero-breadcrumbs__content">
            <a href="/">Home</a>

            <span class="hero-breadcrumb-separator">/</span>

            <span class="hero-current">Contact</span>
        </div>

    </div>

</section>

<!-- Get IN Touch Text section -->
<section class="get-in-touch">

    <h1>Get In Touch</h1>

    <h3>
        Contact us with confidence. You're in the best hands!
    </h3>

    <div class="in-touch-content">

        <div class="contact-item">
            <i class="fa-solid fa-phone"></i>
            <p>239-322-XXXX</p>
        </div>

        <div class="contact-item">
            <i class="fa-solid fa-envelope"></i>
            <p>test@test.com</p>
        </div>

        <div class="contact-item">
            <i class="fa-solid fa-location-dot"></i>
            <p>1234 Wonderland Drive<br>Cape Coral, FL</p>
        </div>

        <div class="contact-item">
            <i class="fa-solid fa-clock"></i>
            <p>Monday – Friday<br>8:00 AM – 5:00 PM</p>
        </div>

    </div>

</section>

<!-- Quote Form -->
<section class="quote-form">
    <form class="quote-page-form" method="POST" action="/quote-submit">
        <h2>Get Free Estimate Today</h2>

        <div class="user-box">
            <input type="text" id="name" name="name" required>
            <label for="name">Name</label>
        </div>

        <div class="user-box">
            <input type="email" id="email" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="user-box">
            <input type="tel" id="phone" name="phone" required>
            <label for="phone">Phone</label>
        </div>
        <div class="user-box">
            <input type="text" id="address" name="address" required>
            <label for="address">Address</label>
        </div>
        <div class="user-box">
            <input type="text" id="city" name="city" required>
            <label for="city">City</label>
        </div>
        <div class="user-box">
            <input type="text" id="zip" name="zip" required>
            <label for="zip">Zip Code</label>
        </div>



        <div class="user-box work-type-box">
            <label class="work-type-label">Services Needed</label>

            <button type="button" class="work-type-toggle">
                <span class="work-type-toggle-text">Select services</span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="work-type-dropdown">
                <input
                    type="text"
                    class="work-type-search"
                    placeholder="Search services...">

                <div class="work-type-options">
                    <label><input type="checkbox" name="services[]" value="Kitchen Remodeling"> Kitchen Remodeling</label>
                    <label><input type="checkbox" name="services[]" value="Bathroom Remodeling"> Bathroom Remodeling</label>
                    <label><input type="checkbox" name="services[]" value="Home Renovation"> Home Renovation</label>
                    <label><input type="checkbox" name="services[]" value="New Home Construction"> New Home Construction</label>
                    <label><input type="checkbox" name="services[]" value="Net Zero Home Builds"> Net Zero Home Builds</label>

                    <label><input type="checkbox" name="services[]" value="Cabinet Installation & Replacement"> Cabinet Installation & Replacement</label>
                    <label><input type="checkbox" name="services[]" value="Interior and Exterior Painting"> Interior and Exterior Painting</label>
                    <label><input type="checkbox" name="services[]" value="Drywall Repair"> Drywall Repair</label>
                    <label><input type="checkbox" name="services[]" value="Flooring Replacement"> Flooring Replacement</label>
                    <label><input type="checkbox" name="services[]" value="Tile Installation"> Tile Installation</label>
                    <label><input type="checkbox" name="services[]" value="Lighting & Electrical"> Lighting & Electrical</label>
                    <label><input type="checkbox" name="services[]" value="Shower Replacement"> Shower Replacement</label>

                    <label><input type="checkbox" name="services[]" value="Screen Enclosure"> Screen Enclosure</label>
                    <label><input type="checkbox" name="services[]" value="Pool Cage"> Pool Cage</label>
                    <label><input type="checkbox" name="services[]" value="Lanai Extension"> Lanai Extension</label>
                    <label><input type="checkbox" name="services[]" value="Outdoor Kitchen"> Outdoor Kitchen</label>
                    <label><input type="checkbox" name="services[]" value="Carport"> Carport</label>

                    <label><input type="checkbox" name="services[]" value="Custom Carpentry & Trim Work"> Custom Carpentry & Trim Work</label>
                    <label><input type="checkbox" name="services[]" value="Storm Preparation"> Storm Preparation</label>
                    <label><input type="checkbox" name="services[]" value="Smart Home Installation"> Smart Home Installation</label>
                    <label><input type="checkbox" name="services[]" value="Custom Storage Solutions"> Custom Storage Solutions</label>
                    <label><input type="checkbox" name="services[]" value="Fence"> Fence</label>
                    <label><input type="checkbox" name="services[]" value="Gate"> Gate</label>
                    <label><input type="checkbox" name="services[]" value="Plumbing"> Plumbing</label>

                    <label><input type="checkbox" name="services[]" value="Solar Panel"> Solar Panel</label>
                    <label><input type="checkbox" name="services[]" value="Solar Power System"> Solar Power System</label>
                    <label><input type="checkbox" name="services[]" value="Battery"> Battery</label>
                    <label><input type="checkbox" name="services[]" value="EV Tesla Charging"> EV Tesla Charging</label>
                </div>
            </div>
        </div>

        <div class="user-box message-box">
            <label class="message-label" for="message">
                Message <span>(Optional)</span>
            </label>

            <textarea
                id="message"
                name="message"
                placeholder="Tell us about your project..."></textarea>
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