<?php
if (!isset($_SESSION)) session_start();

if(isset($_GET['change'])){
	$_SESSION['action'] = $_GET['change'];
}

header("Location: ../../Vivino");
?>