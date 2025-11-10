
<?php
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "<script>location.href='home-01.php';</script>";
?>