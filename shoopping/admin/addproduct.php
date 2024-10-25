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
                    <form action="pcode.php"  method="post" enctype="multipart/form-data">
  <div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Choose category</label>
 <select  id="" class="form-control" name="cid" >
    <?php
    include("db.php");
    $sel="select * from category";
    $r=mysqli_query($conn,$sel);
    while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
{
 ?>
 <option value="<?php echo $k['0'] ?>"><?php echo $k['2'] ?></option>
 <?php
}
?>

 </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pprice">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Offer Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="poprice">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Short Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="psdesc">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Long Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pldesc">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image-1</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="p1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image-2</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="p2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image-3</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="p3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image-4</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="p4">
  </div>
  
  
  
  
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>