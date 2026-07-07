<?php require __DIR__ . '/../partials/DashboardHeader.php'; ?>

<section class="dashboard-page">

    <div class="dashboard-page-header">
        <div>
            <p class="dashboard-eyebrow">Lead Inbox</p>

            <h1>Quote Requests</h1>

            <p>
                View every quote request submitted through the website and quickly
                identify new sales opportunities.
            </p>
        </div>
    </div>

    <section class="dashboard-table-card">

        <div class="dashboard-table-header">
            <div>
                <h2>All Quote Requests</h2>
                <p>Estimate requests submitted from the online quote form.</p>
            </div>
        </div>

        <div class="dashboard-table-wrapper">

            <table class="dashboard-table">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Services</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($recentQuotes as $quote): ?>

                        <tr>

                            <td><?= htmlspecialchars($quote['name']) ?></td>

                            <td>
                                <?= htmlspecialchars($quote['city']) ?>
                            </td>

                            <td>
                                <div class="service-badges">

                                    <?php foreach (json_decode($quote['services'], true) as $service): ?>

                                        <span class="service-badge">
                                            <?= htmlspecialchars($service) ?>
                                        </span>

                                    <?php endforeach; ?>

                                </div>
                            </td>

                            <td><?= htmlspecialchars($quote['phone']) ?></td>

                            <td><?= htmlspecialchars($quote['email']) ?></td>

                            <td>
                                <?= date('M j, Y', strtotime($quote['created_at'])) ?>
                            </td>

                            <td>
                                <span class="table-status new">
                                    New
                                </span>
                            </td>

                        </tr>

                    <?php endforeach; ?>


                </tbody>

            </table>

        </div>

    </section>

</section>

<?php require __DIR__ . '/../partials/DashboardFooter.php'; ?>