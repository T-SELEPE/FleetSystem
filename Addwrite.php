<html>
    <style>
        .border{
    border-color: #ff3333;
  
   text-align: center;
    -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 150px;
  width:500px;
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
  .top_link img {
    width: 28px;
    padding-right: 7px;
    margin-top: -3px;
}
    </style>   
    <div class="topnav" id="myTopnav">
  <a href="dash.php">Dashboard</a>
 
  <a href="addnew.php">Add Vehicle</a>
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

</html>
<div class="top_link"><a href="Addnew.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">RETURN</a></div>
<center><h1>ADD WRITTEN OFF VEHICLE</h1><center>
            
<fieldset class='field'>

    <form action="" method="POST">

  

      <center><h2>VEHICLE INFORMATION</h2><center>

    REGISTRATION NUMBER<br>

    <input type="text" name="Reg_no" class="border">

    <br><br>
      BRAND<br>

    <input type="text" name="brand" class="border">
    <br><br>

   MODEL<br>

    <input type="text" name="model" class="border">

    <br><br>

    
    <br><br>

    <input type="submit" name="submit" value="ADD" class="vbtn">
    <button class="vbtn"><a href="writtenoff.php">VIEW</a></button>
    </form>
  </fieldset>
  <?php 

include "connection.php";

  if (isset($_POST['submit'])) {

    $reg = $_POST['Reg_no'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    

    $query = "INSERT INTO `written_off`(`Reg_no`, `brand`, `model`) VALUES ('$reg','$brand','$model')";

    $data=mysqli_query($con,$query);
  if ($data) {
?>
<script type="text/javascript">
alert("Vehicle Added Successfully");
header('writtenoff.php');
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

</html>
  




