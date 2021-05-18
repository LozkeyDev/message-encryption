<?php

    include 'controller/app-Functions.php';
    session_start();
?>

<!DOCTYPE html>


<html>
    
    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="class/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- <link rel="stylesheet" href="style.css"> -->
        
    </head>


<body>
  <div class="container-fluid">

  <div class="alert alert-success text-center" style="background-color: black;">
  <h3 style="font-weight:bold;"> SECURE CHAT SYSTEM  <img src="WhatsApp_48px.png" height="60" width="60" alt=""> </h3>
  <a href="logout.php?logout=yes"> Logout </a>
  </div>
  <div style="margin: auto;width: 40%;margin-top: 5%;border: 2px solid black;height:fit-content;" class="jumbotron">
        <?php if(isset($_SESSION["success"])){ echo $_SESSION["success"]; }
          unset($_SESSION["success"]);
        ?>

       
        <h4 style="text-align: center;margin-bottom: 20px;font-weight: bold;">USER LOGIN</h4>
          <div class="text-center text-danger"><?php 
          if(isset($_POST["login"])){
              login($_POST);
          }
         ?></div>
        <form method="post" action="">
          <table class="" style="border: 0;">
           
            <tr>
              <td>Username</td>
              <td><input type="text" class="form-control" name="username" id="username"></td>
            </tr>

            <tr>
              <td>Password</td>
              <td><input type="password" class="form-control"  name="password" id="password"></td>
            </tr>
            <tr>
              <td> </td>
              <td> <input type="submit" class="btn btn-success" value="Login" name="login" id="login"> </td>
            </tr>

            <tr>
              <td rowspan="1">New User? <a href="register.php"> Click here to Register </a></td>
             
            </tr>

          </table>
      </form>


</div>
    </body>
    <script src="script.js"></script>

</html>