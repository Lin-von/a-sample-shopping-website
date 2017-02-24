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
$name = $_GET['name'];
if($name=="") echo 2;
else{
    $sql="select * from user_10312 where name='$name'";
    $result = $conn->query($sql);
    if($result->num_rows>0)
        echo 0;
    else echo 1;
}

$conn->close();
