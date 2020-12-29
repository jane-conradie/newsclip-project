<?php

  include "controllers/db_connection.php";
  include "controllers/crud.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

      <title>Home</title>
  </head>
  <body>

    <nav class="navbar navbar-light navbar-expand-sm">
      <div class="container">
        <button class="navbar-toggler" type="button" name="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto" href="index.php"><img src="models/logo.png" alt="logo"> </img></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link"href="index.php"> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="stock.php"> Stock Overview</a></li>
            <li class="nav-item"><a class="nav-link" href="modify.php"> Modify Stock</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>

    <?php

    //calling function that pre-populates the database using a stored procedure

    $db = new CrudController();
    $db->populateDatabase();
    $db->closeConnection($db);

     ?>

     <div class="container">
       <div class="row home-header">
         <div class="col-12 text-center">
           <h1>Welcome</h1>
         </div>
       </div>
       <div class="container home-container">
         <a href="stock.php" class="btn" role="button">
         <div class="row content-row">
           <div class="col-lg-6 col-md-12">
            <h2 class="home-heading">View Stock</h2>
           </div>
           <div class="col-lg-6 col-md-12">
             <img class="home-icon img-fluid" src="models/check-list.png" alt="check-list">
           </div>
         </div>
         </a>
         <br>
          <a href="modify.php" class="btn" role="button">
         <div class="row content-row ">
           <div class="col-lg-6 col-md-12">
            <img class="home-icon" src="models/edit-list.png" alt="edit-list">
           </div>
           <div class="col-lg-6 col-md-12">
            <h2 class="home-heading">Modify Stock</h2>
           </div>
         </div>
         </a>
       </div>
     </div>

     <footer class="footer" id="footer">
       <hr>
         <div class="container">

           <br>
            <div class="row">
                 <div class="col-lg-6 col-md-12 text-lg-left text-md-center">
                     <p>© Copyright 2020 Newsclip</p>
                 </div>
                 <div class="col-lg-6 col-md-12 text-lg-right text-md-center">
                   <img src="models/fb.png" alt="fb">
                   <img src="models/li.png" alt="li">
                   <img src="models/tw.png" alt="tw">
                 </div>
            </div>
         </div>
     </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
