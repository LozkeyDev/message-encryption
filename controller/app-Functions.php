<?php
	include "db.php";


	function clean_string($con,$string){
    return mysqli_real_escape_string($con, $string);
}

function checkUser($username){
    global $con;
    return $con->query("SELECT id FROM user_tbl WHERE username = '$username'");
}

	 function register($data)
	{
		global $con;
		$username = $data["username"];
		$password = clean_string($con,$data["password"]);
		$name = $data["name"];
		$gender = $data["gender"];
		$location = $data["location"];

		$private_key = mt_rand(10000, 99999);
		$public_key = mt_rand(10000, 99999);

		if(empty($username) || empty($password) || empty($name) || empty($gender) || empty($location)){
			$error = "All fields are required";
			echo  $error;

		}

		else{
			$sel = checkUser($username);
			if(mysqli_num_rows($sel) > 0){
				echo "Username already exists... please try another username";
			}

			else{
					$qry = $con->query("INSERT INTO user_tbl(`username`, `passwrd`, `name`, `sex`, `location`,`private_key`,`public_key`) VALUES('$username', '$password', '$name','$gender', '$location','$private_key', '$public_key')");

                if($qry){
					
					session_start();
					$_SESSION = array("private_key"=>$private_key, "public_key" =>  $public_key);
                    header("location: regsuccess.php");
                    $status = 1;

                }
				}
		}

	}



	function login($data){
		global $con;

		$username = clean_string($con,$data["username"]);
		$password = clean_string($con, $data["password"]);


		if(empty($username) || empty($password)){

		echo "<span> All fields are required </span>";
		}
		else{
			$sel = $con->query("SELECT `username`, `passwrd` FROM user_tbl WHERE username = '$username' AND passwrd = '$password'") or die(mysqli_error($con));

			if(mysqli_num_rows($sel) > 0){
				session_start();
				$_SESSION["user_id"] = $username;
				header("location: dashboard.php");
			}
			else{
				echo "Username or password is not correct... please try again!!!";
			}
		}
	}

	function all_users($id)
	{
		global $con;

		$k = $con->query("SELECT * FROM user_tbl WHERE `username` <> '$id'") or die(mysqli_error($con));
		$rw = mysqli_fetch_assoc($k);
		print_r($rw);

	}

	function send_message($data){
		global $con;
		$recipient = $data["recipient"];
		$sender = $_SESSION["user_id"];
		$message = $data["message"];

		$k = $con->query("SELECT * FROM user_tbl WHERE `id` = '$recipient'") or die(mysqli_error($con));
		$r = mysqli_fetch_array($k);
		$key = $r["public_key"];

		$qry = $con->query("INSERT INTO chat_info(`receiver`, `sender`, `msg`, `decrypt_key`) VALUES('$recipient','$sender', '$message', '$key')");

		if($qry){
			echo "Message sent";
		}
		else{
			echo "Message not sent";

		}

	}

	$action = @$_POST["action"];
	 if($action == "check_key"){
		 echo (new viewmessage)-> private_key();
	 }
	class viewmessage{
		public function private_key(){
			session_start();
			global $con;
			$key = $_POST["key"];
			$id = $_POST["id"];
			$username = $_SESSION["user_id"];

			$sender = "";
			$date = "";
			$message = "";
			$time = "";
            $x = $con->query("SELECT * FROM user_tbl WHERE `username` = '$username'") or die(mysqli_error($con));
			$r = mysqli_fetch_array($x);
			$z = $r["private_key"];
			if($z == $key){
				
				$stat = 1;
				$k = $con->query("SELECT * FROM chat_info WHERE `id` = '$id'") or die(mysqli_error($con));
				$row = mysqli_fetch_assoc($k);
				$sender = $row["sender"];
				$date = $row["date"];
				$time = $row["time"];
				$message = $row["msg"];
			}
			else{
				
				$stat = 0;
			}

			return json_encode(["stat"=>$stat,"sender"=>$sender, "date"=>$date, "message"=>$message, "time"=>$time]);

		}

	}
?>