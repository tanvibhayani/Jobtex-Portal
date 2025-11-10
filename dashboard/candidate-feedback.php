<?php
session_start();
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = trim($_POST['message']);
    if (!empty($message)) {
        $message = mysqli_real_escape_string($con, $message);
        $sql = "INSERT INTO feedback (user_id, message) VALUES ('$user_id', '$message')";
        if (mysqli_query($con, $sql)) {
            echo "<div class='alert alert-success text-center'>Feedback submitted successfully!</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($con) . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center'>Please enter your feedback.</div>";
    }
}
?>
<style>
.apply-btn {
        background-color: #28a745;
        color: white;
        padding: 10px 25px;
        border: none;
        height: 30px;
        border-radius: 50px;
        font-weight: 500;
        font-size: 16px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
    }

    .apply-btn:hover {
        background-color: #218838;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
</style>


             <div class="left-menu">
            <?php include 'sidemenu.php'; ?>
        </div>
<!-- Feedback Form UI -->
<div class="container mt-5 mb-5 py-5">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header  text-white">
                    <h4 class="mb-0 py-5">📝 Give Your Feedback</h4>
                </div>
                
                <!-- Start form inside card-body -->
                <form method="POST">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Feedback</label>
                            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Type your feedback..." required></textarea>
                        </div>

                        <!-- Button at bottom -->
                        <div class="d-flex justify-content-center mt-4">
                            <input type="submit" class="apply-btn" style="background-color: #4ba779ff; border-radius:50px;" value="Submit Feedback" name="btn">
                        </div>
                    </div>
                </form>
                <!-- End form -->
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>