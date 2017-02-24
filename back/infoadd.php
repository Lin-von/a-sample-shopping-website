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



if($tip==1)
{
    $name=$_POST['pname'];
    $tel=$_POST['ptel'];
    $email=$_POST['pemail'];
    $idcard=$_POST['pidcard'];
    $position=$_POST['pposition'];

        $sql = "SELECT max(pid) FROM person_10312";
        $result = $conn->query($sql);
        $row = $result->fetch_row();
        $maxgid=$row[0]+1;

        $sql = "INSERT INTO person_10312 (pid,  name,tel,email,idcard,position)
VALUES ($maxgid, '$name','$tel','$email','$idcard','$position')";
        $conn->query($sql);


}
else
{
    $name=$_POST['aname'];
    $tel=$_POST['atel'];
    $address=$_POST['aaddress'];
    $payin=$_POST['apay'];

    $sql = "SELECT max(aid) FROM agency_10312";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $maxgid=$row[0]+1;

    $sql = "INSERT INTO agency_10312 (aid,  name,tel,address,payin)
VALUES ($maxgid, '$name','$tel','$address','$payin')";
    $conn->query($sql);
}


header( "Location: ../back/addinfo.php" );








//$row = $result->fetch_assoc();
$conn->close();
?>
