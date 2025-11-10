<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login first.'); window.location='auth_login_dark.php';</script>";
    exit;
}

include 'header.php';
include 'sidebar.php';
?>

<!-- Extra CSS to override layout only for this page -->
<style>
    .custom-layout {
        display: flex;
        flex-direction: row;
        min-height: 100vh;
        background-color: #1e1e1e;
        color: white;
        margin-left: 40px;
    }

    .custom-main-content {
        flex-grow: 1;
        padding: 30px;
        background-color: #1e1e1e;
    }

    .card {
        background-color: #2c2c2c;
    }

    .table thead {
        background-color: #f8f9fa;
        color: #000;
    }

    .btn {
        margin-right: 5px;
    }
</style>

<!-- Start of custom layout -->
<div class="custom-layout">
    <!-- Sidebar already included -->

    <!-- Main content -->
    <div class="custom-main-content py-5 mt-5">
        <h4 class="mb-4 py-4 mt-4">Manage Employers</h4>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title mb-3">All Registered Employers</h5>

                <?php
                $sql = "SELECT * FROM employers ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo "<div class='alert alert-danger'>Query Error: " . mysqli_error($conn) . "</div>";
                } else {
                ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Logo</th>
                                    <th>Job Openings</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $count++ . "</td>";
                                    echo "<td>" . htmlspecialchars($row['company_name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['location']) . "</td>";
                                    echo "<td><img src='../../../images/" . htmlspecialchars($row['logo_image']) . "' width='50' height='50' style='object-fit:cover;'></td>";
                                    echo "<td>" . htmlspecialchars($row['job_openings']) . "</td>";
                                    echo "<td>" . ucfirst($row['status']) . "</td>";
                                    echo "<td>
                                            <a href='admin-view-employer.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'>View</a>
                                            <a href='admin-edit-employer.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                            <a href='admin-delete-employer.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this employer?');\">Delete</a>
                                          </td>";
                                    echo "</tr>";
                                }

                                if (mysqli_num_rows($result) == 0) {
                                    echo "<tr><td colspan='7' class='text-center'>No employers found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
