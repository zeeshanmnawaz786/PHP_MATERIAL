<?php
session_start();

session_unset();

session_destroy();
$msg = "Successfully Logout!";
header("Location: login.php?msg=$msg");
exit();
?>
