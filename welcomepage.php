<!DOCTYPE html>
<html>
<head>
    <title> Fleet Management System</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="styles.css">
</head>
<body onload="slider()">
    <div class="banner"></div>
<div class="slider">
<img src="bmwcover.jfif" id="slideImg">
</div>
<div class="overlay">
    <div class="navbar">
<div class="logo">
<img src="logotshepox.jpeg"> 
</div>
        <div class="content">
<h1>TSHEPO'S FLEET MANAGEMENT SYSTEM</h1>
<h3>The most convenient fleet management system for admins</h3>
<div>
<a href="signin.php"> <button type="button">GET STARTED</button></a>

</div>
</div>
</div> 
</div>
 

<script>
var slideImg = document.getElementById("slideImg");
var images = new Array(

"TRUCK.jfif",
"911.jfif",
"vclass.jfif"
);
var len = images.length;
var i= 0;
function slider(){
    if(i > len-1){
i= 0;
}
slideImg.src = images[i];
i ++;
setTimeout(' slider()',1000);
 
}
</script>
</body>
</html>
