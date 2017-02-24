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

$sum=0;
$count = $_GET['count'];
$whoto = $_POST['whoto'];

$sql = "SELECT max(outid) FROM out_main_10312";
$result = $conn->query($sql);
$row = $result->fetch_row();
$maxid=$row[0]+1;
$date = date('y-m-d h:i:s',time());


for($i=1;$i<=$count;$i++)
{
    $gname=$_POST['gname'.$i];
    $gbrand=$_POST['gbrand'.$i];
    $gseries=$_POST['gseries'.$i];
    $gsize=$_POST['gsize'.$i];
    $gprice=$_POST['gprice'.$i];
    $gqty=$_POST['gqty'.$i];


    $sum+=$gprice*$gqty;

    $sql = "SELECT * FROM item_10312 WHERE name='$gname' AND brand = '$gbrand' and series = '$gseries' AND  size = $gsize ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $gid = $row["gid"];




    $sql = "SELECT max(id) FROM out_detail_10312";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $newid=$row[0]+1;
    //echo $newid;
    $sql = "INSERT INTO out_detail_10312 (id,  gid, count, outid)
VALUES ($newid, $gid,$gqty,$maxid)";
    $conn->query($sql);

}

$sql = "INSERT INTO out_main_10312 (outid, whoto,date, cost)
VALUES ($maxid, '$whoto', '$date',$sum)";
$conn->query($sql);





    header( "Location: ../back/outmang.php" );








//$row = $result->fetch_assoc();
$conn->close();
?>
