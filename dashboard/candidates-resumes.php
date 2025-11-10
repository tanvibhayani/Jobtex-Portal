<?php
include 'connection.php';
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
?>

<?php include 'header1.php'; ?>

<style>
  .dashboard__container {
    display: flex;
    min-height: 100vh;
  }

  .sidebar {
    width: 250px;
    background-color: #f5f5f5;
    border-right: 1px solid #ddd;
  }

  .main-content {
    flex: 1;
    padding: 40px;
    background-color: #fff;
  }

  .resume-form-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 30px;
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
  }

  h2, h3 {
    margin-bottom: 20px;
  }

  .resume {
    padding-left: 200px;
  }
</style>

<div class="left-menu">
  <?php include 'sidemenu.php'; ?>
  <div class="dashboard__container">

    <!-- ✅ Sidebar -->
    <div class="sidebar"></div>

    <!-- ✅ Main Content -->
    <div class="main-content">
      <section class="page-title-dashboard">
        <div class="resume">
          <h2>Resumes</h2>
        </div>
      </section>

      <section class="flat-dashboard-resumes">
        <div class="resume-form-container">
          <h3>Upload Resume</h3>

          <!-- ✅ Resume Upload Form -->
          <form method="POST" enctype="multipart/form-data">
            <!-- Show Logged-in User Name -->
            <label><strong>Candidate Name:</strong></label>
            <input type="text" value="<?php echo htmlspecialchars($user_name); ?>" readonly
              style="margin-bottom:10px; display:block; width:100%; padding:10px; background-color:#e9ecef; border:1px solid #ccc;">

            <!-- File Input -->
            <input type="file" name="resume_file" accept=".pdf,.doc,.docx" required
              style="margin-top:10px; display:block; width:100%; padding:10px;">

            <input type="submit" name="submit" value="UPLOAD"
              style="margin-top: 15px; background-color:#14a077; color:#fff; border:none; padding:10px 30px; border-radius:5px; cursor:pointer;">
          </form>

          <div style="margin-top: 10px;">Upload file format: PDF, DOC, DOCX. Max size 5MB</div>

          <!-- ✅ PHP Upload Handler -->
          <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['resume_file'])) {
    $file = $_FILES['resume_file'];
    $fileName = $file['name'];  // user-given name
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowed = ['pdf', 'doc', 'docx'];

    if (in_array($fileExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $safeFileName = uniqid('resume_', true) . "." . $fileExt;
                $uploadDir = '../resume/';
                $fileDestination = $uploadDir . $safeFileName;

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                if (move_uploaded_file($fileTmp, $fileDestination)) {
                    $originalFileName = $fileName;
                    $fileNameEscaped = mysqli_real_escape_string($con, $originalFileName);
                    $filePathEscaped = mysqli_real_escape_string($con, $fileDestination);
                    $userNameEscaped = mysqli_real_escape_string($con, $user_name);

                    $sql = "INSERT INTO resumes (user_id, name, file_name, file_path, uploaded_at)
                            VALUES ('$user_id', '$userNameEscaped', '$fileNameEscaped', '$filePathEscaped', NOW())";

                    if (mysqli_query($con, $sql)) {
                        echo "<script>alert('Resume uploaded successfully!'); window.location.href='home-01.php';</script>";
                    } else {
                        echo "<p style='color:red;'>Database error: " . mysqli_error($con) . "</p>";
                    }
                } else {
                    echo "<p style='color:red;'>Failed to move uploaded file.</p>";
                }
            } else {
                echo "<p style='color:red;'>File too large. Max 5MB allowed.</p>";
            }
        } else {
            echo "<p style='color:red;'>Upload error: " . $fileError . "</p>";
        }
    } else {
        echo "<p style='color:red;'>Invalid file type. Only PDF, DOC, DOCX allowed.</p>";
    }
}
?>
          <!-- ✅ End PHP Handler -->

        </div>
      </section>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
