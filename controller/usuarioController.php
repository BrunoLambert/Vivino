<?php
if(!isset($_SESSION)) session_start();

if ($_SESSION['controller'] == 'register') {

	include("config/database.php");

	$sql = "insert into users values (NULL, '" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['login'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
	echo $sql;

	$result = mysqli_query($db, $sql);

	if ($result){

		$sql = "select * from users where email = '" . $_POST['email'] . "' and pword = '" . $_POST['password'] . "'";
		$result = mysqli_query($db, $sql);
		$row = $result->fetch_array();

		$_SESSION['user_id'] = $row['id'];
		$_SESSION['user_firstName'] = $row['firstName'];
		$_SESSION['user_lastName'] = $row['lastName'];
		$_SESSION['user_email'] = $row['email'];
		$_SESSION['user_login'] = $row['login'];

		mysqli_close($db);
		unset($_SESSION['error']);
		header("Location: controller/pageController.php?change=index");

	}else{
		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		header("Location: controller/pageController.php?change=register");
	}

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

			unset($_SESSION['error']);
			mysqli_close($db);
			header("Location: controller/pageController.php?change=index");

		}else{

			$_SESSION['error'] = "Login Invalido!";
			mysqli_close($db);
			header("Location: controller/pageController.php?change=login");
		}

	}else{
		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		header("Location: controller/pageController.php?change=login");
	}

	
}else if ($_SESSION['controller'] == 'logout'){

	unset($_SESSION['user_id']);
	unset($_SESSION['user_firstName']);
	unset($_SESSION['user_lastName']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_login']);

	header("Location: controller/pageController.php?change=index");
}
?>