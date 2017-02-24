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


$sql = "SELECT sum(cost) FROM buyrcd_10312 WHERE uname = '$uname'";
$result = $conn->query($sql);
$row = $result->fetch_row();
$cost = $row[0];

if($cost>=10000)
{
    $sql= "UPDATE user_10312 SET level=3 WHERE name ='$uname'";
    $_SESSION['level']=3;


}
else if($cost>=5000)
{
    $sql= "UPDATE user_10312 SET level=2 WHERE name ='$uname'";
    $_SESSION['level']=2;

}
$conn->query($sql);

header( "Location: ../back/index.php" );




//$row = $result->fetch_assoc();
$conn->close();
?>
