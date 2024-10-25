<?php
include("db.php");

session_start();
$sesid=$_SESSION['admin'];

$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];
$sel="select * from admintbl where email='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['2']==$a)
{
if($b==$c)
{
 $up="update admintbl set password='$b' where email='$sesid'";
 if(mysqli_query($conn,$up))
 {
    header("location:index.php");
 }
 else
 {
    echo "password not change";
 }
}
else
{
    echo "new and conf pass not match";
}
}
else
{
    echo "old password  wrong";
}
?>