<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-md-flex align-items-center justify-content-between">
                <div>
                    <a href="jobs_details.php" class="waves-effect waves-light btn btn-outline btn-primary">Jobs</a>
                    <a href="candidates.php" class="waves-effect waves-light btn active btn-outline btn-primary mx-lg-10">Candidates</a>
                    <a href="mailbox.html" class="waves-effect waves-light btn btn-outline btn-primary">Messages</a>
                </div>
                <a href="#" class="waves-effect waves-light btn btn-danger mt-10 mt-md-0">Post A Job</a>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">Candidate List</h4>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-body px-0">
                            <div class="table-responsive">
                                <table id="example2" class="table mb-0 w-p100">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="ch_bx_1" class="filled-in"><label for="ch_bx_1" class="mt-0"></label></th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Screener Questions</th>
                                            <th>Date</th>
                                            <th><i class="fa fa-lock me-5"></i>Interested?</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-fade">
<?php
$sql = "SELECT * FROM candidates ORDER BY date_applied DESC";
$result = mysqli_query($conn, $sql);
$counter = 2;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ch_id = "ch_bx_" . $counter++;
        $badge_class = (strpos($row['preferred_question_score'], '1/1') !== false) ? 'badge-success-light' : 'badge-secondary-light';
        echo "<tr>
            <td><input type='checkbox' id='$ch_id' class='filled-in'><label for='$ch_id' class='mt-2'></label></td>
            <td>" . htmlspecialchars($row['name']) . "</td>
            <td>" . htmlspecialchars($row['status']) . "</td>
            <td><span class='badge $badge_class'>" . htmlspecialchars($row['preferred_question_score']) . " Preferred Question met</span></td>
            <td>" . date('d M', strtotime($row['date_applied'])) . "</td>
            <td>
                <div class='btn-group'>
                    <a href='#' class='waves-effect waves-light btn btn-outline btn-success'><i class='fa fa-check'></i></a>
                    <a href='#' class='waves-effect waves-light btn btn-outline btn-primary'><i class='fa fa-question'></i></a>
                    <a href='#' class='waves-effect waves-light btn btn-outline btn-danger'><i class='fa fa-close'></i></a>
                </div>
            </td>
            <td>
                <div class='dropdown'>
                    <a class='px-10 pt-5' href='#' data-bs-toggle='dropdown'><i class='ti-more-alt'></i></a>
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='#'>Send Email</a>
                        <a class='dropdown-item' href='#'>Save</a>
                        <a class='dropdown-item' href='#'>Delete</a>
                    </div>
                </div>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7' class='text-center'>No candidates found.</td></tr>";
}
mysqli_close($conn);
?>
                                    </tbody>
                                </table>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>
