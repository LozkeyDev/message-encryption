<?php



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

<div style="margin: auto;width: 50%;margin-top: 5%;" id="dec-panel">
      <p>Enter your Private key to decrypt this message </p>
    <p class="text-danger" id="error"></p>

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

      <input type="text" value="<?php echo $_GET["id"]; ?>" id="id" hidden>
    </table>
</div>
</div>

 <div class="jumbotron" style="margin: auto;width: 30%;margin-top: 5%;display: none;" id="inb-panel">
        <p class="text-center"> CHAT INBOX </p>

        
        <p style="font-size: 18px;"><span style="font-weight: bold;"> Sender: </span> <span style="font-size: 15px;" id="sender"> </span></p>
        	
     
      	<p style="font-size: 18px;"> <span style="font-weight: bold;"> Date:</span> <span style="font-size: 15px;" id="date"> </span></p>
      
      
        <p style="font-size: 18px;"> <span style="font-weight: bold;"> Message: </span> <span style="font-size: 15px;" id="message"> </span></p>
        
      	 <!-- <input type="submit" class="btn btn-primary" name="reply" id="reply" value="reply"> -->

    </table>

</div>


     <div style="margin: auto;width: 50%;margin-top: 10%;display: none;">
      
    <table>
      <th>SEND MESSAGE </th>

      <tr>
        <td>Recipient</td>
        <td>
        	<select name="recipient">
        		<option value=""></option>
        	</select>
        	
      </tr>
      <tr>
      	<td>Message</td>
      	<td><textarea cols="20" rows="5" style="resize: none;"></textarea></td>
      </tr>

        <td> </td>
        <td> <input type="submit" name="send-message" id="send-message"> </td>
      </tr>


    </table>


</div>

<script src="class/jquery.js"></script>
<script>
  $(document).ready(function(){

    $("#sub-key").on("click", function(){
      
      var key = $("#private-key").val();
      var id = $("#id").val();

      if(key == ""){
        $("#error").html("Please Enter your private key");
      }
      else{
      $.ajax({
        type: "POST",
        url: "controller/app-Functions.php",
        data: {
          "action": "check_key",
          "id":id,
          "key": key
        },
        dataType: "json",
        success: function(tx){
          var sender = tx.sender;
          var message = tx.message;
          var date = tx.date;
          var time = tx.time;

          if(tx.stat == 1){
            $("#inb-panel").show();
            $("#dec-panel").hide();
            $("#sender").html(sender);
            $("#message").html(message);
            $("#date").html(date+ " - "+time);
          }
          else if(tx.stat == 0){
              $("#error").html("Please Enter Correct Private Key");

          }

        }
      });
    }

  })


  });
</script>



</body>
</html>