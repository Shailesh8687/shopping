<?php
 session_start();
include("../admin/db.php");

$a= mysqli_real_escape_string($conn,$_POST['email']);
$b= mysqli_real_escape_string($conn,$_POST['pass']);


$date=date("d/m/y");
$time=date("h:i:sa");
$datetime=$date." ".$time;
 
$sel="select * from register where email='$a'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k==null)
{

$ins="INSERT INTO `register`(`email`,`password`,`status`,`dateandtime`) VALUES('$a','$b','true','$datetime')";

if(mysqli_query($conn,$ins))
{
   
    $_SESSION['user']=$a;
    header("location:userdashboard.php");
    // echo "data store";
}
else
{
    echo "data not store";
}
}
else
{
    if($k['2']==$b)
    {
    $_SESSION['user']=$a;
    header("location:userdashboard.php");
        // echo "login";
    }
    else
    {
        echo "password wrong";
    }
}

?>