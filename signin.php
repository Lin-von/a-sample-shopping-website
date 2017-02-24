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



$uname = $_POST["uname"];
$upwd = $_POST["upwd"];
$sql = "SELECT * FROM user_10312 WHERE name = '$uname' AND password = '$upwd'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
    $_SESSION['user'] = "$uname";
    $_SESSION['level'] = $row["level"];
    header( "Location: index.php" );
} else {
    header( "Location: logfail.php" );
}

/*if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["uid"]. " - Name: ". $row["name"]. " " . $row["password"];
    }
} else {
    echo "0 个结果";
}*/

$conn->close();
?>