<?php
$id = $_REQUEST['idd'];


$id = intval($id);

include("../admin/db.php");

$del = "DELETE FROM wishlist WHERE id = $id";

if (mysqli_query($conn, $del)) {
    header("Location: wishlist.php");
    
} else {
    echo "Failed to remove the product from the wishlist"; 
}
?>
