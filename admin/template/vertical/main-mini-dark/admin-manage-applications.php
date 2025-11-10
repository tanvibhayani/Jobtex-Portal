<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

// Check admin login
if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login first.'); window.location='auth_login_dark.php';</script>";
    exit;
}

// Fetch job applications with candidate and job info
$sql = "SELECT 
            ja.id AS application_id,
            r.name AS candidate_name,
            r.email,
            j.job_title,
            j.company_name,
            ja.resume,
            ja.cover_letter,
            ja.status,
            ja.applied_date
        FROM job_applications ja
        JOIN registration r ON ja.user_id = r.id
        JOIN jobs j ON ja.job_id = j.id
        ORDER BY ja.id DESC";

$result = mysqli_query($conn, $sql);
?>
<style>
    .main-content {
        margin-top: 80px;
        margin-left: 50px;
    }
</style>

<div class="main-content p-4">
    <h4 class="mb-4 text-white">Manage Job Applications</h4>

    <div class="card bg-dark text-white">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-white align-middle">
                    <thead class="table-light text-dark">
                        <tr>
                            <th>#</th>
                            <th>Candidate Name</th>
                            <th>Email</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Resume</th>
                            <th>Status</th>
                            <th>Applied Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result && mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= htmlspecialchars($row['candidate_name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['job_title']) ?></td>
                            <td><?= htmlspecialchars($row['company_name']) ?></td>
                            <td>
                                <?php if (!empty($row['resume'])) { ?>
                                    <a href="../../../../resume/<?= htmlspecialchars($row['resume']) ?>" download class="btn btn-info btn-sm">Download</a>
                                <?php } else { echo "No Resume"; } ?>
                            </td>
                            <td>
                                <?php
                                $status = strtolower($row['status']);
                                $badge = "secondary";
                                if ($status == 'shortlisted') $badge = "success";
                                else if ($status == 'rejected') $badge = "danger";
                                else if ($status == 'pending') $badge = "warning";
                                ?>
                                <span class="badge bg-<?= $badge ?>"><?= ucfirst($row['status']) ?></span>
                            </td>
                            <td><?= date("d M Y", strtotime($row['applied_date'])) ?></td>
                            <td>
                                <a href="admin-view-application.php?id=<?= $row['application_id'] ?>" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center'>No applications found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
