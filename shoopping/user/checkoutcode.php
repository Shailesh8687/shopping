<?php
if(isset($_POST['btn']))
{
    session_start();
    $sesid=$_SESSION['user'];
    include("../admin/db.php");
    $date=date('d/m/y');
    date_default_timezone_set("asia/kolkata");
    $time=date("h:i:sa");
$sel="select * from card where userid='$sesid'";
$r=mysqli_query($conn,$sel);
$p_id=[];
while($k=mysqli_fetch_array($r,MYSQLI_BOTH))


{
    $p_id[]=$k['1'];
    
}
 $pid=implode(',',$p_id);
$a=mysqli_real_escape_string($conn,$_POST['name']);
$b=mysqli_real_escape_string($conn,$_POST['num']);
$c=mysqli_real_escape_string($conn,$_POST['city']);
$d=mysqli_real_escape_string($conn,$_POST['adds']);

$ins="INSERT into orders(pid,userid,name,mobile,city,address,date,time) values('$pid','$sesid','$a','$b','$c','$d','$date','$time')";
if(mysqli_query($conn,$ins))
{
    echo "orders done";
}
else
{
    echo "ordres faild";
}

}
else
{
    header("location:checkout.php");
}

?>