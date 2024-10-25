<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("location:index.php");
}
if(isset($_SESSION['admin']))

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php include("link.php") ?>
</head>
<body>
    <div class="contanier-fluid">
        <div class="row ">
<!--fiestt-->
            <div class="col-sm-2 p-0 ">
           <?php include("menu.php") ?>
            </div>
<!---fiest end--->
<!--second -->
            <div class="col-sm-10  p-0 ">
                <div class="row bg-primary" style="height: 42px;"></div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                    <form action="changepasscode.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">old password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="opass">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">New Password</label>
    <input type=" password" class="form-control" id="exampleInputPassword1" name="npass">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Conform Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>


            </div>
        </div>
    </div>
</body>
</html>