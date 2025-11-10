<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

// Check login
if (!isset($_SESSION['employer_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit();
}
$employer_id = $_SESSION['employer_id'];
?>

<div class="candidate__meeting">
    <h6 class="mb-3">Meeting</h6>
    <div class="candidate__meeting__content">

<?php
$query = "SELECT * FROM meetings WHERE employer_id = $employer_id ORDER BY meeting_date DESC";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $date = date_create($row['meeting_date']);
        $month = date_format($date, 'M');
        $day = date_format($date, 'd');
        $year = date_format($date, 'Y');
        ?>
        <!-- single meeting -->
        <div class="single__meeting__item">
            <div class="single__meeting__left">
                <div class="calender">
                    <span class="month"><?= $month ?></span>
                    <span class="day"><?= $day ?></span>
                    <span class="year"><?= $year ?></span>
                </div>
                <div class="content">
                    <h6 class="mb-2"><?= htmlspecialchars($row['meeting_title']) ?></h6>
                    <span>Meeting with: <?= htmlspecialchars($row['meeting_with']) ?></span>
                </div>
                <div class="time">
                    <span><i class="fa-regular fa-clock"></i> <?= htmlspecialchars($row['meeting_duration']) ?></span>
                    <span>
                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.28175 0C4.74545 0 3.39605 1.09267 2.9794 2.67483L0.13313 13.4878..." fill="#7D8087" />
                        </svg>
                        <?= htmlspecialchars($row['meeting_platform']) ?>
                    </span>
                </div>
            </div>
            <div>
                <div class="meeting__action">
                    <button class="action__item">
                        <span class="notification__item">10</span>
                        <!-- Chat SVG -->
                    </button>
                    <button class="action__item" title="Meeting Done">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path d="M20.293 5.293L9 16.586 4.707 12.293 3.293 13.707 9 19.414 21.707 6.707z" fill="#939393"></path></svg>
                    </button>
                    <button class="action__item" onclick="deleteMeeting(<?= $row['id'] ?>)">
                        <!-- Delete SVG -->
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="..." fill="#FF5757" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- single meeting end -->
        <?php
    }
} else {
    echo "<p>No meetings found.</p>";
}
?>
    </div>
</div>

<script>
function deleteMeeting(id) {
    if (confirm('Are you sure to delete this meeting?')) {
        window.location.href = 'delete-meeting.php?id=' + id;
    }
}
</script>

<?php include 'footer1.php'; ?>
