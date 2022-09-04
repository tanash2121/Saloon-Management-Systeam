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

    <title>Customer details</title>
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

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Customer_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">mobile_number</th>
      <th scope="col">Email</th>
      <th scope="col">Cutting_type</th>
      <th scope="col">Amount</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Delete the data</th>
    </tr>
  </thead>
  <tbody>
   
  <?php

include "dbcity.php";

$q="SELECT * FROM `userprofile`";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
if($num>0){
    while ($row=mysqli_fetch_assoc($res)) {
      echo"  <tr>
        <th scope='row'>".$row['uid']."</th>
        <td>".$row['name']."</td>
        <td>".$row['address']."</td>
        <td>".$row['mobno']."</td>
        <td>".$row['email']."</td>
        <td>".$row['cuttingtype']."</td>
        <td>".$row['amout']."</td>
        <td>".$row['time']."</td>
        <td><a href='customer.php?idd=$row[uid]'><button type='button' class='btn btn-danger'>Delete</button></a></td>

      </tr>";  
    }
}

?>
   
  </tbody>
</table>

<?php
    
    if($_SERVER['REQUEST_METHOD']=="GET") {
include "dbcity.php";

error_reporting(0);
$idd=$_GET['idd'];
$q="DELETE FROM `userprofile` WHERE `uid`='$idd'";
$res=mysqli_query($con,$q);

if ($res) {
echo "";
}
else
{
  echo "error";
}
  }
  
?>


</body>
</html>