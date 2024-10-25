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
              <form action="profilecode.php" method="post"  enctype="multipart/form-data">

              <?php
              include("db.php");
              $sesid=$_SESSION['admin'];
              $Sel="select * from admintbl where email='$sesid'";
              $r=mysqli_query($conn,$Sel);
              $k=mysqli_fetch_array($r,MYSQLI_BOTH);
              ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">profile picture</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="file" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $k['name'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $k['email'] ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $k['password'] ?>" readonly>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
              </div>
              <div class="col-sm-3">
<img src="picture/<?php echo $k['profile'] ?>" alt="" height="200px" width="200px" class="img-thumbnail"/>
              </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>