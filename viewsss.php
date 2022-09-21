 <style>
    .vbtn {
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 170px;
 
  font-family: Arial;
  color: #ff3333;
  font-size: 16px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;

   
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
<?php include "connection.php"?>
<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['id']))
    {
      $id ='id'; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query= "SELECT * FROM vehicle WHERE id = '$id'";
      $result= mysqli_query($con,$query);
 
      while($row = mysqli_fetch_array($result))
        {
          $id = $row['id'];
             $brand = $row['brand'];
    $model = $row['model'];
    $reg = $row['reg_no'];
    $tank_type = $row['tank_type'];
    $tank_capacity = $row['tank_capacity'];
    $department = $row['department'];
    $current_owner = $row['current_owner'];
    $prev_owner = $row['prev_owner'];
    $branch = $row['branch'];

        }
  
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
     $id=$_POST['id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $reg = $_POST['reg_no'];
    $tank_type = $_POST['tank_type'];
    $tank_capacity = $_POST['tank_capacity'];
    $department = $_POST['department'];
    $current_owner = $_POST['current_owner'];
    $prev_owner = $_POST['prev_owner'];
    $branch = $_POST['branch'];

      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE vehicle SET id='$id',brand='$brand', model='$model', reg_no='$reg', tank_type='$tank_type', tank_capacity='$tank_capacity', department='$department', current_owner='$current_owner',prev_owner='$prev_owner',branch=' $branch' WHERE id='$id'"; 
      $update = mysqli_query($con, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>
<fieldset class='field'>

    <form action="" method="POST">

  

      <center><h2>UPDATE VEHICLE</h2><center>
              
              ID<br>

    <input type="text" name="id" class="border">
    <br><br>


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

    <input type="submit" name="update" value="UPDATE" class="vbtn">
    <button class="vbtn"><a href="ViewAndupdate.php">VIEW</a></button>
    </form>
  </fieldset>