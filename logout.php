<?php
session_start();
unset($_SESSION['login_user']);
session_unset();
session_destroy();

header("Location: index.php");
?>