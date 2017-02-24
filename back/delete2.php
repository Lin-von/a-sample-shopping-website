<?php
session_start();

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
$way = $_GET['way'];

if($way=="in")
{
    $inid=$_GET['inid'];
    $sql = "delete FROM in_main_10312 WHERE inid = $inid ";
    $conn->query($sql);
    $sql = "delete FROM in_detail_10312 WHERE inid = $inid ";
    $conn->query($sql);
    header( "Location: inmang.php" );
}
else if($way=="out")
{
    $outid=$_GET['outid'];
    $sql = "delete FROM out_main_10312 WHERE outid = $outid ";
    $conn->query($sql);
    $sql = "delete FROM out_detail_10312 WHERE outid = $outid ";
    $conn->query($sql);
    header( "Location: outmang.php" );
}


$conn->close();
