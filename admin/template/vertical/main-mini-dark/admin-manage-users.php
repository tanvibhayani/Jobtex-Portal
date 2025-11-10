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

<!-- Custom Page CSS -->
<style>
    .table thead th {
        background-color: #343a40;
        color: #ffffff;
    }

    .table td, .table th {
        vertical-align: middle;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
    }

    .btn-sm {
        margin-right: 5px;
    }

    .main-heading {
        padding-top: 20px;
        padding-bottom: 10px;
        margin-left: 30px;
    }
    .main-content
    {
        margin-left:50px;
        margin-top: 80px;
    }
</style>

<!-- Main Content Layout Fix -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row main-heading">
                <div class="col-12">
                    <h4 class="text-white py-5 mt-5">Manage Candidates</h4>
                </div>
            </div>

            <!-- Card Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">
                            <h5 class="card-title mb-3">All Registered Candidates</h5>

                            <?php
                            $sql = "SELECT * FROM registration WHERE role = 'candidate' ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);

                            if (!$result) {
                                echo "<div class='alert alert-danger'>Query Error: " . mysqli_error($conn) . "</div>";
                            } else {
                            ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-white align-middle">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>City</th>
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
                                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['contact_number']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['city']) . "</td>";
                                                echo "<td>" . ucfirst($row['role']) . "</td>";
                                                echo "<td>
                                                        <a href='admin-view-user.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'>View</a>
                                                        <a href='admin-edit-user.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                                        <a href='admin-delete-user.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Delete this user?');\">Delete</a>
                                                      </td>";
                                                echo "</tr>";
                                            }

                                            if (mysqli_num_rows($result) === 0) {
                                                echo "<tr><td colspan='7' class='text-center text-white'>No candidates found.</td></tr>";
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

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
</div> <!-- main-content -->

<?php include 'footer.php'; ?>
