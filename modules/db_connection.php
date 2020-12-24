<?php

class DatabaseFunction {

  public function openConnection()
  {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'password';
    $db_name = 'Stock_List';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name) or die("Cannot connect: %s\n".$conn -> error);

    return $conn;
  }

  public function closeConnection($conn)
  {
    $conn -> close();
  }

}

?>
