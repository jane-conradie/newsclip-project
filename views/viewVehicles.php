<?php

class ViewVehicles extends CrudController{
  //generates accordions and populates them with data from the database
  public function showVehicleItems()
  {
    $data = $this->getVehicleItems();

    echo "<div class='accordion' id='accordionVehicle'>";
    $i=0;

    foreach ($data as $item) {
    $i++;
      echo "<div class='accordion-group'>
              <div class='accordion-heading ml-auto'>
                <a class='accordion-toggle btn' type='button' data-toggle='collapse' href='#collapse".$i."'>
                <h2 class='vehicle-heading'>".$item['make_name']."  ".$item['model_name']." </h2></a>
              </div>
              <div>
              <div id='collapse".$i."' class='accordion-body collapse'>
                <div class='accordion-inner'>
                <div class='row'>
                  <div class='col-lg-6'>
                  Model ID: ".$item['model_id']."
                  <br><br>
                  Features: ".$item['vehicle_features']."
                  <br><br>
                  </div>
                  <div class='col-lg-6 text-lg-right'>
                  Price: R".$item['vehicle_price']."
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <br><br>"
      ;
    }
}
}


 ?>
