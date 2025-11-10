<?php
include 'header.php';
include 'connection.php';
session_start();

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Login first'); location.href='login.php';</script>";
    exit;
}

$employer_id = $_SESSION['employer_id'];
$to_id = 1; // Admin or Candidate ID
$to_role = 'admin';

if (isset($_POST['submit'])) {
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    $rating = intval($_POST['rating']);

    $sql = "INSERT INTO feedback (from_id, from_role, to_id, to_role, message, rating)
            VALUES ('$employer_id', 'employer', '$to_id', '$to_role', '$msg', '$rating')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Feedback submitted');</script>";
}
?>

<div class="container mt-4">
  <h3>Feedback to Admin</h3>
  <?php include 'feedback-form.php'; ?>
</div>
<?php include 'footer.php'; ?>
