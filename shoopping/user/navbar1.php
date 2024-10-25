<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SHOPPING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
          <li class="nav-item">
          <a class="nav-link" href="#">user profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorder.php">my ordered</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="changepassword.php">change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
        
<?php
include("../admin/db.php");
// session_start();
$sesid=$_SESSION['user'];
$sel="select count(*) from card where userid='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

$ses=$_SESSION['user'];
$select="select count(*) from wishlist where userid='$sesid'";
$row=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($row,MYSQLI_BOTH);
?>
        <li class="nav-item">
          <a class="nav-link " href="cart.php" tabindex="-1" aria-disabled="true">Cart (<?php echo $k['0']?>)</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="wishlist.php" tabindex="-1" aria-disabled="true">Wishlist(<?php echo $fetch['0']?>)</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>