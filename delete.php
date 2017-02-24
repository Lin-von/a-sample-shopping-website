<?php
session_start();
$q=$_GET['q'];

header("Content-Type: text/html;charset=utf-8");
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "maindb_10312";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
mysqli_set_charset ($conn,utf8);
$name = $_SESSION['user'];
$gid = $_GET['gid'];

$sql = "delete FROM cart_10312 WHERE uname = '$name' and gid = '$gid'";
$conn->query($sql);
header( "Location: checkout.php" );

$conn->close();
