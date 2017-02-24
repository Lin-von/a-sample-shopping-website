<?php
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
$sql = "SELECT max(uid) FROM user_10312";
$result = $conn->query($sql);
$row = $result->fetch_row();
$maxid=$row[0]+1;

$uname = $_POST["uname"];
$upwd = $_POST["upwd"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$sql = "INSERT INTO user_10312 (uid, name, password, tel , email, level) 
VALUES ($maxid, '$uname', '$upwd','$tel','$email',1)";

if ($conn->query($sql) === TRUE) {
    header( "Location: registsuc.php" );
} else {
    header( "Location: registfail.php" );
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