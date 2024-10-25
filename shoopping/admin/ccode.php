<?php
include("db.php");

$a=$_FILES['file']['name'];
$b=$_FILES['file']['tmp_name'];
$c=$_POST['cname'];
$path="category/";

$ins="INSERT INTO `category`(`cicon`,`cname`,`status`) VALUE('$a','$c','true')";
if(mysqli_query($conn,$ins))
{
    move_uploaded_file($b,$path.$a);
    echo "category added";
}
else
{
    echo "category not added";
}
?>