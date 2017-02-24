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
$level = $row["level"];
if($row["password"]==$q)
{
    echo "yes";
    $name =$_GET['name'];
    $qty = $_GET['qty'];
    $size = $_GET['size'];
    $uname = $_SESSION['user'];

    $sql = "SELECT max(bid) FROM buyrcd_10312";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $maxid=$row[0]+1;

    $sql = "SELECT * FROM item_10312 WHERE NAME = '$name' AND SIZE = '$size'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $gid = $row["gid"];
    $cost = $row["price"]*$qty*(1-0.1*$level);
    $date = date('y-m-d h:i:s',time());
    $remain = $row["remain"]-$qty;




    $sql = "INSERT INTO buyrcd_10312 (bid, uname, gid, count , date, cost)
VALUES ($maxid, '$uname', $gid,$qty,'$date',$cost)";
    $conn->query($sql);

    $sql = "SELECT max(outid) FROM out_main_10312";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $maxid=$row[0]+1;

    $sql = "INSERT INTO out_main_10312 (outid, whoto,date, cost)
VALUES ($maxid, '$uname', '$date',$cost)";
    $conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        header( "Location: registsuc.php" );
    } else {
        header( "Location: registfail.php" );
    }*/


    $sql = "SELECT max(id) FROM out_detail_10312";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $newid=$row[0]+1;
    $sql = "INSERT INTO out_detail_10312 (id,  gid, count, outid)
VALUES ($newid, $gid,$qty,$maxid)";
    $conn->query($sql);

}
else echo "no";

$conn->close();
