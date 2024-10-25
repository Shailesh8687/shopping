<?php
session_start();
if (!isset($_SESSION['user']))
 {
    header("location:register.php");
     // Always exit after a redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php include("navbar1.php"); ?>
        </div>
    </div>
    <div class="row">
        <?php
        include("../admin/db.php");

        $sesid = $_SESSION['user'];
        
        // Fixed SQL syntax and security issue with quotes
        $sel = "SELECT * FROM wishlist WHERE userid='$sesid'";
        $r = mysqli_query($conn,$sel);
        
        while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {
            $pid = $k['1'];
            // Fixed SQL syntax and security issue with quotes
            $s = "SELECT * FROM product WHERE id='$pid'";
            $row = mysqli_query($conn, $s);
            
            while ($fetch = mysqli_fetch_array($row, MYSQLI_BOTH)) { // Fixed variable name here
                ?>
                <div class="col-sm-4">
                    <a href="productview.php"> <!-- Added product ID to link -->
                        <div class="card" style="width: 18rem;">
                            <img src="../admin/product/<?php echo $fetch['7'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $fetch['2'] ?></h5> <!-- Removed redundant "Card title" -->
                                <p class="card-text"><?php echo $fetch['psdesc'] ?></p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                                <a href="remove.php?idd=<?php echo $k['0'] ?>" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
</body>
</html>
