<?php

  include "../controllers/db_connection.php";
  include "../controllers/crud.php";

  $conn = new CrudController();

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">

    <script type="text/javascript" src="../scripts/script.js"></script>

    <title>Update Vehicle Details</title>
  </head>
  <body>
    <nav class="navbar navbar-light navbar-expand-sm">
      <div class="container">
        <button class="navbar-toggler" type="button" name="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto" href="../index.php"><img src="../models/logo.png" alt="logo"> </img></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link"href="../index.php"> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../stock.php"> Stock Overview</a></li>
            <li class="nav-item"><a class="nav-link" href="../modify.php"> Modify Stock</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>

    <div class="container">
    <div class="card text-center" style="padding:15px;">
        <h3>Update Vehicle Details</h3>
        </div><br><br>
      <div class="row">
        <div class="col-lg-12 text-center">
          <?php
            echo "<form action='' method='post' id='update-Vehicle-Form' onsubmit='return updateVehicleValidation()'>
              <label for='id'>Vehicle Model ID:</label>
              <input type='text' name='id' id='id' placeholder='ID'><br><br>
              <label for='make'>Make:</label>
              <input type='text' name='make' id='make' placeholder='Make'><br><br>
              <label for='model'>Model:</label>
              <input type='text' name='model' id='model' placeholder='Model'><br><br>
              <label for='price'>Price:</label>
              <input type='text' name='price' id='price' placeholder='R'><br><br>
              <label for='features'>Features:</label>
              <input type='text' name='features' id='features' placeholder='Features'><br><br>
              <a class='btn btn-dark form-btn' href='../modify.php'>Back</a>
              <input class='btn btn-dark form-btn' type='submit' name='submit' value='Update Details'>
              </form>";

              //calls on updateVehicleItem controller to update all the fields in the table with the data from the above form
              if (isset($_POST['submit'])){
                $id = $_POST['id'];
                $make = $_POST['make'];
                $model = $_POST['model'];
                $price = $_POST['price'];
                $features = $_POST['features'];

                $query=$conn->updateVehicleItem($id,$make, $model, $price, $features);
              }
           ?>

        </div>
      </div>
    </div>

<footer class="footer fixed-bottom" id="footer">
  <hr>
    <div class="container">
       <div class="row">
            <div class="col-lg-6 col-md-12 text-lg-left text-md-center">
                <p>© Copyright 2020 Newsclip</p>
            </div>
            <div class="col-lg-6 col-md-12 text-lg-right text-md-center">
              <img src="../models/fb.png" alt="fb">
              <img src="../models/li.png" alt="li">
              <img src="../models/tw.png" alt="tw">
            </div>
       </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
