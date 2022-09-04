<?php

$server="localhost";
$username="root";
$password="";
$database="citylook";


$con=mysqli_connect($server,$username,$password,$database);
if($con){

    echo "";
}
else{
    echo"problem";
}

?>