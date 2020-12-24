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

    list items here

    <?php

      include "modules/db_connection.php";

      $conn_object = new DatabaseFunction();
      $conn = $conn_object -> openConnection();



      $conn_object -> closeConnection($conn);

    ?>

    <a href="modify.php">Modify</a>

  </body>
</html>
