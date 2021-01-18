<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
echo "<script>window.location.replace('../public/log_in.php')</script>";
die;
?>