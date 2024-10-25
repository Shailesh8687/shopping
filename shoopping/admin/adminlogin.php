<?php
if(isset($_POST['btn']))
{
include("db.php");
$a=mysqli_real_escape_string($conn,$_POST['email']);
$b=mysqli_real_escape_string($conn,$_POST['pass']);
$sel="select * from admintbl where email='$a' or password='$b'";

$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
if($k!=null)
{
if($k['1']==$a)
{
    if($k['2']==$b)
    {
$up="update admintbl set status='true' where email='$a'";
if(mysqli_query($conn,$up))
{
   session_start();
   $_SESSION['admin']=$a;
   header("location:dashboard.php");
}
else{
    echo "login failed";
}
    }
    else{
        echo "password worg";
    }
}
else{
    echo "email wrong";
}
}
else
{
    echo "data not fatch";
}
}
else
{
    header("location:index.php");
}

?>