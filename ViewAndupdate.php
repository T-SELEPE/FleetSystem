<style>
    .vbtn {
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 150px;
 
  
  font-family: Arial;
  color: #ff3333;
  font-size: 13px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  border-color: black;
  border:1px;
   
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
}
*{box-sizing: border-box;
padding: 0;
margin: 0;
}
.tborder{border-color: #ff3333;
  border-radius: 10px;
  table-layout: auto;
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
    <li> <a href="vehicles.php">All Vehicles</a>
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

<div class="top_link"><a href="Addnew.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">RETURN</a></div>
<div style="padding-left:16px">
 
</div>
<br>
<center><h1>VIEW AND UPDATE</h1><center> <br>
       

<?php include 'connection.php'; ?>
<table class="tborder" border="1px" cellpadding="20px" cellspacing="
20px">
    <tr>
<th>BRAND</th>
<th>MODEL</th>
<th>REGISTRATION NUMBER</th>
<th>TANK TYPE</th>
<th>TANK CAPACITY</th>
<th>DEPARTMENT</th>
<th>CURRENT OWNER</th>
<th>PREVIOUS OWNER</th>
<th>BRANCH</th>
<th colspan="2">Actions</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","myfleet_Database");
$result=mysqli_query($con,"select * from vehicle");
while($row=mysqli_fetch_array($result))
{
     ?>  
    <tr>
  <td><?php echo $row["brand"]; ?></td>
<td><?php echo $row["model"]; ?></td>
<td><?php echo $row["reg_no"]; ?></td>
<td><?php echo $row["tank_type"]; ?></td>
<td><?php echo $row["tank_capacity"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["current_owner"]; ?></td>
<td><?php echo $row["prev_owner"]; ?></td>
<td><?php echo $row["branch"]; ?></td>
  <td><a class="vbtn" href="viewsss.php?id=<?php echo
$row['id']; ?>">UPDATE</a></td>
    
</tr>
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
<?php
}




{
?>

<?php
}
?>
</table>