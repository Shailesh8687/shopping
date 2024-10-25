<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:register.php");
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
                <!-- change nav next page save hai-->
          <?php include("navbar1.php"); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <form action="checkoutcode.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="number" name="num" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" name="adds" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
            </div>
            <div class="col-sm-4"></div>
 
        </div>



    </div>
</body>
</html>