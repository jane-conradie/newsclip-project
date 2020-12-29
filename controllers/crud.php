<?php

//CrudController contains all code needed for data processing and communication. Any data from the database that is needed gets fetched from here.
//All data is processed via stored procedures contained in the database.

class CrudController extends DatabaseConnection{

  public function populateDatabase()
  {
        $sql = 'CALL PopulateDatabase()';
        $result = $this->openConnection()->query($sql);
  }

  public function getVehicleItems()
  {
        $sql = 'CALL GetVehicles()';
        $result = $this->openConnection()->query($sql);
        return $result;
  }

  public function createVehicleItem($make, $model, $price, $features)
  {
      $sql = "CALL CreateVehicleItem('".$make."', '".$model."', '".$price."', '".$features."')";
      try {
        $result = $this->openConnection()->query($sql);
        return $result;
      } catch (PDOException $e) {
        //do not print error because Javascript alert will tell the user what is wrong
      }
  }

  public function getStockItems()
  {
    $sql = 'CALL GetStock()';
    $result = $this->openConnection()->query($sql);
    $num_rows = $result->rowCount();

    if ($num_rows > 0){
      while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
      }
      return $data;
    }
  }

  public function createStockItem($id)
  {
    $sql = "CALL AddStock('".$id."')";
    try {
      $result = $this->openConnection()->query($sql);
      return $result;
    } catch (PDOException $e) {
      //do not print error because Javascript alert will tell the user what is wrong
    }
  }

  public function deleteStockItem($id)
  {
    $sql = "CALL RemoveStock('".$id."')";
    try {
      $result = $this->openConnection()->query($sql);
      return $result;
    } catch (PDOException $e) {
      //do not print error because Javascript alert will tell the user what is wrong
    }
  }

  public function updateVehicleItem($id, $make, $model, $price, $features)
  {
    $sql = "CALL UpdateVehicleItem('".$id."','".$make."', '".$model."', '".$price."', '".$features."')";
    try {
      $result = $this->openConnection()->query($sql);
      return $result;
    } catch (PDOException $e) {
    }
  }

  public function deleteVehicleItem($id)
  {
    $sql = "CALL DeleteVehicleItem('".$id."')";

    try {
      $result = $this->openConnection()->query($sql);
      return $result;
    } catch (PDOException $e) {
      //do not print error because Javascript alert will tell the user what is wrong
    }
  }
}

 ?>
