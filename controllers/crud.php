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

  public function getStockItems()
  {

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
