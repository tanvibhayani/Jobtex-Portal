
<?php
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "<script>location.href='index.php';</script>";
?>