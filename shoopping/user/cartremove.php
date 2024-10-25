<?php
$id=$_REQUEST['idd'];

include("../admin/db.php");
$del=" delete from `card` where id=$id";
if(mysqli_query($conn,$del))
{
    header("location:cart.php");
}
else
{
    echo "cart product remove failed ";
}

?>