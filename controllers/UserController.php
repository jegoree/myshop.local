<?php

/**
 * 
 * Controller of users function
 * 
 */

 //connecting relevant models
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * 
 * AJAX regestration of user
 * Initialization seession variable ($_SESSION['user'])
 * 
 * @return json with new user details 
 * 
 */

function registerAction(){

	$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
	$email = trim($email);


	$pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
	$pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

	$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
	$adress = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
	$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
	$name = trim($name);

	$resData = null;
	$resData = checkRegisterParams($email, $pwd1, $pwd2);


	if (! $resData && checkUserEmail($email)){
		$resData['success'] = false;
		$resData['message'] = "User with this email $email is already registered";
	}

	if (! $resData){
		$pwdMD5 = md5($pwd1);

		$userData = registerNewUser($email, $pwdMD5, $name, $phone, $adress);

		if($userData['success']) {
			$resData['message'] = 'User succesfully registered';
			$resData['success'] = 1;

			$userData = $userData[0];
			$resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
			$resData['userEmail'] = $email;

			$_SESSION['user'] = $userData;
			$_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email']; 
		} else {
			$resData['success'] = 0;
			$resData['message'] = 'Error wile registering';
		}
	}
	echo json_encode($resData);
}

/**
 * 
 * Logout function
 * 
 * 
 */

function logoutAction(){
	if(isset($_SESSION['user'])) {
			unset($_SESSION['user']);
			unset($_SESSION['cart']);
	}

	header("Location: /");
	exit();
}

/**
 * 
 * AJAX user authontication
 * 
 * @return JSON array with users data
 * 
 */

function loginAction(){
	$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
	$email = trim($email);

	$pwd = isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null;
	$pwd = trim($pwd);

	$userData = loginUser($email, $pwd);

	if($userData['success']) {
		$userData = $userData[0];

		$_SESSION['user'] = $userData;
		$_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];

		$resData = $_SESSION['user'];
		$resData['success'] = 1;
	} else {
		$resData['success'] = 0;
		$resData['message'] = 'Wwrong username or password';
	}
	echo json_encode($resData);
}


/**
 * 
 * Forming of user page
 * @link /user/
 * @param object Smarty tepmlate engine
 * 
 */


function indexAction($smarty){

	// If user is logged in
	if(! isset($_SESSION['user'])){
		redirect('/');
	}

	// List for left menu
	$rsCategories = getAllMainCatsWithChildren();

	//list with user orders
	$rsUserOrders = getCurUserOrders();
	// d($rsUserOrders);

		$smarty->assign('pageTitle', "User's page");
		$smarty->assign('rsCategories', $rsCategories);
		$smarty->assign('rsUserOrders', $rsUserOrders);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'user');
	loadTemplate($smarty, 'footer');
}

/**
 * 
 * Update users details 
 * 
 * @return json with results.
 * 
 */

function updateAction(){
	//> If user is not logged in, we redirect

	if(! isset($_SESSION['user'])){
		redirect('/');
	}
	//<

	//> Initializing variables
	$resData	= array();
	$phone 	= isset($_REQUEST['phone'])	? $_REQUEST['phone']	: null;
	$adress 	= isset($_REQUEST['adress'])	? $_REQUEST['adress']	: null;
	$name 	= isset($_REQUEST['name'])		? $_REQUEST['name']		: null;
	$pwd1 	= isset($_REQUEST['pwd1'])		? $_REQUEST['pwd1']		: null;
	$pwd2 	= isset($_REQUEST['pwd2'])		? $_REQUEST['pwd2']		: null;
	$curPwd 	= isset($_REQUEST['curPwd'])	? $_REQUEST['curPwd']	: null;
	//<
	// Checking if entered current password is correct
	


	$curPwdMD5 = md5($curPwd);
	if( ! $curPwd || ($_SESSION['user']['pwd'] != $curPwdMD5)){
		$resData['success'] = 0;
		$resData['message'] = 'Entered current password is wrong';
		echo json_encode($resData);
		return false;
	}


	$res = updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwdMD5);
	
	if($res){
		$resData['success'] = 1;
		$resData['message'] = 'Details updated';
		$resData['userName'] = $name;

		$_SESSION['user']['name']			= $name;
		$_SESSION['user']['phone']			= $phone; 
		$_SESSION['user']['adress']		= $adress;
			
		$newPwd = $curPwdMD5;
		if( $pwd1 && ($pwd1==$pwd2)){
			$newPwd = md5(trim($pwd1));
		}
		$_SESSION['user']['pwd']			= $newPwd;
		$_SESSION['user']['displayName']	= $name ? $name : $_SESSION['user']['email'];
	
	} else {
		$resData['success'] = 0;
		$resData['message'] = 'Details update unsuccessful';
	}

	echo json_encode($resData);

}


function registrationAction($smarty){

	if(isset($_SESSION['user'])){
		redirect('/');
	}

	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', 'Home page');
	$smarty->assign('rsCategories', $rsCategories);

	

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'register');
	loadTemplate($smarty, 'footer');
}

function ordersAction($smarty) {

	if (isset($_SESSION['user'])) {
		$rsCategories = getAllMainCatsWithChildren();
		$rsUserOrders = getCurUserOrders();

		$smarty -> assign('pageTitle', 'Your orders');
		$smarty -> assign('rsCategories', $rsCategories);
		$smarty -> assign('rsUserOrders', $rsUserOrders);
		

		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'orders');
		loadTemplate($smarty, 'footer');
	}

	else {
		header("Location: /");
		exit();
	}


}