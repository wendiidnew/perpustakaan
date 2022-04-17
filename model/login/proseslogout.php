<?php
    session_start();
    session_destroy();
    header("locaation:../../indext.php");
    exit();
?>