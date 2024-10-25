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
          <?php include("navbar.php"); ?>
         </div>
    </div>
<div class="row">
    <?php
    include("../admin/db.php");
    $id=$_REQUEST['idd'];
    $sel="select * from product where id=$id";
    $r=mysqli_query($conn,$sel);
    $k=mysqli_fetch_array($r,MYSQLI_BOTH);
    ?>
    <div class="col-sm--6">
        <img src="../admin/product/<?php echo $k['7'] ?>" width="100%" class="img-thumbnail"/>
        <div class="row">
            <div class="col-sm-4"><img src="../admin/product/<?php echo $k['8'] ?>" width="100%" height="200px" class="img-thumbnail"/></div>
            <div class="col-sm-4"><img src="../admin/product/<?php echo $k['9'] ?>" width="100%" height="200px" class="img-thumbnail"/></div>
            <div class="col-sm-4"><<img src="../admin/product/<?php echo $k['10'] ?>" width="100%" height="200px" class="img-thumbnail"/></div>
        </div>
    </div>
    <div class="col-sm--6">
        <p><?php echo $k['2'] ?></p>
        <p><span>Rs.<?php echo $k['3'] ?></span> <span>Rs.<?php echo $k['4'] ?></span></p>
        <p><?php echo $k['5'] ?></p>
        <p><?php echo $k['6'] ?></p>

        <button class="btn btn-primary" >Add to card</button>
        <button class="btn btn-secondary" >Wishlist</button>
    </div>
</div>


</div>
</body>
</html>