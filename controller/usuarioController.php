<?php
	if(!isset($_SESSION)) session_start();

	if ($_SESSION['controller'] == 'register') {
		include("config/database.php");

		$sql = "insert into users values (NULL, '" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['login'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
		echo $sql;

		$result = mysqli_query($db, $sql);

		$_SESSION['action'] = 'registered';
		if ($result){
			unset($_SESSION['error']);
			
		}else{
			$_SESSION['error'] = $db->error;
		}

		mysqli_close($db);
		header("Location: ../../Vivino");

	}else if ($_SESSION['controller'] == 'login'){

		include("config/database.php");
		$sql = "select * from users where email = '" . $_POST['email'] . "' and pword = '" . $_POST['password'] . "')";
		$result = mysqli_query($db, $sql);

		if($result){
			$row = $result->fetch_array();

			$_SESSION['user_Id'] = $row['id'];
			$_SESSION['user_firstName'] = $row['firstName'];
			$_SESSION['user_lastName'] = $row['lastName'];
			$_SESSION['user_email'] = $row['email'];
			$_SESSION['user_login'] = $row['login'];
			
		}else{

		}

	}
?>