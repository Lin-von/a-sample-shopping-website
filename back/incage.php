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
$whofrom = $_POST['whofrom'];

$sql = "SELECT max(inid) FROM in_main_10312";
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
    if($result->num_rows>0)
    {
        $row = $result->fetch_assoc();
        $gid = $row["gid"];
    }
    else
    {
        $sql = "SELECT max(gid) FROM item_10312";
        $result = $conn->query($sql);
        $row = $result->fetch_row();
        $maxgid=$row[0]+1;

        $sql = "INSERT INTO item_10312 (gid,  name,price,brand,size,series,remain)
VALUES ($maxgid, '$gname','$gprice','$gbrand',$gsize,'$gseries',0)";
        $conn->query($sql);
        $gid = $maxgid;
    }





    $sql = "SELECT max(id) FROM in_detail_10312";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $newid=$row[0]+1;
    //echo $newid;
    $sql = "INSERT INTO in_detail_10312 (id,  gid, count, inid)
VALUES ($newid, $gid,$gqty,$maxid)";
    $conn->query($sql);

}

$sql = "INSERT INTO in_main_10312 (inid, whofrom,date, cost)
VALUES ($maxid, '$whofrom', '$date',$sum)";
$conn->query($sql);





header( "Location: ../back/inmang.php" );








//$row = $result->fetch_assoc();
$conn->close();
?>
