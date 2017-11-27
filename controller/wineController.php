<?php
if(basename($_SERVER["PHP_SELF"])=='wineController.php'){
	die("<script>window.location=('pageController.php?change=index')</script>");
}

if(!isset($_SESSION)) session_start();

if ($_SESSION['controller'] == 'insertWine') {
	include('config/database.php');

	$sql = "insert into wines values" .
	"(NULL,'" . 
	$_SESSION['user_id'] . "','" . 
	$_POST['producer'] . "','" . 
	$_POST['name'] . "','" . 
	$_POST['price'] . "','" . 
	$_POST['country'] . "','" . 
	$_POST['type'] . "','" . 
	$_POST['harmonization'] . "','" .
	$_POST['grape'] . "','" .
	$_POST['style'] . "'," .
	"'photos/wine0.jpg'" . ## Default
	")";

	$result = mysqli_query($db, $sql);

	if(!$result){

		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		header("Location: controller/pageController.php?change=addWine");

	}else{
		unset($_SESSION['error']);

		$wineID = $db->insert_id;

		if (isset($_FILES["photo"]) && $_FILES["photo"]["name"] != ""){

			$temp = $_FILES["photo"]["tmp_name"];
			$arqName = "wine" . $wineID . ".jpg";

			if(move_uploaded_file($temp, "photos/$arqName")){

				$sql = "update wines set photo = 'photos/" . $arqName . "' where id = '" . $wineID . "'";
				$result = mysqli_query($db, $sql);

				if(!$result){

					$_SESSION['error'] = $db->error;
					mysqli_close($db);
					header("Location: controller/pageController.php?change=addWine");

				}else unset($_SESSION['error']);

			}else{

				$_SESSION['error'] = "Falha no envio da imagem";
				mysqli_close($db);
				header("Location: controller/pageController.php?change=addWine");
			}

		}

		mysqli_close($db);
		header("Location: controller/pageController.php?change=myWines");
	}

}else if ($_SESSION['controller'] == 'updateWine'){
	include('config/database.php');
	
	$sql = "update wines set " .
	"producer = '" . $_POST['producer'] . "', " . 
	"name = '" . $_POST['name'] . "', " . 
	"price = '" . $_POST['price'] . "', " . 
	"country = '" . $_POST['country'] . "', " . 
	"type = '" . $_POST['type'] . "', " . 
	"harmonization = '" . $_POST['harmonization'] . "', " .
	"grape = '" . $_POST['grape'] . "', " .
	"style = '" . $_POST['style'] . "' " .
	"where id = '" . $_POST['id'] . "'";

	$result = mysqli_query($db, $sql);

	if(!$result){

		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		header("Location: controller/pageController.php?change=addWine");

	}else{

		$sql = "select id_user from wines where id = '" . $_POST['id'] . "'";
		$result = mysqli_query($db, $sql);
		$row = $result->fetch_array();

		if ($_SESSION['user_id'] != $row['id_user']){
			
			$sql = 	"insert into colaboracao values ('" . 
			$_SESSION['user_id'] . "', '" . 
			$_POST['id'] . "')";
			$result = mysqli_query($db, $sql);

			unset($_SESSION['error']);
		}

		if (isset($_FILES["photo"]) && $_FILES["photo"]["name"] != ""){

			$temp = $_FILES["photo"]["tmp_name"];
			$arqName = "wine" . $_POST['id'] . ".jpg";

			if(move_uploaded_file($temp, "photos/$arqName")){

				$sql = "update wines set photo = 'photos/" . $arqName . "' where id = '" . $_POST['id'] . "'";
				$result = mysqli_query($db, $sql);

				if(!$result){

					$_SESSION['error'] = $db->error;
					mysqli_close($db);
					header("Location: controller/pageController.php?change=addWine");

				}else unset($_SESSION['error']);

			}else{

				$_SESSION['error'] = "Falha no envio da imagem";
				mysqli_close($db);
				header("Location: controller/pageController.php?change=addWine");
			}
		}

		unset($_SESSION['error']);
		mysqli_close($db);
		header("Location: controller/pageController.php?change=myWines");
	}

}else if ($_SESSION['controller'] ==  'deleteWine') {
	include('config/database.php');

}

?>