<?php


/**
 * 
 * Controller for working with cart
 * 
 */

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';


/**
 * 
 * Adding product to cart
 * 
 * @param integer ID of relevant product
 * @return json file about operation (success & ammount of items in cart)
 * 
 */

function addtocartAction(){
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if(! $itemId) return false;


	$resData = array();
	
	if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false){
		$_SESSION['cart'][] = $itemId;
		
		$resData['cntItems'] = count($_SESSION['cart']);
		$resData['success'] = 1;
	} else {
		$resData['success'] = 0;
	}

	echo json_encode($resData);
}


function removefromcartAction(){
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if(! $itemId) exit();

	$resData = array();
	$key = array_search($itemId, $_SESSION['cart']);
		if ($key !== false){
			unset($_SESSION['cart'][$key]);

			$resData['success'] = 1;
			$resData['cntItems'] = count($_SESSION['cart']);

		} else {
			$resData['success'] = 0;
		}

		echo json_encode($resData);
}

/**
 * 
 * Forming the cart page
 * @link /cart/
 * 
 */

function indexAction($smarty){

	$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getProductsFromArray($itemsIds);

	$smarty->assign('pageTitle', '');
	$smarty->assign('rsCategories',$rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	
	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'cart');
	loadTemplate($smarty, 'footer');
}

/**
 * 
 * Forming of order page
 * 
 */

function orderAction($smarty){
	// getting array if ID's
	$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
	// in case cart is empty, redirect to cart
	if(! $itemsIds){
		redirect('/cart/');
		return;
	}


	// Getting ammount of products from $_POST that were ordered
	$itemsCntr = array();
	foreach($itemsIds as $item) {
		//Key for array
		$postVar = 'itemCnt_' . $item;
		// creating array element that for eachj count
		// Key = ID, value - ammount of products
		// $itemCnt[1] = 3; product with ID == 1, order 3psc.
		$itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
	}

	//getting list of products that are in the cart
	$rsProducts = getProductsFromArray($itemsIds);

	// adding to each products new KEY_VALUE pair
	// "real price" = ammount * price
	// "cnt" = ammount of bought product

	// &$item - & is added so whenever var is changed in itteration
	// it will also change in $rsProducts array.

	$i = 0;
	foreach($rsProducts as &$item){
		$item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : 0;
		if($item['cnt']){
			$item['realPrice'] = $item['cnt'] * $item['price'];
		} else {
			//if product in cart but count = 0, remove fromm cart.
			unset($rsProducts[$i]);
		}
		$i++;
	}

	if(! $rsProducts){
		echo "Cart is empty";
		return;
	}

	// recieved array of bought products
	$_SESSION['saleCart'] = $rsProducts;

	$rsCategories = getAllMainCatsWithChildren();

	// hideLoginBox - flag to hide/dispaly blocks of login and reg. in sidebar
	if(! isset($_SESSION['user'])){
		$smarty->assign('hideLoginBox', 1);
	}

	$smarty->assign('pageTitle', 'Orders');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'order');
	loadTemplate($smarty, 'footer');
} 

/**
 * 
 * AJAX function that saves the order
 * 
 * @param array of bought products
 * @return JSON with result  
 * 
 */

function saveorderAction(){
	//Recieving array with purchased products
	$cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;

	//if cart is empty then we return relative message

	if(! $cart) {
		$resData['success'] = 0;
		$resdata['message'] = 'There are no products in the cart';
		echo json_encode($resData);
		return;
	}

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$adress = $_POST['adress'];

	$orderId = makeNewOrder($name, $phone, $adress);

	if (! $orderId){
		$resData['success'] = 0;
		$resdata['message'] = 'Error while creating error';
		echo json_encode($resData);
		return;
	}

	$res = setPurchaseForOrder($orderId, $cart);

	if($res){
		$resData['success'] = 1;
		$resData['message'] = 'Order places succesfully';
		unset($_SESSION['saleCart']);
		unset($_SESSION['cart']);
	} else {
		$resData['success'] = 0;
		$resData['message'] = 'Something went wrong.';
	}

	echo json_encode($resData);
}