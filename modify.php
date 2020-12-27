<?php
  include "controllers/db_connection.php";
  include "controllers/crud.php";
  include "views/viewStock.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>

    <h1>Stock</h1>

    <!-- dropdown with model id -->
    <!-- add and delete buttons for stock items -->

    <h1>Vehicle</h1>

    <a href="modules/createVehicle.php">Create Vehicle Item</a>
    <a href="modules/updateVehicle.php">Update Vehicle Item</a>
    <a href="modules/deleteVehicle.php">Delete Vehicle Item</a>

    <?php

    $conn = new CrudController();

    $stock = new ViewStock();
    $stock->showStockItems();
    $stock->closeConnection($stock);

    ?>
  </body>
</html>
