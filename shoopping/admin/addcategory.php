<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("location:index.php");
    exit(); // Ensure the script stops after redirection
}
// The second if statement is redundant since you are already checking for the session above.
// You can remove this or add any additional code if needed.
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
    <div class="container-fluid"> <!-- Fixed typo here -->
        <div class="row ">
            <!-- First -->
            <div class="col-sm-2 p-0 ">
                <?php include("menu.php") ?>
            </div>
            <!-- First end -->
            <!-- Second -->
            <div class="col-sm-10 p-0 ">
                <div class="row bg-primary" style="height: 42px;"></div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form action="ccode.php" method="post" enctype="multipart/form-data">
                           
                            <div class="mb-3">
                                <label for="categoryIcon" class="form-label">Category Icon</label>
                                <input type="file" class="form-control" id="categoryIcon" name="file" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" name="cname" required>
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
