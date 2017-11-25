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
	}
?>