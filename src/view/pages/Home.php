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
                    <option value="construction">New Construction</option>
                    <option value="home improvement">Home Improvement</option>
                    <option value="outdoor living">Outdoor Living</option>
                    <option value="specialty services">Specialty Services</option>
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
        <h3>Building Without the Stress</h3>

        <h1>
            Your Project Shouldn't Feel Like a Gamble
        </h1>

        <p>
            Too many homeowners deal with missed deadlines, unexpected costs, poor communication,
            and unfinished work. We believe every project should be organized, transparent,
            and built with quality craftsmanship. From the initial estimate through the final
            walkthrough, you'll always know what's happening and what comes next.
        </p>
    </div>
    <div class="right-image">
        <img class="fails-image" src="/assets/images/roof-stock.png" alt="Roofing contractor inspecting a roof">
    </div>
</section>


<!-- What we OFFER sECTION -->
<section class="offer-section">

    <div class="offer-wrapper">

        <h1>What We Offer</h1>

        <p>
            From full construction projects to home renovations and outdoor living spaces,
            Gulf Coast Contracting delivers quality craftsmanship built to last.
        </p>

        <div class="offer-grid">

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/kitch-stock.jpg"
                    alt="Construction">

                <h2>Construction</h2>

                <p>
                    New construction, additions, structural work, and complete building
                    projects completed with quality craftsmanship and attention to detail.
                </p>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/home-stock.jpg"
                    alt="Home Improvement">

                <h2>Home Improvement</h2>

                <p>
                    Kitchen remodels, bathroom renovations, flooring, painting, drywall,
                    and upgrades that improve comfort and increase home value.
                </p>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/porch-stock.jpg"
                    alt="Outdoor Living">

                <h2>Outdoor Living</h2>

                <p>
                    Patios, pergolas, outdoor kitchens, screened lanais, and custom spaces
                    designed for enjoying Southwest Florida living.
                </p>
            </div>

            <div class="offer-card">
                <img class="offer-image"
                    src="/assets/images/kitchen-stock.jpg"
                    alt="Specialty Services">

                <h2>Specialty Services</h2>

                <p>
                    Custom projects, repairs, unique installations, and specialty work
                    tailored to meet the needs of every property.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- 5 Step Process -->
<section class="five-step">

    <h3>OUR PROCESS</h3>

    <h1>Five Steps. Every Project. No Shortcuts.</h1>

    <p>
        Whether you're building something new or transforming an existing space,
        every project follows a proven process designed to deliver quality craftsmanship
        from start to finish.
    </p>

    <div class="step-card">
        <div class="step-num">1</div>

        <p>Consultation & Planning</p>

        <p>
            Every successful project begins with understanding your goals. We discuss
            your vision, evaluate the project site, establish a realistic budget, and
            develop a plan tailored to your needs.
        </p>
    </div>

    <div class="step-card">
        <div class="step-num">2</div>

        <p>Design & Preparation</p>

        <p>
            We finalize layouts, materials, permits, and project scheduling before
            construction begins. Proper preparation helps avoid delays and keeps your
            project moving efficiently.
        </p>
    </div>

    <div class="step-card">
        <div class="step-num">3</div>

        <p>Construction & Renovation</p>

        <p>
            Our team completes each phase with attention to detail, quality materials,
            and skilled craftsmanship while maintaining a clean and organized job site
            throughout the project.
        </p>
    </div>

    <div class="step-card">
        <div class="step-num">4</div>

        <p>Quality Assurance</p>

        <p>
            Every detail is inspected throughout construction to ensure workmanship
            meets our standards. Any adjustments are addressed before the project
            reaches completion.
        </p>
    </div>

    <div class="step-card">
        <div class="step-num">5</div>

        <p>Final Walkthrough & Completion</p>

        <p>
            We walk through the finished project with you, answer any questions, and
            ensure every detail meets your expectations before considering the job
            complete.
        </p>
    </div>

</section>

<section class="faq-section">

    <h3>Your Questions, Answered</h3>

    <h2>
        Everything You Should Know Before Starting Your Next Project
    </h2>

    <div class="faq-card">
        <div class="plus"></div>

        <p>Do you provide free estimates?</p>

        <p>
            Yes. Every project starts with a free consultation where we discuss
            your goals, evaluate the project, and provide a detailed estimate
            so you know exactly what to expect before any work begins.
        </p>
    </div>

    <div class="faq-card">
        <div class="plus"></div>

        <p>Can you help with both renovations and new construction?</p>

        <p>
            Absolutely. Whether you're remodeling a kitchen, adding living
            space, building an outdoor entertainment area, or starting a new
            construction project, our team can guide you through every stage
            from planning to completion.
        </p>
    </div>

    <div class="faq-card">
        <div class="plus"></div>

        <p>How long will my project take?</p>

        <p>
            Every project is different depending on its size and complexity.
            Before work begins, we provide a realistic timeline and keep you
            informed throughout construction so there are no surprises.
        </p>
    </div>

    <div class="faq-card">
        <div class="plus"></div>

        <p>Will I know what's happening during construction?</p>

        <p>
            Yes. Clear communication is one of our highest priorities. We keep
            you updated on project progress, scheduling, material deliveries,
            and any changes so you're never left wondering what's next.
        </p>
    </div>

    <div class="faq-card">
        <div class="plus"></div>

        <p>Are you licensed and insured?</p>

        <p>
            We believe every homeowner deserves peace of mind. Our team follows
            professional building practices while maintaining the licensing and
            insurance required to complete projects safely and responsibly.
        </p>
    </div>

    <div class="faq-card">
        <div class="plus"></div>

        <p>How do you ensure quality workmanship?</p>

        <p>
            Every project follows a structured process that includes careful
            planning, skilled craftsmanship, ongoing quality checks, and a
            final walkthrough to make sure every detail meets our standards
            before the job is complete.
        </p>
    </div>

</section>







<?php require __DIR__ . '/../partials/Footer.php'; ?>