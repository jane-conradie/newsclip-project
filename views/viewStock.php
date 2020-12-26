<?php

class ViewStock extends CrudController{

  public function showStockItems()
  {
    $data = $this->getStockItems();
    foreach ($data as $item) {
      print_r($item['prod_id']." "
              .$item['make_name']." "
              .$item['model_name']."<br><br>");
    }
  }

}

 ?>
