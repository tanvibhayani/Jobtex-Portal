<?php
session_start();
include 'connection.php';

$employer_id = $_SESSION['employer_id'] ?? 0;
if (!$employer_id) {
    echo "<script>alert('Please login'); window.location='employer-login.php';</script>";
    exit;
}

$jobs = mysqli_query($con, "SELECT * FROM jobs WHERE employer_id='$employer_id' ORDER BY post_date DESC");

include 'header.php';
?>
<style>
    .card {
    border-radius: 10px;
}

.card-footer a.btn {
    margin-left: 5px;
}

    </style>
<div class="container mt-5 mb-5">
    <h2 class="text-success mt-4 mb-4 py-5">Your Posted Jobs</h2>
    <a href="add-job.php" class="btn btn-success mb-4">+ Post New Job</a>

    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($jobs)) { ?>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border border-success h-100">
                    <img src="../../../images/<?php echo $row['image']; ?>" class="card-img-top p-3" style="height: 180px; object-fit: contain;" alt="Job Image">

                    <div class="card-body">
                        <h4 class="card-title text-success"><?php echo $row['job_title']; ?></h4>
                        <p class="card-text text-muted"><?php echo substr($row['job_description'], 0, 100); ?>...</p>

                        <ul class="list-unstyled text-dark small">
                            <li><strong>Salary:</strong> ₹<?php echo $row['salary_min']; ?> - ₹<?php echo $row['salary_max']; ?></li>
                            <li><strong>Deadline:</strong> <?php echo $row['deadline']; ?></li>
                        </ul>
                    </div>

                    <div class="card-footer bg-white border-top-0 text-end">
                        <a href="edit-job.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                        <a href="delete-job.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this job?');" class="btn btn-outline-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'footer.php'; ?>
