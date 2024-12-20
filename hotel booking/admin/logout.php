<?php
session_start();
unset($_SESSION['aloginid']);
unset($_SESSION['aloginuser']);
header("Location: login.php");
?>