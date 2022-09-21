<html>
<head>
   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
*{box-sizing: border-box;
padding: 0;
margin: 0;
}
.card {
background:#EEEEEE;
width:400px;
height: 400px;
margin: 10px;}
.containercard{
display: flex;
justify-content: center;
 display:flex; flex-flow: wrap;  
    
    }
    .card-image {
background-color: aqua;
height: 250px;
width: 400px;
margin-bottom: 10px;
background-size: cover;
border-radius: 15px 15px 0 0;;
}
.beem{
background-image: url('beem.jfif') 
}
.tcross{
background-image: url('cross.jpg') 
}
.audiq5{
background-image: url('audiq5.jfif') 
}
.fortuner{
background-image: url('fortuner.jfif') 
}
.qash{
background-image: url('qash.jfif') 
}
.kia{
background-image: url('kia.jfif') 
}
.mini{
background-image: url('mini.jfif') 
}
.polo{
background-image: url('polo.jfif') 
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
  font-size: 12px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
   
}

.vbtn:hover {
  background: transparent;
  
}
#active{
    background-color:grey;
}
</style>
</head>

<body>

<div class="topnav" id="myTopnav">
  <a href="dash.php">Dashboard</a>
 
  <a href="addnew.php">Add Vehicle</a>
  <div class="dropdown">
       
    <button class="dropbtn"  id="active">Vehicles 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <ul>
    <li> <a href="vehicles.php" class="active">All Vehicles</a>
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

<section class="containercard" >
    <div class="card">
         <div class="card-image beem"></div>
         <h2>BMW 320d</h2>
         <h5> REG NO:<h5>ywsshdvg
         <h3>DIESEL</h3>
         <h4>2014</h4>
         <br>
           <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
    </div>
      <div class="card">
         <div class="card-image tcross"></div>
         <h2>VOLKSWAGEN T-CROSS</h2>
         <h5> REG NO:<h5>UJWWSSAV
         <h3>DIESEL</h3>
         <h4>2020</h4>
         <br>
             <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
      </div>
      <div class="card">
         <div class="card-image audiq5"></div>
         <h2>AUDI Q5</h2>
         <h5> REG NO:<h5>gdshsdjj
         <h3>DIESEL</h3>
         <h4>2022</h4>
         <br>
             <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
      </div><!-- comment -->
        <div class="card">
         <div class="card-image fortuner"></div>
         <h2>TOYOTA FORTUNER</h2>
         <h5> REG NO:<h5>adhgshds
         <h3>DIESEL</h3>
         <h4>2017</h4>
         <br>
             <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
    </div>
     
        <div class="card">
         <div class="card-image qash"></div>
         <h2>NISSAN QASHQAI</h2>
         <h5> REG NO:<h5>dsdfhdgw
         <h3>PETROL</h3>
         <h4>2016</h4>
         <br>
             <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
    </div>
        <div class="card">
         <div class="card-image kia"></div>
         <h2>KIA SELTOS</h2>
         
         <h5> REG NO:<h5>dfddgdgf
         <h3>PETROL</h3>
         <h4>2023</h4>
         <br>
             <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
        </div>
        <div class="card">
         <div class="card-image mini"></div>
         <h2>MINI COUNTRYMAN</h2>
         <h5> REG NO:<h5>ddbdfddb
         <h3>PETROL</h3>
         <h4>2018</h4>
         <br>
          <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
    </div>
        <div class="card">
         <div class="card-image polo"></div>
         <h2>VOLKSWAGEN POLO</h2>
         <h5> REG NO:<h5>hdcdfnfn
         <h3>PETROL</h3>
         <h4>2017</h4>
         <br>
         <a href="edit.php"> <button type="button" class="vbtn">EDIT</button></a>
 
    </div>
      </section>


</body>
</html>

