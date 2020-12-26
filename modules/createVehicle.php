<?php

include "../controllers/db_connection.php";
include "../controllers/crud.php";

$conn = new CrudController();

echo "<form action='../modify.php' method='post'>
  <label for='make'>Make:</label>
  <input type='text' name='make' id='make' placeholder='Make'><br><br>
  <label for='model'>Model:</label>
  <input type='text' name='model' id='model' placeholder='Model'><br><br>
  <label for='price'>Price:</label>
  <input type='text' name='price' id='price' placeholder='R'><br><br>
  <label for='features'>Features:</label>
  <input type='text' name='features' id='features' placeholder='Features'><br><br>
  <input type='submit' name='submit' value='Add To Stock'>
</form>";

if (isset($_POST['submit'])){
  $make = $_POST['make'];
  $model = $_POST['model'];
  $price = $_POST['price'];
  $features = $_POST['features'];

  $conn->createVehicleItem($make, $model, $price, $features);
}

?>
