<?php
define("ROOT", "Vivino"); #Nome da pasta do seu Projeto

if (!isset($_SESSION)) session_start();

if(isset($_GET['change'])){
	$_SESSION['action'] = $_GET['change'];
}

if (isset($_GET['wineId']) && $_GET['wineId'] != ""){
	$_SESSION['wineId'] = $_GET['wineId'];
}

if (isset($_GET['profileId']) && $_GET['profileId'] != "") {
	$_SESSION['profileId'] = $_GET['profileId'];
}

header("Location: ../../" . ROOT);
?>