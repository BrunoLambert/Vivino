<?php
	if(basename($_SERVER["PHP_SELF"])=='routes.php'){
		die("<script>window.location=('../../Vivino')</script>");
	}

	if(!isset($_SESSION)) session_start();

	define('VIEWS', 'views/');
	define('MODELS', 'models/');
	define('CONTROL', 'controller/');

	//echo $_SESSION['action'] . " " . $_SERVER['REQUEST_METHOD'];

	# Requisições de POST
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		switch ($_GET['action']) {
			case 'register':
				$_SESSION['controller'] = 'register';
				require_once(CONTROL . "usuarioController.php");
				break;
			case 'login':
				$_SESSION['controller'] = 'login';
				require_once(CONTROL . "usuarioController.php");
				break;
			
			default:
				require_once(VIEWS . "index/index.php");
				break;
		}
	}

	#Requisições de GET
	else{

		switch ($_SESSION['action']) {
			case 'login':
				require_once(VIEWS . "/auth/login.php");
				break;
			case 'logout':
				$_SESSION['controller'] = 'logout';
				require_once(CONTROL. "usuarioController.php");
				break;
			case 'register':
				require_once(VIEWS . "/auth/register.php");
				break;
			case 'addWine':
				require_once(VIEWS . "/admin/addwine.php");
				break;
			default:
				require_once(VIEWS . "index/index.php");
				break;
		}

	}

?>