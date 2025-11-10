<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

// Candidate ID - session से लें (आपके login सिस्टम से)
// फिलहाल एक dummy value यूज़ कर रहे हैं:
$user_id = 1;

if (isset($_GET['apply_id'])) {
    $job_id = $_GET['apply_id'];

    // Duplicate check
    $check = mysqli_query($con, "SELECT * FROM job_applications WHERE user_id = '$user_id' AND job_id = '$job_id'");
    if (mysqli_num_rows($check) == 0) {
        $apply = mysqli_query($con, "INSERT INTO job_applications (user_id, job_id, applied_at) VALUES ('$usercandidate_id', '$job_id', NOW())");
        if ($apply) {
            echo "<script>alert('Successfully Applied!');</script>";
        } else {
            echo "<script>alert('Failed to apply!');</script>";
        }
    } else {
        echo "<script>alert('You already applied for this job.');</script>";
    }
}
?>

<div class="dashboard__content">
    <div class="dashboard__content__inner">
        <div class="dashboard__job__box radius-10 bg-white p-4">
            <h4 class="mb-4">Available Jobs</h4>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Salary</th>
                            <th>Job Type</th>
                            <th>Post Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $sql = "SELECT * FROM jobs ORDER BY post_date DESC";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['job_title']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['company_name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['location']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['job_type']) . "</td>";
                            echo "<td>" . date('d M Y', strtotime($row['post_date'])) . "</td>";
                            echo "<td>
                                    <a href='job-details.php?id=" . $row['id'] . "' class='btn btn-info btn-sm mb-1'>View</a>
                                    <a href='employee-dash-job.php?apply_id=" . $row['id'] . "' class='btn btn-success btn-sm'>Apply</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>No jobs found</td></tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer1.php'; ?>
