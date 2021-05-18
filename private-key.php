<?php

    include 'controller/app-Functions.php';

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
</div>


    <div style="margin: auto;width: 50%;margin-top: 5%;">
      <p>Enter your Private key to decrypt this message </p>

      <div class="jumbotron">
    <table>
      <th>ENTER PRIVATE KEY </th>

      <tr>
        <td>Private Key</td>
        <td><input type="password" class="form-control" maxlength="5" name="private-key" id="private-key"></td>
      </tr>

        <td> </td>
        <td> <input type="submit" name="sub-key" class="btn btn-danger" value="Decrypt" id="sub-key"> </td>
      </tr>


    </table>


</div>
    </body>
    <script src="script.js"></script>

</html>