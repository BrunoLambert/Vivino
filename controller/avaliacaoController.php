<?php
if(basename($_SERVER["PHP_SELF"])=='avaliacaoController.php'){
	die("<script>window.location=('pageController.php?change=index')</script>");
}

if (!isset($_SESSION)) session_start();

if ($_SESSION['controller'] == 'insert'){
	include("config/database.php");

	$sql = "insert into avaliacoes values (null, '" . $_SESSION['user_id'] . "', '" . $_SESSION['wineId'] . "', '" . $_POST['stars'] . "', '" . $_POST['comment'] . "')";

	$result = mysqli_query($db, $sql);

	if(!$result){
		$_SESSION['error'] = $db->error;
	}else{
		unset($_SESSION['error']);
		$_SESSION['sucess'] = "Avaliação realizada com sucesso!";
	}
	mysqli_close($db);
	header("Location: controller/pageController.php?action=wine&wineId=" . $_SESSION['wineId']);
}
?>