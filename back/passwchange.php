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
$uname = $_SESSION['user'];

$old = $_POST['old'];
$new = $_POST['new'];


$sql = "SELECT * FROM user_10312 WHERE name = '$uname'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if($row["password"]==$old)
{
    $sql= "UPDATE user_10312 SET password ='$new' WHERE name ='$uname'";
    $conn->query($sql);
    header( "Location: ../back/tip.php?tip=1" );

}
else
{
    header( "Location: ../back/tip.php?tip=2" );
}







//$row = $result->fetch_assoc();
$conn->close();
?>
