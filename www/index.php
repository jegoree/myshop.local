<?php
	session_start();

	if(! isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}


	include_once '../config/config.php';				//Settings init.
	include_once '../config/db.php';						//connecting DB
	include_once '../library/main_functions.php';	//Main functions

	//This will define controller from the URL
	$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

	//Defines which function is donna be used
	$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

	// If there is users details avaliable, then it'll be passed to template engine
	if(isset($_SESSION['user'])){
		$smarty->assign('arUser', $_SESSION['user']);
	}


	$smarty->assign('cartCntItems', count($_SESSION['cart']));

	//This is passed onto main_functions.
	loadPage($smarty, $controllerName, $actionName);