<style>
.submit {
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
</style>
<?php

    if(isset($_POST['logout']))
    {
        session_start();
        session_unset();
        session_destroy();
        header("signin.php");
        exit();
    }
?>
<a href="welcomepage.php"><button class="submit" input type ="submit" />LOGOUT</button><a/>
