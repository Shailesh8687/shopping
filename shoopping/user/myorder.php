<?php
session_start();
if (!isset($_SESSION['user'])) 
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
            <?php include("navbar1.php"); ?>
        </div>
    </div>
    <div class="row">
       
    </div>
    <div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">P Image</th>
      <th scope="col">P Name</th>
      <th scope="col">P Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include("../admin/db.php");

        $sesid = $_SESSION['user'];
        
        // Fixed SQL syntax and security issue with quotes
        $sel = "SELECT * FROM `card` WHERE userid='$sesid'";
        $r = mysqli_query($conn, $sel);
        
        while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {
            $pid = $k['1'];
            $p_id=explode(',',$pid);
            foreach($p_id as $x)
            {
            $s = "SELECT * FROM product WHERE id='$x'";
            $row = mysqli_query($conn, $s);
            
            while ($fetch = mysqli_fetch_array($row, MYSQLI_BOTH)) 
            { // Fixed variable name here
                ?>
                
               
            <tr>
               <td><?php echo $fetch['0'] ?></td>
                <td><img src="../admin/product/<?php echo $fetch['7']; ?>" class="card-img-top" alt="..."></td>
                <td><?php echo $fetch['pname']; ?></td>
                <td><?php echo $fetch['pprice'] ?></td>
                <td> <a href="" class="btn btn-danger">order cancel</a></td>
                
            </tr>
    <?php
            }
        }
    }
        ?>
   
  </tbody>
</table>
<a href="checkout.php" class="btn btn-success">checkout</a>

</div>
<div class="col-sm-3"></div>


    </div>
</div>
</body>
</html>
