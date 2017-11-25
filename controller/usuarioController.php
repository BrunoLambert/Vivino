<?php
if(!isset($_SESSION)) session_start();

if ($_SESSION['controller'] == 'register') {
	include("config/database.php");

	$sql = "insert into users values (NULL, '" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['login'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
	echo $sql;

	$result = mysqli_query($db, $sql);

	if ($result){
		unset($_SESSION['error']);
		$_SESSION['action'] = 'index';

	}else{
		$_SESSION['action'] = 'register';
		$_SESSION['error'] = $db->error;
	}

	mysqli_close($db);
	header("Location: ../../Vivino");

}else if ($_SESSION['controller'] == 'login'){
	include("config/database.php");
	$sql = "select * from users where email = '" . $_POST['email'] . "' and pword = '" . $_POST['password'] . "'";
	$result = mysqli_query($db, $sql);

	if($result){

		if ($row = $result->fetch_array()){

			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_firstName'] = $row['firstName'];
			$_SESSION['user_lastName'] = $row['lastName'];
			$_SESSION['user_email'] = $row['email'];
			$_SESSION['user_login'] = $row['login'];

			$_SESSION['action'] = 'index';
			unset($_SESSION['error']);

		}else{

			$_SESSION['action'] = 'login';
			$_SESSION['error'] = "Login Invalido!";
		}

	}else{
		$_SESSION['action'] = 'login';
		$_SESSION['error'] = $db->error;
	}

	mysqli_close($db);
	header("Location: ../Vivino");

	
}else if ($_SESSION['controller'] == 'logout'){

	unset($_SESSION['user_id']);
	unset($_SESSION['user_firstName']);
	unset($_SESSION['user_lastName']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_login']);

	$_SESSION['action'] = 'index';
	header('Location: ../Vivino');
}
?>