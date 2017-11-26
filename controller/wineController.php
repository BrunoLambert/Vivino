<?php
if(!isset($_SESSION)) session_start();

if ($_SESSION['controller'] == 'insertWine') {
	include('config/database.php');

	$sql = "insert into wines values" .
	"(NULL,'" . 
	$_SESSION['user_id'] . "','" . 
	$_POST['producer'] . "','" . 
	$_POST['name'] . "'," . 
	$_POST['preco'] . "','" . 
	$_POST['country'] . "','" . 
	$_POST['type'] . "','" . 
	$_POST['harmonization'] . "')";

	$result = mysqli_query($db, $sql);

	if(!$result){

		$_SESSION['error'] = $db->error;
		mysqli_close($db);
		header("Location: controller/pageController.php?change=addWine");

	}else{

		$wineId = $db->insert_id;

		//Insert STYLE
		$sql = "insert into estilos values ('" .
		$wineId . "','" . $_POST['style'] . "')";
		$result2 = mysqli_query($db, $sql);

		if (!$result2) {

			$_SESSION['error'] = $db->error;
			mysqli_close($db);
			header("Location: controller/pageController.php?change=addWine");

		}else{

			//Insert GRAPE
			$sql = "insert into uvas values ('" .
			$wineId . "','" . $_POST['grape'] . "')";
			$result3 = mysqli_query($db, $sql);

			if(!$result3){

				$_SESSION['error'] = $db->error;
				mysqli_close($db);
				header("Location: controller/pageController.php?change=addWine");

			}else{

				unset($_SESSION['error']);
				mysqli_close($db);
				header("Location: controller/pageController.php?change=addWine");

			}
		}
	}

}else if ($_SESSION['controller'] == 'updateWine'){
	include('config/database.php');


}else if ($_SESSION['controller'] ==  'deleteWine') {
	include('config/database.php');


}

?>