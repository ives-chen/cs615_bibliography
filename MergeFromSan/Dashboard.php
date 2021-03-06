<?php require_once('../Connections/connSQL.php'); ?>
<?php
mysqli_select_db($connSQL, $database_connSQL);
?>



<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   
   $('#Home').load("Home.php");
});
$(document).ready(function(){
   
   $('#CreateLibrary').load("CreateLibrary.html");
});
$(document).ready(function(){
   
   $('#OpenLibrary').load("OpenLibrary.php");
});
$(document).ready(function(){
   
   $('#Unfiled').load("Unfiled.php");
});
$(document).ready(function(){
   
   $('#DeleteLibrary').load("DeleteLibrary.html");
});
$(document).ready(function(){
   
   $('#Update').load("Update.html");
});
$(document).ready(function(){
   
   $('#Trash').load("DeleteTrash.php");
});
</script>
<body>

<div class="w3-container">
  

  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink w3-red w3-mobile" onclick="openCity(event,'Home')">Home</button>
    
    <div class="w3-dropdown-hover">
      <button class="w3-button w3-mobile">Library<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-dark-grey w3-mobile">
      <button class="w3-bar-item w3-button tablink w3-mobile" onclick="openCity(event,'OpenLibrary')">Open Library</button>
      <button class="w3-bar-item w3-button tablink w3-mobile" onclick="openCity(event,'CreateLibrary')">Create Library</button>
      <button class="w3-bar-item w3-button tablink w3-mobile" onclick="openCity(event,'Unfiled')">Unfiled</button>
      <button class="w3-bar-item w3-button tablink w3-mobile" onclick="openCity(event,'DeleteLibrary')">Delete library</button>
      </div>
    </div>
    

    <button class="w3-bar-item w3-button tablink w3-mobile" onclick="openCity(event,'Update')">Update Details</button>
    <button class="w3-bar-item w3-button tablink w3-mobile" onclick="openCity(event,'Trash')">Trash</button>
	<span class="w3-bar-item w3-right"><a href="Signin.html" style="text-decoration: none; color: white;">Logout</a></span>
  </div>
  
  <div id="Home" class="w3-container w3-border city">
    
  </div>

  <div id="OpenLibrary" class="w3-container w3-border city" style="display:none">
    
  </div>
  <div id="CreateLibrary" class="w3-container w3-border city" style="display:none">
    
  </div>
  <div id="DeleteLibrary" class="w3-container w3-border city" style="display:none">
     
  </div>
  <div id="Unfiled" class="w3-container w3-border city" style="display:none">
     
  </div>

  <div id="Update" class="w3-container w3-border city" style="display:none">
    
  </div>
  <div id="Trash" class="w3-container w3-border city" style="display:none">
    
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>



