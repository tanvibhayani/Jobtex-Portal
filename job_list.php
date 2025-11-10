<?php
if(session_status()===PHP_SESSION_NONE)
{
session_start();
}

include 'header.php';

$role = $_SESSION['role'] ?? null;
$job_id = 101; // Example job ID
?>

<h2>Job: Web Developer</h2>
<p>Company: XYZ Pvt Ltd</p>
<p>Location: Remote</p>
<p>Description: Build modern frontend interfaces with React or Vue.</p>

<?php if ($role === 'user'): ?>
    <a href="apply_user.php?job_id=<?= $job_id ?>" class="btn">Apply as User</a>
<?php elseif ($role === 'employer'): ?>
    <a href="apply_employer.php?job_id=<?= $job_id ?>" class="btn">Apply as Employer</a>
<?php elseif ($role === 'admin'): ?>
    <a href="apply_admin.php" class="btn">Admin View</a>
<?php else: ?>
    <p>Please <a href="login.php">login</a> to apply.</p>
<?php endif; ?>

<?php include 'footer.php'; ?>
