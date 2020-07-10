<?php

/**
* 
* This controller is used to retrieve product details
* (/product/1/)
* 
*/


// connecting model
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


/**
 * 
 *  Once again, this indexAction function recieves smarty object and 
 *  from there you get product id. 
 * 
 */

function indexAction($smarty) {
	$itemId = isset($_GET['id']) ? $_GET['id'] : null;
	if(!$itemId) exit();
	
	$rsCategories = null;
	$rsProduct = null;

	$smarty->assign('itemInCart', 0);
	if(in_array($itemId, $_SESSION['cart'])){
		$smarty->assign('itenInCart', 1);
	}

	// rs= recordset. Here we initialize this variable and store product details.
	$rsProduct = getProductById($itemId);
	// d($rsProduct);

	//get all categories. This is to build left menu. Since this page is generated on the fly you ahve to reestablish in every new controller.
	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', '');
	$smarty->assign('rsCategories',$rsCategories);
	$smarty->assign('rsProduct', $rsProduct);

	
	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'product');
	loadTemplate($smarty, 'footer');
	
}