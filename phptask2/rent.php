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
  $image= $_POST["image"];
$model= $_POST["model"];
$number= $_POST["number"];
$seat= $_POST["seat"];
$rent= $_POST["rent"];

$sql1= "INSERT INTO agencydata (image, model, number, seat, rent) VALUE ('$image', '$model', '$number', '$seat', '$rent' )";

$result1= mysqli_query($con, $sql1);

if(!$result1)
{
 echo " sql error occur: ".mysqli_error();
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
    <title>add car</title>
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
              <a href="add.html">  <button type="button" class="btn btn-danger">ADD CAR</button></a>
            </ul>
           
          </div>
        </div>
      </nav>


      <div class="formbig">
        <h1 style="text-align: center">HELLO! Search car here👇</h1>
      <?php

        $sql2="SELECT * from agencydata";
        $result2= mysqli_query($con, $sql2);

        if(!$result2)
        {
         echo " sql error occur: ".mysqli_error();
        }
         while($temp=mysqli_fetch_assoc($result2))
         {
          ?>
          <div class="form">  
          <?php
          echo "<div class='form1'>
          <div><strong>car image: </strong> <img src='".$temp['image']."' alt='' width= 100px height= 80px></div>
          <div><strong>car model: </strong> ".$temp['model']."<button type='button' class='btn btn-warning'>Rent Car</button> </div>
        </div>
        <hr>
        <div class='form2'>
          <div ><strong>car number: </strong>".$temp['number']."</div>
          <div><strong>NO. of seat: </strong>".$temp['seat']."</div>
          <div><strong>Rent of car: </strong>".$temp['rent']."</div>
        </div>";
           ?>
            </div>
           <?php
         }
        
        ?>
        
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>