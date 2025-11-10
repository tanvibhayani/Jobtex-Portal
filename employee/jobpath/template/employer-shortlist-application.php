<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location='employer-login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];

// ✅ Fetch shortlisted applications
$query = "
    SELECT 
        ja.*, 
        u.name AS user_name, u.email, u.contact_number,
        j.job_title
    FROM job_applications ja
    JOIN registration u ON ja.user_id = u.id
    JOIN jobs j ON ja.job_id = j.id
    WHERE ja.status = 'Shortlisted' AND j.employer_id = $employer_id
    ORDER BY ja.applied_date DESC
";

$result = mysqli_query($con, $query);
?>

<!-- ✅ Page Content Start -->
<div class="dashboard__content">
    <section class="page-title-dashboard py-4">
        <div class="themes-container">
            <h2 class="mb-3 text-success">Shortlisted Applications</h2>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <div class="table-responsive bg-white rounded shadow-sm p-3">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-success text-dark">
                            <tr>
                                <th>#</th>
                                <th>Candidate</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Job Title</th>
                                <th>Resume</th>
                                <th>Applied Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= htmlspecialchars($row['user_name']) ?></td>
                                    <td><?= htmlspecialchars($row['email']) ?></td>
                                    <td><?= htmlspecialchars($row['contact_number']) ?></td>
                                    <td><?= htmlspecialchars($row['job_title']) ?></td>
                                    <td>
                                        <?php if (!empty($row['resume'])): ?>
                                            <a href="/job/resume/<?= htmlspecialchars($row['resume']) ?>" 
                                               class="btn btn-outline-primary btn-sm" 
                                               target="_blank">View</a>
                                        <?php else: ?>
                                            <span class="text-muted">N/A</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= date('d M Y', strtotime($row['applied_date'])) ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-warning mt-4">No shortlisted applications found.</div>
            <?php endif; ?>
        </div>
    </section>
</div>
<!-- ✅ Page Content End -->

<?php include 'footer1.php'; ?>
