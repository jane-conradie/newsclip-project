//check that a valid ID was entered into the form to add stock
function addStockValidation(){

	var alertMessage = "";

  //regular expression to check that the ID is only an integer number with no spaces, also checks for a blank entry
  var regex = /^\d+$/;

	 var id = document.forms["add-Stock-Form"]["id"].value;

   //testing the user input with the regular expression
   var isValid = regex.test(id);
   if (!isValid) {
     alertMessage = "Please enter a valid ID number. Ensure that there are no spaces and that field is not empty.";
     alert(alertMessage);
     return false;
   }
 }

//check that a valid ID was entered into the form to delete stock
function deleteStockValidation(){

  var alertMessage = "";

  //regular expression to check that the ID is only an integer number with no spaces, also checks for a blank entry
  var regex = /^\d+$/;

  var id = document.forms["delete-Stock-Form"]["id"].value;

  //testing the user input with the regular expression
  var isValid = regex.test(id);

    if (!isValid) {
      alertMessage = "Please enter a valid ID number. Ensure that there are no spaces and that field is not empty.";
      alert(alertMessage);
      return false;
      }
}

//check that a valid ID was entered into the form to delete a vehicle
function deleteVehicleValidation(){

  var alertMessage = "";

  //regular expression to check that the ID is only an integer number with no spaces, also checks for a blank entry
  var regex = /^\d+$/;

  var id = document.forms["delete-Vehicle-Form"]["id"].value;

  //testing the user input with the regular expression
  var isValid = regex.test(id);

    if (!isValid) {
      alertMessage = "Please enter a valid ID number. Ensure that there are no spaces and that field is not empty.";
      alert(alertMessage);
      return false;
      }
}

//check that all fields have input and that the price has only an integer input
function createVehicleValidation(){

  var alertMessage = "";

  //regular expression to check that the price is only an integer number with no spaces, also checks for a blank entry
  var regex = /^\d+$/;

  var make = document.forms["create-Vehicle-Form"]["make"].value;
  var model = document.forms["create-Vehicle-Form"]["model"].value;
  var price = document.forms["create-Vehicle-Form"]["price"].value;
  var features = document.forms["create-Vehicle-Form"]["features"].value;

  //testing the user input with the regular expression
  var isValid = regex.test(price);

  if (!isValid) {
      alertMessage = "Please enter a valid price. Ensure that there are no spaces and that field is not empty.";
      alert(alertMessage);
      header('Location: createVehicle.php')
      return false;
      }

  if (make == "" || model == "" || features == "") {
      alertMessage = "Fields must not be empty.";
      alert(alertMessage);
      return false;
      }

}

//check that all fields have input and that the price, and ID has only an integer input
function updateVehicleValidation(){

  var alertMessage = "";

  //regular expression to check that the price is only an integer number with no spaces, also checks for a blank entry
  var regex = /^\d+$/;

  var id = document.forms["update-Vehicle-Form"]["id"].value;
  var make = document.forms["update-Vehicle-Form"]["make"].value;
  var model = document.forms["update-Vehicle-Form"]["model"].value;
  var price = document.forms["update-Vehicle-Form"]["price"].value;
  var features = document.forms["update-Vehicle-Form"]["features"].value;

  //testing first the user input with the regular expression
  var isValid = regex.test(id);

  if (!isValid) {
      alertMessage = "Please enter a valid ID. Ensure that there are no spaces and that field is not empty.";
      alert(alertMessage);
      return false;
      }

  //testing the second user input with the regular expression
  isValid = regex.test(price);

  if (!isValid) {
    alertMessage = "Please enter a valid price. Ensure that there are no spaces and that field is not empty.";
    alert(alertMessage);
    return false;
  };

  if (make == "" || model == "" || features == "") {
      alertMessage = "Fields must not be empty.";
      alert(alertMessage);
      return false;
      }

}
