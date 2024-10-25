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
                <!-- change nav next page save hai-->
          <?php include("navbar.php"); ?>
            </div>
        </div>
        <!-- row end -->
       
<div class="row">
    <?php
    include("../admin/db.php");
    $sel="select * from category";
    $row=mysqli_query($conn,$sel);
    while($k=mysqli_fetch_array($row,MYSQLI_BOTH))
    {
    ?>

    <div class="col-sm-1">
    <div class="card">
        <img src="../admin/category/<?php echo $k['cicon'] ?>" width="100%" height="100%">
        <div class="card-title"><?php echo $k['cname'] ?></div>
    </div>
</div>
    <?php
    }
    ?>
</div>
 <!-- category more -->
  

       


    </div>
</body>
</html>