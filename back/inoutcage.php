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
$tip=$_GET['tip'];

    $gname=$_POST['gname'];
    $gbrand=$_POST['gbrand'];
    $gseries=$_POST['gseries'];
    $gsize=$_POST['gsize'];
    $gprice=$_POST['gprice'];
    $gqty=$_POST['gqty'];

if($tip==1)
{
    $sql = "SELECT * FROM item_10312 WHERE name='$gname' AND brand = '$gbrand' and series = '$gseries' AND  size = $gsize ";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_assoc();
        $remain = $row["remain"]+$gqty;
        $gid = $row["gid"];
        $sql = "UPDATE item_10312 SET remain=$remain WHERE gid=$gid";
        $conn->query($sql);

    }
    else
    {
        $sql = "SELECT max(gid) FROM item_10312";
        $result = $conn->query($sql);
        $row = $result->fetch_row();
        $maxgid=$row[0]+1;

        $sql = "INSERT INTO item_10312 (gid,  name,price,brand,size,series,remain)
VALUES ($maxgid, '$gname','$gprice','$gbrand',$gsize,'$gseries',$gqty)";
        $conn->query($sql);

    }
}
else
{
    $sql = "SELECT * FROM item_10312 WHERE name='$gname' AND brand = '$gbrand' and series = '$gseries' AND  size = $gsize ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $remain = $row["remain"]-$gqty;
    $gid = $row["gid"];
    $sql = "UPDATE item_10312 SET remain=$remain WHERE gid=$gid";
    $conn->query($sql);
}


header( "Location: ../back/inout.php" );








//$row = $result->fetch_assoc();
$conn->close();
?>
