<?php
session_start();

if (isset($_SESSION['user'])) 
{
    $sesid = $_SESSION['user'];
    $id = $_REQUEST['idd']; // Consider changing this to $_GET['idd'] or $_POST['idd']

include("../admin/db.php");
$date = date("d/m/y");
date_default_timezone_set("Asia/Kolkata"); 
$time = date("h:i:sa");
$ins="insert into card(pid,userid,date,time) values('$id','$sesid','$date','$time')";
if(mysqli_query($conn,$ins))
{
    echo "product added in cart";

}
else
{
    echo "product not added in cart";

}

}
else
{
    echo "login first";
}

?>