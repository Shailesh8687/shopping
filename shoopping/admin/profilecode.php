<?php
include("db.php");
session_start();
$sesid=$_SESSION['admin'];

$a=$_FILES['file']['name'];
$b=$_FILES['file']['tmp_name'];
$c=$_POST['name'];
$path="picture/";

$up="update admintbl set profile='$a',name='$c' where email='$sesid'";
if(mysqli_query($conn,$up))
{
    move_uploaded_file($b,$path.$a);

    header("location:profile.php");

}
else
{
echo " profile not update";
}
?>