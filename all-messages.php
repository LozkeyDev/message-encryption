<?php 
session_start();
include "controller/app-Functions.php";
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



 <div class="jumbotron" style="margin: auto;width: 30%;margin-top: 5%;overflow-y: scroll;height: 500px;">
        <p class="text-center"> ALL MESSAGES </p>
        <table class="table">

        <?php
            $username = $_SESSION["user_id"];
            
            $x = $con->query("SELECT * FROM user_tbl WHERE `username` = '$username'") or die(mysqli_error($con));
            $y = mysqli_fetch_array($x);
            $user_id = $y["id"];        
            $k = $con->query("SELECT * FROM chat_info WHERE `receiver` = '$user_id'") or die(mysqli_error($con));
            $r = mysqli_fetch_array($k);
            $time = $r["time"];
            // echo $date;
            while($row = mysqli_fetch_array($k)){ ?>
                    <tr>
                     <td><?php echo $row["sender"]; ?></td>
                    <td><?php echo $time; ?></td> 
                    <td><a href="view-message.php?id=<?php echo $row["id"]; ?>" class="btn btn-success"> View Message </a></td>
                
                </tr> 
            <?php }

        ?>
    </table>

</div>





</body>
</html>