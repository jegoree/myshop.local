<?php

/**
 * 
 *  Categories page controller.
 * 
 */

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * 
 * Forming categories page
 * 
 * @param object $smarty tepmlate engine
 * 
 */


function indexAction($smarty) {
	$catId = isset($_GET['id']) ? $_GET['id'] : null;
	if(!$catId) exit();

	$rsProducts = null;
	$rsChildCats = null;


	$rsCategory = getCatById($catId); 

	/**
	 * 
	 * If it's main categoryh we show child categories
	 * else we'll show products
	 * 
	 */
	if($rsCategory['parent_id'] == 0 ){
		$rsChildCats = getChildrenForCat($catId);
	} else {
		$rsProducts = getProductsByCat($catId);
	}

	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', $rsCategory['name']);

	// d($rsProducts);

	$smarty->assign('rsCategory', $rsCategory);
	$smarty->assign('rsProducts', $rsProducts);
	$smarty->assign('rsChildCats', $rsChildCats);


	$smarty->assign('rsCategories', $rsCategories);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'category');
	loadTemplate($smarty, 'footer');

}