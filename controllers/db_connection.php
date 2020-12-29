<?php

class DatabaseConnection {

  public function openConnection()
  {
    //Server information for database connection
    $db_details = 'mysql:dbname=Stock_List;host=localhost';
    $db_user = 'root';
    $db_password = 'password';

    //Check for successful database connection
    try {
      $conn = new PDO($db_details, $db_user, $db_password);
      $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;
      }
      catch (PDOException $e)
      {
        die("Error establishing a connection to the database.");
        $e -> getMessage();
    }
  }

  public function closeConnection($conn)
  {
    $conn = null;
  }

}

?>
