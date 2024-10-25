<?php
if(isset($_POST['btn']))
{


include("db.php");
$path="product/";

$cid=mysqli_real_escape_string($conn,$_POST['cid']);
$pname=mysqli_real_escape_string($conn,$_POST['pname']);
$pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
$poprice=mysqli_real_escape_string($conn,$_POST['poprice']);
$psdesc=mysqli_real_escape_string($conn,$_POST['psdesc']);
$pldesc=mysqli_real_escape_string($conn,$_POST['pldesc']);


$p1=$_FILES['p1']['name'];
$p1_temp=$_FILES['p1']['tmp_name'];

$p2=$_FILES['p2']['name'];
$p2_temp=$_FILES['p2']['tmp_name'];

$p3=$_FILES['p3']['name'];
$p3_temp=$_FILES['p3']['tmp_name'];

$p4=$_FILES['p4']['name'];
$p4_temp=$_FILES['p4']['tmp_name'];

$ins="INSERT INTO `product`( `cid`, `pname`, `pprice`, `poprice`, `psdesc`, `pldesc`, `p1`, `p2`, `p3`, `p4`,`status`) VALUES ('$cid','$pname','$pprice','$poprice','$psdesc','$pldesc','$p1','$p2','$p3','$p4','true')";

if(mysqli_query($conn,$ins))
{
    move_uploaded_file($p1_temp,$path.$p1);
    move_uploaded_file($p2_temp,$path.$p2);
    move_uploaded_file($p3_temp,$path.$p3);
    move_uploaded_file($p4_temp,$path.$p4);
    echo "product added";
}
else{
    echo "product not added";
} 

}
else
{
    header("location:addproduct.php");
}

?>