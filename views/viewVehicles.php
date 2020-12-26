<?php

class ViewVehicles extends CrudController{

  public function showVehicleItems()
  {
    $data = $this->getVehicleItems();
    foreach ($data as $item) {
      echo $data['make_name']."<br>";
      echo $data['model_name']."<br>";
    }
  }
}

 ?>
