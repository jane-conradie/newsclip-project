<?php

class ViewVehicles extends CrudController{

  public function showVehicleItems()
  {
    $data = $this->getVehicleItems();

    while ($row = $data->fetch(PDO::FETCH_ASSOC)){
        echo "".$row['model_id']." "
            .$row['make_name']." "
            .$row['model_name']." "
            .$row['vehicle_price']." "
            .$row['vehicle_features']."<br><br> "
        ;
       }
}
}


 ?>
