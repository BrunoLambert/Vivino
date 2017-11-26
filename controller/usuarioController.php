<?php
if(!isset($_SESSION)) session_start();

if ($_SESSION['controller'] == 'register') {

	include("config/database.php");

	$sql = "insert into users values (NULL, '" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['login'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', 'photos/user0.jpg')";
	

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
		$_SESSION['user_photo'] = $row['photo'];

		mysqli_close($db);
		unset($_SESSION['error']);
		unset($_SESSION['controller']);
		header("Location: controller/pageController.php?change=index");

	}else{
		$_SESSION['error'] = $db->error;
		unset($_SESSION['controller']);
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
			$_SESSION['user_photo'] = $row['photo'];

			unset($_SESSION['error']);
			mysqli_close($db);
			unset($_SESSION['controller']);
			header("Location: controller/pageController.php?change=index");

		}else{

			$_SESSION['error'] = "Login Invalido!";
			mysqli_close($db);
			unset($_SESSION['controller']);
			header("Location: controller/pageController.php?change=login");
		}

	}else{
		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		unset($_SESSION['controller']);
		header("Location: controller/pageController.php?change=login");
	}

	
}else if ($_SESSION['controller'] == 'logout'){

	unset($_SESSION['user_id']);
	unset($_SESSION['user_firstName']);
	unset($_SESSION['user_lastName']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_login']);

	unset($_SESSION['controller']);
	
	header("Location: controller/pageController.php?change=index");

}else if($_SESSION['controller'] == 'update'){
	include("config/database.php");

	$sql = "update users set " .  
	"firstName = '" . $_POST['firstName'] . "', " .
	"lastName = '" . $_POST['lastName'] . "' ";

	if ($_POST['password'] != "") $sql .= ", pword = '" . $_POST['password'] . "' ";

	$sql .= "where id = '" . $_SESSION['user_id'] . "'";

	$result = mysqli_query($db, $sql);

	if(!$result){
		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		header("Location: controller/pageController.php?change=updateUser");

	}else{

		$_SESSION['user_firstName'] = $_POST['firstName'];
		$_SESSION['user_lastName'] = $_POST['lastName'];

		if (isset($_FILES["photo"]) && $_FILES["photo"]["name"] != ""){

			$temp = $_FILES["photo"]["tmp_name"];
			$arqName = "user" . $_SESSION['user_id'] . ".jpg";

			if(move_uploaded_file($temp, "photos/$arqName")){

				$sql = "update users set photo = 'photos/" . $arqName . "' where id = '" . $_SESSION['user_id'] . "'";
				$result = mysqli_query($db, $sql);

				if(!$result){

					$_SESSION['error'] = $db->error;
					mysqli_close($db);
					header("Location: controller/pageController.php?change=updateUser");

				}else unset($_SESSION['error']);

			}else{

				$_SESSION['error'] = "Falha no envio da imagem";
				mysqli_close($db);
				header("Location: controller/pageController.php?change=updateUser");
			}
		}
	}
	unset($_SESSION['error']);
	$_SESSION['sucess'] = "Dados moficados com Sucesso!";
	header("Location: controller/pageController.php?change=updateUser");
}
?>