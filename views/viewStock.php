<?php

class ViewStock extends CrudController{

  //generates a table and populates it with the data from the database
  public function showStockItems()
  {
    $data = $this->getStockItems();

    echo "<table class='table'>
          <thead>
            <tr>
              <th scope='col'>Product ID:</th>
              <th scope='col'>Make Name:</th>
              <th scope='col'>Model Name:</th>
            </tr>
          </thead>
          <tbody>
    ";

    foreach ($data as $item) {
      echo "<tr><th scope='row'>" .$item['prod_id']."</td>
            <td>".$item['make_name']."</td>
            <td>".$item['model_name']."</td>";
    }

    echo "</tr></tbody></table>";
  }

}

 ?>
