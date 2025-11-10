<?php
session_start();
include 'connection.php';

$job_id = $_GET['id'] ?? 0;

if (!$job_id) {
    echo "<script>alert('Invalid Job ID'); window.location='job-list.php';</script>";
    exit;
}

// Get job details
$job_sql = "SELECT * FROM jobs WHERE id = '$job_id'";
$job_result = mysqli_query($con, $job_sql);
$job = mysqli_fetch_assoc($job_result);

if (!$job) {
    echo "<script>alert('Job not found'); window.location='job-list.php';</script>";
    exit;
}

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Details - <?= htmlspecialchars($job['job_title']) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .card.job-detail {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
            border: none;
        }

        .card-header {
            background-color: #f1f3f5;
            border-bottom: 1px solid #dee2e6;
        }

        .card-body p {
            margin-bottom: 10px;
        }

        .apply-btn-detail {
            background-color: #28a745;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .apply-btn-detail:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card job-detail">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="mb-2 py-5 mt-5"><?= htmlspecialchars($job['job_title']) ?></h2>
            <span class="badge bg-success fs-4"><?= htmlspecialchars($job['company_name']) ?></span>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong><br><?= nl2br(htmlspecialchars($job['job_description'])) ?></p>
            <p><strong>Schedule:</strong> <?= htmlspecialchars($job['working_schedule']) ?></p>
            <p><strong>Working Days:</strong> <?= htmlspecialchars($job['working_day']) ?></p>
            <p><strong>Salary:</strong>
                ₹<?= number_format($job['salary_min']) ?> - ₹<?= number_format($job['salary_max']) ?> 
                (<?= htmlspecialchars($job['salary_type']) ?>)
            </p>
            <p><strong>Payment Type:</strong> <?= htmlspecialchars($job['payment_type']) ?></p>
            <p><strong>Qualification:</strong> <?= htmlspecialchars($job['qualification']) ?></p>
            <p><strong>Experience Required:</strong> <?= htmlspecialchars($job['experience']) ?> years</p>
            <p><strong>Location:</strong> <?= htmlspecialchars($job['state']) ?>, <?= htmlspecialchars($job['country']) ?></p>
            <p><strong>Deadline:</strong> <?= htmlspecialchars($job['deadline']) ?></p>

            <?php if (!empty($job['video_url'])): ?>
                <p><strong>Video:</strong><br>
                    <iframe width="100%" height="315" src="<?= htmlspecialchars($job['video_url']) ?>" frameborder="0" allowfullscreen></iframe>
                </p>
            <?php endif; ?>
        </div>
        <div class="card-footer text-end bg-white border-top-0">
            <form action="apply_job.php" method="POST">
                <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                <button type="submit" name="apply_job" class="apply-btn-detail">Apply Now</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php include 'footer.php'; ?>
