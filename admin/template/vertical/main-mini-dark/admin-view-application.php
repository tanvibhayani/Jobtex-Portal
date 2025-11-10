<?php
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid Application ID'); window.location='admin-manage-applications.php';</script>";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT 
            a.*, 
            j.company_name, j.job_title, j.image, 
            r.name AS candidate_name, r.email AS candidate_email, r.contact_number AS candidate_phone
        FROM job_applications a
        JOIN jobs j ON a.job_id = j.id
        JOIN registration r ON a.user_id = r.id
        WHERE a.id = '$id'";

$result = mysqli_query($conn, $sql);
$application = mysqli_fetch_assoc($result);

if (!$application) {
    echo "<script>alert('Application not found'); window.location='admin-manage-applications.php';</script>";
    exit;
}
?>
<style>
.main-content {
    margin-top: 80px;
    margin-left: 50px;
}
.table th {
    width: 200px;
}
</style>

<div class="main-content p-4">
    <h4 class="mb-4 text-white">Application Details</h4>

    <div class="card bg-dark text-white">
        <div class="card-body">
            <table class="table table-bordered text-white">
                <tr>
                    <th>Job Title</th>
                    <td><?= htmlspecialchars($application['job_title']) ?></td>
                </tr>
                <tr>
                    <th>Company Name</th>
                    <td><?= htmlspecialchars($application['company_name']) ?></td>
                </tr>
                <tr>
                    <th>Candidate Name</th>
                    <td><?= htmlspecialchars($application['candidate_name']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($application['candidate_email']) ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?= htmlspecialchars($application['candidate_phone']) ?></td>
                </tr>
                <tr>
                    <th>Applied Date</th>
                    <td><?= date("d M Y", strtotime($application['applied_date'])) ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?= htmlspecialchars($application['status']) ?></td>
                </tr>
                <tr>
                    <th>Cover Letter</th>
                    <td><?= nl2br(htmlspecialchars($application['cover_letter'])) ?></td>
                </tr>
                <tr>
                    <th>Resume</th>
                    <td>
                        <?php if (!empty($application['resume'])) { ?>
                            <a href="uploads/<?= htmlspecialchars($application['resume']) ?>" download class="btn btn-info btn-sm">Download Resume</a>
                        <?php } else { ?>
                            <span>No Resume Uploaded</span>
                        <?php } ?>
                    </td>
                </tr>
            </table>
            <a href="admin-manage-applications.php" class="btn btn-light mt-2">Back</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
