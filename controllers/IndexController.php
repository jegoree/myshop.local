<?php
/**
 * 
 * 	Home page controller
 * 
 */

 // connecting model
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * 
 * Forming home page content
 * 
 *  @param object $smaty is tempalte engine obj.
 */
function indexAction($smarty){

	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getLastProducts(16);

	$smarty->assign('pageTitle', 'Home page');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);
	

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}
