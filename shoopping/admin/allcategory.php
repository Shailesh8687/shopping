<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("location:index.php");
}
if(isset($_SESSION['admin']))
// Empty if statement; either add content or remove this block

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
    <div class="container-fluid"> <!-- Fixed typo in 'container' -->
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">C ICON</th>
                                    <th scope="col">C Name</th>

                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("db.php");
                                $sel = "SELECT * FROM category";
                                $r = mysqli_query($conn, $sel);
                                while($k = mysqli_fetch_array($r, MYSQLI_BOTH))
                                {
                                    ?>
                                    <tr> <!-- Missing <tr> tag added here -->
                                        <td><?php echo htmlspecialchars($k['id']); ?></td>
                                        <td><img src="category/<?php echo htmlspecialchars($k['cicon']); ?>" alt="" height="150px" width="150px" /></td>
                                        <td><?php echo htmlspecialchars($k['cname']); ?></td>
                                        <td><?php echo htmlspecialchars($k['status']); ?></td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            &ensp;<button class="btn btn-danger">Delete</button>
                                        </td>
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
