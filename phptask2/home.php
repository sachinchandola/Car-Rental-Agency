<?php

$host="localhost";
$user="root"; //mysql user name
$password="";
$database="carrent";

$con= mysqli_connect($host, $user, $password, $database);

if(!$con){
    echo "connect error occur: ".mysqli_connect_error();
}



if($_SERVER['REQUEST_METHOD'] == 'POST'){

  if($_POST['customer']== 'customer'){
 $email1= $_POST["email"];
$psw1= $_POST["psw"];

$sql1= "INSERT INTO customer (email, password) VALUE ('$email1', '$psw1')";

$result1= mysqli_query($con, $sql1);

if(!$result1)
{
 echo " sql error occur: ".mysqli_error();
}
}

if($_POST['customer']=='agency'){
  $email2= $_POST["email"];
  $contact2=$_POST["contact"];
 $psw2= $_POST["psw"];
 
 $sql2= "INSERT INTO agency (email, contact, password) VALUE ('$email2', '$contact2', '$psw2')";
 
 $result2= mysqli_query($con, $sql2);
 
 if(!$result2)
 {
  echo " sql error occur: ".mysqli_error();
 }
 }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CARrent</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">CARrent</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="link nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="link nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalc">Registration <br> for rent</a>
        </li>
        <li class="nav-item">
          <a class="link nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModala">Registration <br> for agency</a>
        </li>
      
      </ul>
      
       
        <button class="btn btn-outline-success" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModall">Login</button>
      
    </div>
  </div>
</nav>

<div class="about">
        <div>
          <h1 class="about1">CARrent</h1>
          <h4 class="about2">Great deals at great prices, from the biggest <br> car companies</h4>
         <button type="button" class="btn btn-success about3" data-bs-toggle="modal" data-bs-target="#exampleModall">
          Add new cars
          </button>
       <button type="button" class="btn btn-success about3" data-bs-toggle="modal" data-bs-target="#exampleModall" >
          Available cars to rent
          </button></a> 
        </div>
        <img
          class="img1"
          src="car.jpg"
          alt=""
        
        />
      </div>


<div class="foot">
        <div class="foot1">
          <div>
            <h1>CARrent</h1>
          </div>
          <div>
            <h6>For customers</h6>
            <br />
            Overview <br />
            Startup car <br />
            low budget car <br />
            Featured <br />
            costly car <br />
            our Startups <br />
            Remote
          </div>
          <div>
            <h6>For agency</h6> <br />
            Overview <br />
            agency Pro <br />
            Curated <br />
            agencyCloud <br />
            agency about <br />
            Pricing
          </div>
          <div>
            <h6>About us</h6>
            <br />
            About <br />
            AngelList Venture <br />
            Help <br />
            Blog <br />
            Terms & Risks <br />
            Privacy & Cookies
          </div>
        </div>
        <div class="foot2">
          <div>
            Copyright © 2023 carrent (formerly AngelList Talent). All rights
            reserved.
          </div>
          <div>
            Browse by: technology, car, showroom, mexico, etc
          </div>
        </div>
      </div>








        <!-- customer modal -->

      <div class="modal fade" id="exampleModalc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration here to <strong> RENT CAR </strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="/phptask2/home.php" method="post">
  

  <div class="container">
  <label for="uname"><b>email</b></label>
    <input type="email" placeholder="Enter email@gmail.com" name="email" required>
     

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <input type="hidden" name="customer" value="customer">
    <button type="submit">Sign Up</button>  
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>
  
<!-- agency modal -->
<div class="modal fade" id="exampleModala" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration here to <strong> ADD CAR </strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="home.php" method="post">
  

  <div class="container">
  <label for="uname"><b>email</b></label>
    <input type="email" placeholder="Enter email@gmail.com" name="email" required>
     
    <label for="psw"><b>Contact number</b></label>
    <input type="number" placeholder="Enter Password" name="contact" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <input type="hidden" name="customer" value="agency">
    <button type="submit">Sign Up</button>  
  </div>
</form>

      </div>
     
    </div>
  </div>
</div>

<!-- login modal -->
<div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login here</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="home1.php" method="post">
  
      

  <div class="container">
  <label for="cars"><b>Your are :  </b></label>

<select name="table" id="cars">
  <option value="customer">customer</option>
  <option value="agency">agency</option>
</select>
 
    <label for="uname"><b>email</b></label>
    <input type="email" placeholder="Enter email@gmail.com" name="email" required>
     

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>  
  </div>
</form>

  <h1 style="text-align: center;">First Registration </h1>
  <div style="display: flex; margin-left: 85px;">
 
          <a class="link nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalc">Registration <br> for customers</a>
        
      
          <a class="link nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModala">Registration <br> for agency</a>
        
  </div>
      </div>
      
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>