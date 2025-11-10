<?php
session_start();
include 'connection.php';
include 'header.php';


if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}

$candidate_id = $_GET['id'] ?? 0;
$query = mysqli_query($con, "SELECT * FROM registration WHERE id='$candidate_id'");
$candidate = mysqli_fetch_assoc($query);

if (!$candidate) {
    echo "<div class='container py-5'><h4 class='text-danger'>Candidate not found.</h4></div>";
    include 'footer1.php';
    exit;
}

// Fallback image
$image = !empty($candidate['profile_image']) ? '../../../images/' . $candidate['profile_image'] : 'assets/img/default-user.png';
?>

<div class="dashboard-body py-5" style="background-color: #f5f5f5;">
    <div class="container">
        <h3 class="mb-4 py-5 mt-5"><?= htmlspecialchars($candidate['name']) ?>'s Profile</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="<?= $image ?>" alt="Profile Image" class="img-fluid rounded shadow" style="max-height: 300px;">
            </div>
            <div class="col-md-8">
                <p><strong>Email:</strong> <?= htmlspecialchars($candidate['email']) ?></p>
                <p><strong>Phone:</strong> <?= htmlspecialchars($candidate['contact_number']) ?></p>
                <p><strong>Date of Birth:</strong> <?= htmlspecialchars($candidate['dob']) ?></p>
                <p><strong>Contry:</strong> <?= htmlspecialchars($candidate['country']) ?></p>
                <p><strong>State:</strong> <?= htmlspecialchars($candidate['state']) ?></p>
                <p><strong>City:</strong> <?= htmlspecialchars($candidate['city']) ?></p>
                <p><strong>Pincode:</strong> <?= htmlspecialchars($candidate['pincode']) ?></p>
                <!-- Add more fields as needed -->
            </div>
        </div>
        <a href="employer-all-candidates.php" class="btn btn-secondary mt-4">← Back to Candidates</a>
    </div>
</div>

<?php include 'footer.php'; ?>
