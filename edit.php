<!DOCTYPE html>

 



<html>
    <style>
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
  width:80px
   
}

.vbtn:hover {
  background: transparent;
  
}
.up{
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
  width:110px
}
.border{
    border-color: #ff3333;
  font-family: arial;
   text-align: center;
    -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 150px;
  width:600px;
}
</style>
<head>
<title>Edit User</title>
<div class="top_link"><a href="ViewAndupdate.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">RETURN</a></div>
</head>
  
<body>
     

  

      <center><h1>UPDATE VEHICLE</h1><center>
              <fieldset>
                  <form action="" method="post">
    BRAND<br>

    <input type="text" name="brand" class="border" >

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
     <input type="text" name="current_owner" class="border" >
     <br><br><!-- comment -->
     PREVIOUS OWNER<br>
     <input type="text" name="prev_owner" class="border">
     <br><br>
     BRANCH<br>
     <input  type="text" name="branch" class="border">
     <br><br><!-- comment -->
     
    
    <br><br>

    <input type="submit" name="update" value="UPDATE" class="up">
    <button class="vbtn"><a href="ViewAndupdate.php">VIEW</a></button>
    </form>
    </fieldset>

</body>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'myfleet_Database');
if(isset($POST['update']))
{
  $id=$_POST['id'];
    
  $query= "UPDATE `model`SET brand='$_POST[brand]', model='$_POST[model]', reg_no='$_POST[reg_no]', tank_type='$_POST[tank_type]', tank_capacity='$_POST[tank_capacity]', department='$_POST[department]', current_owner='$_POST[current_owner]',prev_owner='$_POST[prev_owner]',branch='$_POST[branch]' WHERE id='$id'"; 
   $query_run= mysqli_query($connection,$query);
   
   if($query_run)
   {
       echo '<script type= "text/javascript"> alert("Vehicle Updated Successfully") </script>';
       header('ViewAndupdate.php');
   }
   else
   {
  echo '<script type= "text/javascript"> alert("Vehicle Not Successfully") </script>';
  }
  }
?>  
