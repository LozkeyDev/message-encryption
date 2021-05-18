<?php
	include "controller/app-Functions.php";
		$error = "";

?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>

	<link rel="stylesheet" href="class/bootstrap.min.css">



</head>
<body>
<div class="container-fluid">
	<div class="alert alert-success text-center" style="background-color: black;">
		<h3 style="font-weight:bold;"> SECURE CHAT SYSTEM <img src="WhatsApp_48px.png" height="60" width="60" alt=""></h3>
	</div>

<div style="margin: auto;width: 40%;margin-top: 5%;border: 2px solid black;height:fit-content;" class="jumbotron">
<h3 class="text-center">USER REGISTRATION</h3>
			
	<form method="post" action="">
			<div class="text-center text-danger">
			<?php

			if(isset($_POST["register"])){
				register($_POST);
			}

			?>
			</div>
		<p class="text-danger error"></p>
		<table class="table">

			<tr>
				<td>Username</td>
				<td><input type="text" class="form-control"  name="username" id="username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" class="form-control"  name="password" id="password"></td>
			</tr>


			<tr>
				<td>Name</td>
				<td><input type="text" class="form-control"  name="name" id="name"></td>
			</tr>


			<tr>
				<td>Sex</td>
				<td>
					<select type="text" class="form-control" name="gender" id="gender">
						<option value="" disabled> --Select gender-- </option>
						<option value="male"> Male </option>
						<option value="female"> Female </option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Location</td>
				<td><input type="text" class="form-control" name="location" id="location"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-success" name="register" value="Register" id="register"></td>
			</tr>

			
		</table>
	</form>

</div>

</body>
</html>