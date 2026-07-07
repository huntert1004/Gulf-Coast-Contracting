<?php require __DIR__ . '/../partials/DashboardHeader.php'; ?>

<section class="dashboard-page">

    <div class="dashboard-page-header">
        <div>
            <p class="dashboard-eyebrow">Lead Inbox</p>
            <h1>Contact Requests</h1>
            <p>
                View every general contact form submission sent through the website.
            </p>
        </div>
    </div>

    <section class="dashboard-table-card">

        <div class="dashboard-table-header">
            <div>
                <h2>All Contact Requests</h2>
                <p>General inquiries submitted from the contact form.</p>
            </div>
        </div>

        <div class="dashboard-table-wrapper">

            <table class="dashboard-table">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Work Type</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($recentContacts as $contact): ?>
                        <tr>
                            <td><?= htmlspecialchars($contact['name']) ?></td>
                            <td><?= htmlspecialchars($contact['email']) ?></td>
                            <td><?= htmlspecialchars($contact['work_type']) ?></td>
                            <td><?= htmlspecialchars($contact['created_at']) ?></td>
                            <td><span class="table-status new">New</span></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </section>

</section>

<?php require __DIR__ . '/../partials/DashboardFooter.php'; ?>