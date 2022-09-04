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
<title>Document</title>

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="customer.php">Customer Profiles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userdetail.php">Customer Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="register.php">register</a>
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


if($_SERVER['REQUEST_METHOD']=="POST")
include "dbcity.php";
error_reporting(0);
$doo=$_POST['nam'];
$mobno=$_POST['mob'];
$add=$_POST['add'];
$email=$_POST['email'];
$type=$_POST['type'];
$amount=$_POST['amount'];

$q="INSERT INTO `userprofile` ( `name`, `address`, `mobno`, `email`, `cuttingtype`, `amout`, `time`) VALUES ('$doo', '$add', '$mobno', '$email', '$type', '$amount', current_timestamp())";
$res=mysqli_query($con,$q);
if($res){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Customer profile saved successfully </strong> now click on Customer profiles to check.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}else
{

  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Complete All Coustomer Details </strong> .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<form action="userdetail.php" method="post">

<div class="container my-3">


  
<form class="row g-3">

<div class="col-md-4">
    <label for="validationDefault01" class="form-label">Customer FullName</label>
    <input type="text" class="form-control" id="validationDefault01"  name="nam" placeholder="FULL-NAME" required>
  </div>
 
 
  <br>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">MobileNumber</label>
    <input type="text" class="form-control" name="mob"  id="validationDefault03" required>
  </div>

  <br>

  

  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Address</label>
    <input type="text" class="form-control" name="add" id="validationDefault02" value="Indapur" required>
  </div>

  <br>

  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="validationDefault03" required>
  </div>
  
  <br>

  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Work done</label>
    <select class="form-select" name="type" id="validationDefault04"  required>
      <option >Cutting</option>
      <option>beard</option>
      <option selected>cuting+beard</option>
      <option>facial</option>
      <option>facial+beard</option>
      <option>facial+cutting+beard</option>
      
    </select>
  </div>
  
  <br>

  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Amount</label>
    <input type="text" class="form-control" name="amount" id="validationDefault02"  required>
  </div>
 
<br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
</form>

</div>
</form>
</body>
</html>