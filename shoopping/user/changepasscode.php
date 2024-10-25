<?php
if(!isset($_SESSION['btn']))
{
include("../admin/db.php");
session_start();
$sesid=$_SESSION['user'];

$a=mysqli_real_escape_string($conn,$_POST['opass']);
$b=mysqli_real_escape_string($conn,$_POST['npass']);
$c=mysqli_real_escape_string($conn,$_POST['cpass']);

$sel = "SELECT * FROM register WHERE email='$sesid'";
$r = mysqli_query($conn, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

if($k['2']==$a)
{
if($b==$c)
{
$up="update register set password='$b' where email='$sesid'";
if(mysqli_query($conn,$up))
{
    header("location:register.php");
}

}
    else
    {
        echo "new and conf pass not same";
    }
}
else
{
    echo "old pass wrong";
}




}
else
{
    header("location:changepassword.php");
}

?>