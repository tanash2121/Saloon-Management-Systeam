<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Register</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
       

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<?php
include "dbcity.php";
if($_SERVER['REQUEST_METHOD']=="POST")
include "dbcity.php";
error_reporting(0);

$user=$_POST['un'];
$pas=$_POST['pass'];
$mo=$_POST['mob'];

$q="INSERT INTO `register` ( `username`, `password`, `mobno`) VALUES ( '$user', '$pas', '$mo')";
$res=mysqli_query($con,$q);
if($res){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Registeration successfull </strong> now click on login .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}else{
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>something went wrong </strong> please feel details properly .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="container my-5">
<form action="register.php" method="post">
<form class="row g-3">

<div class="col-md-4">
    <label for="validationDefault03" class="form-label">username</label>
    <input type="text" class="form-control" name="un"  id="validationDefault03" required>
  </div>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">password</label>
    <input type="password" class="form-control" name="pass"  id="validationDefault03" required>
  </div>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">MobileNumber</label>
    <input type="text" class="form-control" name="mob"  id="validationDefault03" required>
  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  </form>
</div>


</body>
</html>