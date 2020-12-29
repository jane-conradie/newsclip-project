//check that a valid ID was entered into the form to add stock
function addStockValidation(){

	var alertMessage = "";
  var regex = /^\d+$/;

	 var id = document.forms["add-Stock-Form"]["id"].value;

   var isValid = regex.test(id);
   if (!isValid) {
     alertMessage = "Please enter a valid ID number. \n";
     alert(alertMessage);
     return false;
   }
 }

//check that a valid ID was entered into the form to delete stock
function deleteStockValidation(){

  var alertMessage = "";
  var regex = /^\d+$/;

  var id = document.forms["delete-Stock-Form"]["id"].value;

  var isValid = regex.test(id);
    if (!isValid) {
      alertMessage = "Please enter a valid ID number. \n";
      alert(alertMessage);
      return false;
      }
}

//check that a valid ID was entered into the form to delete a vehicle
function deleteVehicleValidation(){

  var alertMessage = "";
  var regex = /^\d+$/;

  var id = document.forms["delete-Vehicle-Form"]["id"].value;

  var isValid = regex.test(id);
    if (!isValid) {
      alertMessage = "Please enter a valid ID number. \n";
      alert(alertMessage);
      return false;
      }
}

function createVehicleValidation(){

  var alertMessage = "";

  var regex = /^\d+$/;

  var make = document.forms["create-Vehicle-Form"]["make"].value;
  var model = document.forms["create-Vehicle-Form"]["model"].value;
  var price = document.forms["create-Vehicle-Form"]["price"].value;
  var features = document.forms["create-Vehicle-Form"]["features"].value;

}
