<?php
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];
?>

<div class="container mt-5">
    <h2 class="mb-4">Shortlisted Candidates</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Candidate Name</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>Resume</th>
                    <th>Applied Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
            // Fetch shortlisted candidates
          $sql = "SELECT ja.applied_at, r.name, r.email, res.file_path, j.job_title, r.id AS user_id
        FROM e_job_applications ja
        JOIN registration r ON ja.user_id = r.id
        LEFT JOIN resumes res ON ja.user_id = res.user_id
        JOIN jobs j ON ja.job_id = j.id
        WHERE ja.status = 'shortlisted'";


            $result = mysqli_query($con, $sql);

            if (!$result) {
                echo "<tr><td colspan='6'>Error: " . mysqli_error($con) . "</td></tr>";
            } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['job_title']) . "</td>";


                    if (!empty($row['file_path']) && file_exists($row['file_path'])) {
                        echo "<td><a href='" . $row['file_path'] . "' target='_blank'>View Resume</a></td>";
                    } else {
                        echo "<td>No Resume</td>";
                    }

                    echo "<td>" . date("d-m-Y", strtotime($row['applied_at'])) . "</td>";
                    echo "<td><a href='remove_shortlist.php?user_id=" . $row['user_id'] . "' class='btn btn-danger btn-sm'>Remove</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>No shortlisted candidates found.</td></tr>";
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

<?php include 'footer1.php'; ?>
