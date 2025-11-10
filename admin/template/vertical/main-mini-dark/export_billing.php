<?php
include 'connection.php';

$filter = '';
if (isset($_GET['search']) && $_GET['search'] !== '') {
    $s = mysqli_real_escape_string($conn, $_GET['search']);
    $filter = "WHERE u.name LIKE '%$s%' OR u.email LIKE '%$s%' OR bh.plan LIKE '%$s%'";
}

$sql = "SELECT bh.id, u.name AS user_name, u.email AS user_email, bh.plan, bh.start_date, bh.end_date, bh.amount, bh.status
        FROM billing_history bh
        JOIN users u ON bh.user_id = u.id
        $filter
        ORDER BY bh.start_date DESC";
$res = mysqli_query($conn, $sql);

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=billing_history.csv');

$out = fopen('php://output','w');
fputcsv($out, ['ID','User Name','User Email','Plan','Start Date','End Date','Amount','Status']);
while ($row = mysqli_fetch_assoc($res)) {
    fputcsv($out, [
        $row['id'], $row['user_name'], $row['user_email'],
        $row['plan'], $row['start_date'], $row['end_date'],
        number_format($row['amount'],2), $row['status']
    ]);
}
fclose($out);
mysqli_close($conn);
exit;
?>
