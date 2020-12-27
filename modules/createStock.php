<?php

  include "../controllers/db_connection.php";
  include "../controllers/crud.php";

  $conn = new CrudController();

  echo "<form action='' method='post'>
    <label for='id'>Model ID: </label>
    <input type='text' name='id' id='id' placeholder='id'><br><br>
    <input type='submit' name='submit' value='Add Stock'>
  </form>";

  if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $query=$conn->createStockItem($id);
}


?>
