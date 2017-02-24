<?php
 session_start();
if(!isset($_SESSION['user'])) header( "Location: logtip.php" );

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

$sql = "SELECT max(cid) FROM cart_10312";
$result = $conn->query($sql);
$row = $result->fetch_row();
$maxid=$row[0]+1;

$uname = $_SESSION['user'];
$name = $_GET['name'];
$size = $_GET['size'];
$qty = $_GET['qty'];

$sql = "SELECT * FROM item_10312 WHERE NAME = '$name' AND SIZE = '$size'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$gid = $row["gid"];
$cost = $row["price"]*$qty;

$sql = "SELECT * FROM cart_10312 WHERE gid = $gid";
$result = $conn->query($sql);
if($result->num_rows>0)
{
    $row1 = $result->fetch_assoc();
    $qty += $row1["count"];
    $cost += $row1["cost"];
    $cid = $row1["cid"];
    $sql = "UPDATE cart_10312 SET COUNT = $qty,cost = $cost WHERE cid = $cid ";
}
else
{
    $sql = "INSERT INTO cart_10312 (cid, uname, gid, count , cost)
VALUES ($maxid, '$uname', $gid,$qty,$cost)";
}







if ($conn->query($sql) === TRUE) {
    header( "Location: suc.php?from=incart" );
} else {
    header( "Location: registfail.php" );
}

/*
$sql = "SELECT * FROM item_10312 WHERE NAME = '$name'";

$result = $conn->query($sql);*/
//$row = $result->fetch_assoc();

$conn->close();