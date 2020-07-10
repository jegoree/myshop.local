<?php

/**
 *  Main functions5
 */


/**
 * 
 *  Generating requested page
 * 
 *  @param sting $controllerName name of controller
 *  @param sting $actionName name of function for page processing
 */

function loadPage($smarty, $controllerName, $actionName = 'index'){
		//This line gets the required controller based on request
		include_once PATH_PREFIX . $controllerName . PATH_POSTFIX;

		//calls neccesary function.
		$function = $actionName . 'Action';
		$function($smarty);
	}

	
function loadTemplate($smarty, $templateName){
	$smarty->display($templateName . TEMPLATE_POSTFIX);
}


/**
 * 
 * Debug function
 * 
 */
function d($value = null, $die = 1){

	echo 'Debug: <br><pre>';
	print_r($value);
	echo '</pre>';

	if($die) die;
}

/**
 * 
 * Converting sub-category result into associative array
 * 
 * @param recordset from getChildrenForCat function
 * @return array
 * 
 */

function createSmartyRsArray($rs){


	if(!$rs) return false;

	$smartyRs = array(); 
	while ($row = mysqli_fetch_assoc($rs)){
		$smartyRs[] = $row;
	}
	
	return $smartyRs;
	
}

function redirect($url){

	if(! $url) $url = '/';
	header("Location: ($url)");
	exit;
	
}