<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['level']);
header( "Location: index.php" );
?>