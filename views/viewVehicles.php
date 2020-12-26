<?php

class ViewVehicles extends CrudController{

  public function showVehicleItems()
  {
    $data = $this->getVehicleItems();
    foreach ($data as $item) {
      print_r($item['model_id']." "
              .$item['make_name']." "
              .$item['model_name']." "
              .$item['vehicle_price']." "
              .$item['vehicle_features']."<br><br>");
    }
  }

}

 ?>
