<?php

  include "controllers/db_connection.php";
  include "controllers/crud.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
    <?php

    $db = new CrudController();
    $db->populateDatabase();
    $db->closeConnection($db);

     ?>
     <div class="container">
       <div class="sidenav">
         <img class="nav-logo" src="models/logo.png" alt="logo">
         <div class="sidenav-links">
           <a href="stock.php">Stock Overview</a>
           <a href="modify.php">Modify Stock</a>
         </div>
         <div class="footer-icons">
           <img src="models/fb.png" alt="fb">
           <img src="models/li.png" alt="fb">
           <img src="models/tw.png" alt="fb">
         </div>
       </div>
     <div class="welcome">
       <h1>Welcome!</h1>
     </div>
     <div class="home-links">
       <a href="#"></a>
     </div>
   </div>


        <a href="stock.php" role="button" class="btn">View Stock</a>


        <a href="modify.php" role="button" class="btn">Modify Stock</a>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
