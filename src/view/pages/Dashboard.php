<?php require __DIR__ . '/../partials/DashboardHeader.php'; ?>

<section class="dashboard-page">
    <!-- Main Dashboard Header -->
    <div class="dashboard-page-header">
        <div>
            <p class="dashboard-eyebrow">Lead Center</p>
            <h1>Dashboard</h1>
            <p>
                Track new quote requests and contact form submissions in one place.
            </p>
        </div>
    </div>
    <!-- Lead Summary Section -->

    <section class="lead-summary-grid" aria-label="Lead summary">

        <article class="lead-summary-card">

            <div class="lead-summary-icon">
                <i class="fa-solid fa-file-signature"></i>
            </div>

            <div class="lead-summary-content">
                <span>Total Quote Requests</span>

                <strong>
                    <?= $totalQuotes ?>
                </strong>

                <p>Requests submitted from the quote form.</p>
            </div>

        </article>

        <article class="lead-summary-card">

            <div class="lead-summary-icon">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>

            <div class="lead-summary-content">
                <span>Total Contact Requests</span>

                <strong>
                    <?= $totalContacts ?>
                </strong>

                <p>General messages from the contact form.</p>
            </div>

        </article>

        <article class="lead-summary-card">

            <div class="lead-summary-icon">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div class="lead-summary-content">
                <span>New Leads This Week</span>

                <strong>
                    <?= $weeklyLeads ?>
                </strong>

                <p>Fresh leads that may need follow-up.</p>
            </div>

        </article>

        <article class="lead-summary-card">

            <div class="lead-summary-icon">
                <i class="fa-solid fa-chart-simple"></i>
            </div>

            <div class="lead-summary-content">
                <span>Top Requested Service</span>

                <strong>
                    <?= htmlspecialchars($topService) ?>
                </strong>

                <p>Most common selected service.</p>
            </div>

        </article>

    </section>


    <!-- Recent Quotes Section -->
    <section class="recent-quotes">

        <div class="section-header">

            <div>
                <p class="section-eyebrow">Lead Management</p>
                <h2>Recent Quote Requests</h2>
            </div>

            <a href="#" class="view-all-btn">
                View All
            </a>

        </div>

        <div class="quote-list">

            <?php foreach ($recentQuotes as $quote): ?>
                <?php $services = json_decode($quote['services'], true) ?? []; ?>

                <article class="quote-card">
                    <div class="quote-main">
                        <div class="quote-avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="quote-info">
                            <div class="quote-top">
                                <h3><?= htmlspecialchars($quote['name']) ?></h3>

                                <span class="quote-date">
                                    <?= date('M j, Y', strtotime($quote['created_at'])) ?>
                                </span>
                            </div>

                            <p class="quote-services">
                                <?= htmlspecialchars(implode(' • ', $services)) ?>
                            </p>

                            <p class="quote-location">
                                <?= htmlspecialchars($quote['city']) ?>, Florida
                            </p>
                        </div>
                    </div>

                    <div class="quote-actions">
                        <span class="quote-status new">New</span>

                        <a href="tel:<?= htmlspecialchars($quote['phone']) ?>">
                            <i class="fa-solid fa-phone"></i>
                        </a>

                        <a href="mailto:<?= htmlspecialchars($quote['email']) ?>">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>



        </div>

    </section>






    <!-- Recent Contact Section -->

    <section class="recent-contacts">

        <div class="section-header">

            <div>
                <p class="section-eyebrow">General Inquiries</p>
                <h2>Recent Contact Requests</h2>
            </div>

            <a href="#" class="view-all-btn">
                View All
            </a>

        </div>

        <div class="contact-request-list">

            <?php foreach ($recentContacts as $contact): ?>

                <article class="contact-request-card">
                    <div class="contact-request-main">
                        <div class="contact-request-icon">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>

                        <div class="contact-request-info">
                            <div class="contact-request-top">
                                <h3><?= htmlspecialchars($contact['name']) ?></h3>

                                <span class="contact-request-date">
                                    <?= date('M j, Y', strtotime($contact['created_at'])) ?>
                                </span>
                            </div>

                            <p class="contact-request-type">
                                <?= htmlspecialchars($contact['work_type']) ?>
                            </p>

                            <p class="contact-request-email">
                                <?= htmlspecialchars($contact['email']) ?>
                            </p>
                        </div>
                    </div>

                    <div class="contact-request-actions">
                        <span class="contact-request-status unread">Unread</span>

                        <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" aria-label="Email contact">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </article>

            <?php endforeach; ?>

        </div>

    </section>

</section>

<?php require __DIR__ . '/../partials/DashboardFooter.php'; ?>