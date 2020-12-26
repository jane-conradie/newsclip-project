<?php

class CrudController extends DatabaseConnection{

  public function getVehicleItems()
  {
        $sql = "SELECT * FROM Vehicle";
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
      $sql = "INSERT INTO Vehicle (make_name, model_name, vehicle_price, vehicle_features) VALUES ('{$make}','{$model}','{$price}','{$features}')";
      $result = $this->openConnection()->query($sql);
  }

  public function getStockItems()
  {
    $sql = "SELECT * FROM Stock INNER JOIN Vehicle ON Stock.model_id = Vehicle.model_id";
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

  public function updateStockItems()
  {

  }

  public function deleteStockItems()
  {

  }


}

 ?>
