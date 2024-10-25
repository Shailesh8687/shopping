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
            </div>
        </div>
    </div>
</body>
</html>