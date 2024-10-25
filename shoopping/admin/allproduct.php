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
                    <table class="table table-border ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">P Name</th>
      <th scope="col">P Price</th>
      <th scope="col">PO Price</th>
      <th scope="col">PS Desc</th>
      <th scope="col">PL Desc</th>
      <th scope="col">Image-1</th>
      <th scope="col">Image-2</th>
      <th scope="col">Image-3</th>
      <th scope="col">Image-4</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("db.php");
    $sel="select * from product";
    $r=mysqli_query($conn,$sel);
    while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
    {
    ?>
    <tr>
      <td><?php echo $k['0'] ?></td>
      <td><?php echo $k['2'] ?></td>
      <td><?php echo $k['3'] ?></td>
      <td><?php echo $k['4'] ?></td>
      <td><?php echo $k['5'] ?></td>
      <td><?php echo $k['6'] ?></td>
     
      <td> <img src="product/<?php echo $k['7'] ?>" height="150px"; width="150px"></td>
      <td> <img src="product/<?php echo $k['8'] ?>" height="150px"; width="150px"></td>
      <td> <img src="product/<?php echo $k['9'] ?>" height="150px"; width="150px"></td>
      <td> <img src="product/<?php echo $k['10'] ?>" height="150px"; width="150px"></td>
      <td><?php echo $k['11'] ?></td>
    </tr>
    <?php
    }
    ?>
     
  </tbody>
</table>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>