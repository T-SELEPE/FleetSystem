<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #EB1D36;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 23px;
}

.active {
  background-color: grey;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 23px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

.vbtn {
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 150px;
  text-shadow: 1px 1px 3px #666666;
  -webkit-box-shadow: 0px 10px 12px #666666;
  -moz-box-shadow: 0px 10px 12px #666666;
  box-shadow: 0px 10px 12px #666666;
  font-family: Arial;
  color: #ff3333;
  font-size: 16px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
   
}

.vbtn:hover {
  background: transparent;
  
}
.border{
    border-color: #ff3333;
  
   text-align: center;
    -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 150px;
  width:500px;
}
.field{
     
        background-size:cover;
        position:relative;
}
</style><!-- comment -->
<div class="topnav" id="myTopnav">
  <a href="dash.php">Dashboard</a>
 
  <a href="addnew.php" class="active">Add Vehicle</a>
  <div class="dropdown">
      
     
    
       
    <button class="dropbtn">Vehicles 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <ul>
    <li> <a href="vehicles.php" >All Vehicles</a>
        <a href="#">Type &raquo</a>
    <ul>
    
     <li><a href="petrolcars.php">Petrol</a></li>
      <li><a href="dieselcars.php">Diesel</a></li>
      <li><a href="write.php">Written-off</a></li>
      </ul>
    </div>
  </div> 
  <a href="#about">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

  
<!DOCTYPE html>

<html>

    <body> 
    

 <center><h1>ADD NEW VEHICLE</h1><center>
      <a href="ViewAndupdate.php"><ul><li><h4>CLICK TO VIEW AND UPDATE VEHICLE</h4></li><a/>
        <a href="addwrite.php"> <li><h4>CLICK TO QUERY WRITTEN-OFF VEHICLE</h4></li></ul><a/>
<fieldset class='field'>

    <form action="" method="POST">

  

      <center><h2>VEHICLE INFORMATION</h2><center>

    BRAND<br>

    <input type="text" name="brand" class="border">

    <br><br>
      MODEL<br>

    <input type="text" name="model" class="border">
    <br><br>

   REGISTRATION NUMBER<br>

    <input type="text" name="reg_no" class="border">

    <br><br>

    TANK TYPE<br>

    <input type="text" name="tank_type" class="border">

    <br><br>

    TANK CAPACITY<br>

    <input type="text" name="tank_capacity" class="border">
    <br><br>

    DEPARTMENT<br>

     <input type="text" name="department" class="border">
    <br><br>
    CURRENT OWNER<br>
     <input type="text" name="current_owner" class="border">
     <br><br><!-- comment -->
     PREVIOUS OWNER<br>
     <input type="text" name="prev_owner" class="border">
     <br><br>
     BRANCH<br>
     <input type="text" name="branch" class="border">
     <br><br><!-- comment -->
     
    
    <br><br>

    <input type="submit" name="submit" value="ADD" class="vbtn">
    <button class="vbtn"><a href="ViewAndupdate.php">VIEW</a></button>
    </form>
  </fieldset>

          <?php 

include "connection.php";

  if (isset($_POST['submit'])) {

    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $reg = $_POST['reg_no'];
    $tank_type = $_POST['tank_type'];
    $tank_capacity = $_POST['tank_capacity'];
    $department = $_POST['department'];
    $current_owner = $_POST['current_owner'];
    $prev_owner = $_POST['prev_owner'];
    $branch = $_POST['branch'];

    $query = "INSERT INTO `vehicle`(`brand`, `model`, `reg_no`, `tank_type`, `tank_capacity`, `department`, `current_owner`,`prev_owner`,`branch`) VALUES ('$brand','$model','$reg','$tank_type','$tank_capacity','$department','$current_owner','$prev_owner','$branch')";

    $data=mysqli_query($con,$query);
  if ($data) {
?>
<script type="text/javascript">
alert("Vehicle Added Successfully");
header('ViewAndupdate.php');
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Please try again");
</script>
<?php
}
}
?>


  





        </body>
</html>

