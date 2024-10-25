<?php
session_start();
$sesid = $_SESSION['user'];
include("../admin/db.php");

if (isset($_SESSION['user']))
 {
    $id = $_REQUEST['idd'];

    $ins = "INSERT INTO `wishlist`(pid, userid) VALUES ('$id', '$sesid')";
    
    if (mysqli_query($conn, $ins))
     {
        echo "Wishlist added";
    } else
     {
        echo "Wishlist not added: " ;
    }
}
 else
  {
    echo "Login first";
}
?>
