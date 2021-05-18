<?php

    include "controller/app-Functions.php";
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>messages</title>
	<link rel="stylesheet" href="class/bootstrap.min.css">
  
</head>
<body>
<div class="container-fluid">

<div class="alert alert-success text-center" style="background-color: black;">
	  <h3 style="font-weight:bold;"> SECURE CHAT SYSTEM  <img src="WhatsApp_48px.png" height="60" width="60" alt=""> </h3>
</div>

<div class="text-center" style="font-size: 18px;padding-top: 50px;">
    <p style="font-weight: bold;">YOU HAVE BEEN REGISTERED SUCCESSFULLY!!!</p>
    <p style="font-size: 16px;font-weight: bold;">Your Public Key is <?php echo $_SESSION["public_key"] ?> and is available to all users of this system</p> <br>

    <p style="font-size: 16px;font-weight: bold;">Your Private Key is <?php echo $_SESSION["private_key"] ?> and is only known to you.</p>
    <p style="font-size: 14px;font-weight: bold;" class="text-danger">Please copy and save the number somewhere safe as you will need it to decrypt and read your messages</p>


    <p><a href="index.php" class="btn btn-danger">GO TO LOGIN</a></p>
</div>




</div>




</body>
</html>