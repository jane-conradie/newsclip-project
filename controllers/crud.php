<?php

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
        $num_rows = $result->rowCount();

        if ($num_rows > 0){
          while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
          }
          return $data;
        }
  }

  public function createVehicleItem($make, $model, $price, $features)
  {
      $sql = "CALL CreateVehicleItem('".$make."', '".$model."', '".$price."', '".$features."')";
      $result = $this->openConnection()->query($sql);
      return $result;
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

  public function createStockItems()
  {

  }

  public function deleteStockItem()
  {
  }

  public function updateVehicleItem($id, $make, $model, $price, $features)
  {
    $sql = "CALL UpdateVehicleItem('".$id."','".$make."', '".$model."', '".$price."', '".$features."')";
    $result = $this->openConnection()->query($sql);
    return $result;
  }

  public function deleteVehicleItem($id)
  {
    $sql = "CALL DeleteVehicleItem('".$id."')";
    $result = $this->openConnection()->query($sql);
    return $result;
  }


}

 ?>
