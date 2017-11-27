<?php
	if(basename($_SERVER["PHP_SELF"])=='routes.php'){
		die("<script>window.location=('../../Vivino')</script>");
	}

	if(!isset($_SESSION)) session_start();

	if(!isset($_SESSION['action'])) $_SESSION['action'] = "index";

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
			case 'updateUser':
				$_SESSION['controller'] = 'update';
				require_once(CONTROL . "usuarioController.php");
				break;
			case 'createWine':
				if ($_POST['hidden'] == "insert") $_SESSION['controller'] = 'insertWine';
				else if ($_POST['hidden'] == "update") $_SESSION['controller'] = 'updateWine';
				
				require_once(CONTROL . "wineController.php");
				break;
			case 'rating':
				$_SESSION['controller'] = 'insert';
				require_once(CONTROL . "avaliacaoController.php");
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
			case 'updateUser':
				require_once(VIEWS . "/admin/user.php");
				break;
			case 'addWine':
				require_once(VIEWS . "/admin/addwine.php");
				break;
			case 'myWines':
				require_once(VIEWS . "/admin/mywines.php");
				break;
			case 'wine':
				require_once(VIEWS . "/admin/wine.php");
				break;
			default:
				require_once(VIEWS . "index/index.php");
				break;
		}

	}

?>