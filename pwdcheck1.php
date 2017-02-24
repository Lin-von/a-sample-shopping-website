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


$sql = "SELECT * FROM user_10312 WHERE NAME = '$name'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row["password"]==$q)
{
    echo "yes";

    $uname = $_SESSION['user'];
    $level = $row["level"];


    $sql = "SELECT * FROM cart_10312  WHERE uname = '$uname' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 输出每行数据
        while ($row = $result->fetch_assoc()) {
            $sql = "SELECT max(bid) FROM buyrcd_10312";
            $result1 = $conn->query($sql);
            $row1 = $result1->fetch_row();
            $maxid = $row1[0] + 1;

            $gid = $row["gid"];
            $qty = $row["count"];
            $cost = $row["cost"]*(1-0.1*$level);
            $date = date('y-m-d h:i:s', time());

            $sql = "INSERT INTO buyrcd_10312 (bid, uname, gid, count , date, cost)
VALUES ($maxid, '$uname', $gid,$qty,'$date',$cost)";
            $conn->query($sql);

            $sql = "SELECT max(outid) FROM out_main_10312";
            $result1 = $conn->query($sql);
            $row1 = $result1->fetch_row();
            $maxid = $row1[0] + 1;

            $sql = "INSERT INTO out_main_10312 (outid, whoto,date, cost)
VALUES ($maxid, '$uname', '$date',$cost)";
            $conn->query($sql);

            $sql = "SELECT max(id) FROM out_detail_10312";
            $result1 = $conn->query($sql);
            $row1 = $result1->fetch_row();
            $newid = $row1[0] + 1;
            $sql = "INSERT INTO out_detail_10312 (id,  gid, count, outid)
VALUES ($newid, $gid,$qty,$maxid)";
            $conn->query($sql);

            $sql = "delete FROM cart_10312 WHERE uname = '$uname' ";
            $conn->query($sql);

        }

    }











    /*if ($conn->query($sql) === TRUE) {
        header( "Location: registsuc.php" );
    } else {
        header( "Location: registfail.php" );
    }*/




}
else echo "no";

$conn->close();
