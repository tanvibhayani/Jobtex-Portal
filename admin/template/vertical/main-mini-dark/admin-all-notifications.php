<?php
session_start();
include 'connection.php';

// Admin session check
$admin_id = $_SESSION['admin_id'] ?? 0;
if (!$admin_id) {
    echo "<script>alert('Please login as admin'); window.location='auth_login_dark.php';</script>";
    exit;
}

include 'header.php';
include 'sidebar.php';
?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Page Header -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">All Notifications</h4>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Recent Activities</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list-group">
                                <?php
                                // Show new user registrations
                                $user_q = "SELECT id, name, created_at FROM registration ORDER BY created_at DESC LIMIT 10";
                                $user_result = mysqli_query($conn, $user_q);
                                if ($user_result && mysqli_num_rows($user_result) > 0) {
                                    while ($row = mysqli_fetch_assoc($user_result)) {
                                        echo "<li class='list-group-item'>
                                                <i class='fa fa-user text-primary'></i>
                                                New user <strong>" . htmlspecialchars($row['name']) . "</strong> registered.
                                                <br><small>" . date('d M Y, h:i A', strtotime($row['created_at'])) . "</small>
                                              </li>";
                                    }
                                }

                                // Show new employer registrations
                                $emp_q = "SELECT id, name, created_at FROM e_registration ORDER BY created_at DESC LIMIT 10";
                                $emp_result = mysqli_query($conn, $emp_q);
                                if ($emp_result && mysqli_num_rows($emp_result) > 0) {
                                    while ($row = mysqli_fetch_assoc($emp_result)) {
                                        echo "<li class='list-group-item'>
                                                <i class='fa fa-briefcase text-success'></i>
                                                New employer <strong>" . htmlspecialchars($row['name']) . "</strong> registered.
                                                <br><small>" . date('d M Y, h:i A', strtotime($row['created_at'])) . "</small>
                                              </li>";
                                    }
                                }

                                // Show new messages to admin
                                $msg_q = "SELECT * FROM messages WHERE receiver_id = $admin_id AND receiver_role = 'admin' ORDER BY sent_at DESC LIMIT 10";
                                $msg_result = mysqli_query($conn, $msg_q);
                                if ($msg_result && mysqli_num_rows($msg_result) > 0) {
                                    while ($msg = mysqli_fetch_assoc($msg_result)) {
                                        $sender_name = ucfirst($msg['sender_role']);

                                        if ($msg['sender_role'] === 'user') {
                                            $u_q = mysqli_query($conn, "SELECT name FROM registration WHERE id = {$msg['sender_id']}");
                                            $u_row = $u_q ? mysqli_fetch_assoc($u_q) : null;
                                            $sender_name = $u_row['name'] ?? 'User';
                                        } elseif ($msg['sender_role'] === 'employee') {
                                            $e_q = mysqli_query($conn, "SELECT name FROM e_registration WHERE id = {$msg['sender_id']}");
                                            $e_row = $e_q ? mysqli_fetch_assoc($e_q) : null;
                                            $sender_name = $e_row['name'] ?? 'Employer';
                                        }

                                        echo "<li class='list-group-item'>
                                                <i class='fa fa-envelope text-warning'></i>
                                                Message from <strong>" . htmlspecialchars($sender_name) . "</strong>: " . htmlspecialchars($msg['message']) . "
                                                <br><small>" . date('d M Y, h:i A', strtotime($msg['sent_at'])) . "</small>
                                              </li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>
