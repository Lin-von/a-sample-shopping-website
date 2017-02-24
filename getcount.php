<?php
$q = $_GET["q"];
$name =$_GET["name"];

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

    $sql = "SELECT *  FROM item_10312 WHERE NAME = '$name' AND SIZE = '$q'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
 echo $row["remain"];
$conn->close();