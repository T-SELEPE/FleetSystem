<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="styles.css">
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
#active{
    background-color:grey;
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
.kiawrite{
background-image: url('kiawrite.jfif') 
}
.fordwrite{
background-image: url('fordwrite.jpg') 
}
.volkwrite{
background-image: url('volkwrite.jfif') 
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="dash.php">Dashboard</a>
 
  <a href="addnew.php">Add Vehicle</a>
  <div class="dropdown">
       
    <button class="dropbtn" id="active">Vehicles 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <ul>
    <li> <a href="vehicles.php">All Vehicles</a>
        <a href="#">Type &raquo</a>
    <ul>
    
     <li><a href="petrolcars.php">Petrol</a></li>
      <li><a href="dieselcars.php">Diesel</a></li>
      <li><a href="write.php" class="active">Written-off</a></li>
      </ul>
    </div>
  </div> 
  <a href="#about">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  
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
         <div class="card-image kiawrite"></div>
         <h2>NISSAN ALMERA</h2>
          <h5> REG NO:ywgwddvsd<h5>
                  <br>
                  <br>
         <h1>WRITE-OFF</h1>
       
        </div>
        <div class="card">
         <div class="card-image volkwrite"></div>
         <h2>VOLVO SENATO</h2>
          <h5> REG NO:sjjbcbdgs<h5>
                  <br>
                  <br>
                  <h1>WRITE-OFF</h1>
         
      
    </div>
        <div class="card">
         <div class="card-image fordwrite"></div>
         <h2>RENAULT CLIO</h2>
          <h5> REG NO:sgncnjjmk<h5>
                  <br>
                  <br>
          <h1>WRITE-OFF</h1>
        
 
    </div>
</section>

</body>
</html>

