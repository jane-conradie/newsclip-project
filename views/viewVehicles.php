<?php



class ViewVehicles extends CrudController{

  public function showVehicleItems()
  {
    $data = $this->getVehicleItems();

    echo "<div class='accordion' id='accordionVehicle'>";
    $i=0;

    foreach ($data as $item) {
    $i++;
      echo "<div class='accordion-group'>
              <div class='accordion-heading'>
                <a class='accordion-toggle btn' type='button' data-toggle='collapse' href='#collapse".$i."'>
                <h2>".$item['make_name']."  ".$item['model_name']." </h2></a>
              </div>
              <div>
              <div id='collapse".$i."' class='accordion-body collapse'>
                <div class='accordion-inner'>
                ".$item['vehicle_price']." ".$item['vehicle_features']."<br><br>
                </div>
              </div>
            </div>
          </div>"
      ;

    }

}
}


 ?>
