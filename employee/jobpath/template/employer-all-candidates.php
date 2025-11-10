<?php
session_start();
include 'connection.php';
include 'header.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}

// Fetch all candidates
$candidates = mysqli_query($con, "SELECT * FROM registration ORDER BY name ASC");
?>

<div class="dashboard-body py-5" style="background-color: #f5f5f5; min-height: 100vh;">
    <div class="container">
        <h3 class="mb-4">All Candidates</h3>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($candidates)) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($row['name']) ?></h5>
                            <p>Email: <?= htmlspecialchars($row['email']) ?></p>
                            <p>Phone: <?= htmlspecialchars($row['contact_number']) ?></p><br>
                            <a href="candidate-profile.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">View Profile</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
