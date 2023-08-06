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

  if($_POST['table']== 'customer'){
 $email1= $_POST["email"];
$psw1= $_POST["psw"];

$sql1= "SELECT * FROM customer where email='$email1'";

$result1= mysqli_query($con, $sql1);

if(mysqli_num_rows($result1 )== 0)
 {
  echo "<h1 style='text-align: center;'>you have not Registration <br>
  OR incorrect password and email <br> <a href='home.php'> <strong>LOGIN AGAIN</strong>👈👈👈👈 </a></h1>  ";
  exit;
 }

}

if($_POST['table']=='agency'){
  $email2= $_POST["email"];
 $psw2= $_POST["psw"];
 
 $sql2= "SELECT * FROM agency where email='$email2'";
 
 $result2= mysqli_query($con, $sql2);
 
 
 if(mysqli_num_rows($result2 )== 0)
 {
  echo "<h1 style='text-align: center;'>you have not Registration <br>
  OR incorrect password and email <br> <a href='home.php'> <strong>LOGIN AGAIN</strong> </a></h1>  ";
  exit;
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
                <a class="link nav-link active" aria-current="page" href="home1.php">Home</a>
              </li>
      <li class="nav-item">
          <a class="link nav-link active" aria-current="page" href="home.php">Log Out</a>
        </li>
      
      </ul>

      
    </div>
  </div>
</nav>

<h1 style="text-align: center">List Of Car You Add</h1>
<hr>
<h1 style="text-align: center">List of Car For Rent</h1>
<button type="button" style="width: 100px; margin-left:620px;" class="btn btn-info">Payment</button>





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








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>