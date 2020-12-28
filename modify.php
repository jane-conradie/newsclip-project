<?php
  include "controllers/db_connection.php";
  include "controllers/crud.php";
  include "views/viewStock.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Modify Stock</title>

  </head>
  <body>

    <nav class="navbar navbar-light navbar-expand-sm">
      <div class="container">
        <button class="navbar-toggler" type="button" name="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto" href="index.php"><img src="models/logo.png" alt="logo"> </img></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link"href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="stock.php"><span class="fa fa-info fa-lg"></span> Stock Overview</a></li>
            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Modify Stock</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>

    <div class="container">
    <div class="card text-center" style="padding:15px;">
        <h3>Stocklist</h3>
        </div><br><br>
      <div class="row">
        <div class="col-lg-8">
          <h4>All Stock Currently Available</h4>
        </div>
        <div class="col-lg-4 text-right">
          <a href="modules/createStock.php" role="button" class="btn btn-dark stock-btn">Add Stock</a>
          <a href="modules/deleteStock.php" role="button" class="btn btn-dark stock-btn">Delete Stock</a>
          <!-- <button type="button" class="btn btn-dark m-1 float-right" data-toggle="modal" data-target="#addStockModal"> -->
          <!-- <i class="fa fa-plus"></i> Add Stock</button> -->
          <!-- <button type="button" class="btn btn-dark m-1 float-right" data-toggle="modal" data-target="#removeStockModal"> -->
          <!-- <i class="fa fa-plus"></i> Remove Stock</button> -->
        </div>
      </div><br>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="table-responsive" id="tableData">
            <?php

            $stock = new ViewStock();
            $stock->showStockItems();
            $stock->closeConnection($stock);

            ?>

          </div>
        </div>
      </div>
    </div>

    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Vehicle</h1>
          </div>
        <div class="col-lg-6 col-md-12 text-md-right text-sm-center">
          <a href="modules/createVehicle.php" role="button" class="btn btn-dark vehicle-btn">Create Vehicle Item</a>
          <a href="modules/updateVehicle.php" role="button" class="btn btn-dark vehicle-btn">Update Vehicle Item</a>
          <a href="modules/deleteVehicle.php" role="button" class="btn btn-dark vehicle-btn">Delete Vehicle Item</a>
          </div>
          </div>
        </div>
        <br>
        <hr>
      </div>
    </div>

    <!-- <div class="modal" id="addStockModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add New Stock Item</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form id="addStockForm" action="controllers/crud.php/createStockItem()">
              <div class="form-group">
                <label for="id">Model ID: </label>
                <input type="text" class="form-control" name="id" placeholder="Enter id" required="">
              </div>
              <hr>
              <div class="form-group float-right">
                <button type="submit" class="btn btn-success" id="submit">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="removeStockModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Remove Stock Item</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form id="formData" >
              <div class="form-group">
                <label for="id">Model ID: </label>
                <input type="text" class="form-control" name="id" placeholder="Enter id" required="">
              </div>
              <hr>
              <div class="form-group float-right">
                <button type="submit" class="btn btn-success" id="submit">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <footer class="footer" id="footer">
        <div class="container">
           <div class="row">
                <div class="col-lg-6 col-md-12 text-lg-left text-md-center">
                    <p>© Copyright 2020 Newsclip</p>
                </div>
                <div class="col-lg-6 col-md-12 text-lg-right text-md-center">
                  <img src="models/fb.png" alt="fb">
                  <img src="models/li.png" alt="li">
                  <img src="models/tw.png" alt="tw">
                </div>
           </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
