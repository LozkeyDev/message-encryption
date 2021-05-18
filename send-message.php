<?php
  include "controller/app-Functions.php";
  session_start();

  $id = $_SESSION["user_id"];
  // echo $id;
  $k = $con->query("SELECT * FROM user_tbl WHERE `username` <> '$id'") or die(mysqli_error($con));



?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
	<link rel="stylesheet" href="class/bootstrap.min.css">
  
</head>
<body>
<div class="container-fluid">

<div class="alert alert-success text-center" style="background-color: black;">
<h3 style="font-weight:bold;"> SECURE CHAT SYSTEM  <img src="WhatsApp_48px.png" height="60" width="60" alt=""> </h3>
</div>

<h4 class="text-center text-info" style="font-weight:bold;">Send your message by filling the form below</h4>
	 <div class="jumbotron" style="margin: auto;width: 40%;margin-top: 5%;">
     <p class="text-center"> New Message</p>
  <?php
      if(isset($_POST["send-message"])){
          send_message($_POST);
      }
  ?>
  <form action="" method="post">
    <table class="">
      <tr>
        <td>Recipient</td>
        <td>
        	<select class="form-control" name="recipient">
            <?php
              while($rw = mysqli_fetch_assoc($k)){ ?>
                <option value="<?php echo $rw["id"] ?>">
                <?php echo $rw["username"]. " - " .$rw["public_key"]; ?></option>

              <?php }
            ?>
        	</select>
        </td>
      </tr>
      <tr>
      	<td>Message</td>
      	<td><textarea cols="30" rows="5" style="resize: none;" name="message"></textarea></td>
      </tr>

        <td> </td>
        <td> <input type="submit" class="btn btn-primary" name="send-message" id="send-message"> </td>
      </tr>


    </table>
  </form>


</div>

</body>
</html>