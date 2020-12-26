<?php

  include "controllers/db_connection.php";
  include "controllers/crud.php";
  include "views/viewVehicles.php";

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

    <div class="nav">

    </div>

    <?php

    $vehicle = new ViewVehicles();
    $vehicle->showVehicleItems();

     ?>

    <a href="views/modify.php">Modify</a>

  </body>
</html>
