<?php
/**
 * 
 * Model for getting products from DB.
 * 
 */

include_once '../config/db.php';

/**
  *
  * Getting last added products
  * 
  * @param integer of limit
  * @return array of products
  *
  */

function getLastProducts($limit = null) {
	global $db;
	$sql = "	SELECT * 
				FROM `products`
				ORDER BY id DESC";

	//in case LIMIT is defined this will add it to request
	if($limit){
		$sql .= " LIMIT {$limit}";
	}

	$rs = mysqli_query($db, $sql);

	//sends the request to main function.
	return createSmartyRsArray($rs);
}


/**
 * 
 * Get products for category $itemId
 * 
 * @param integer categoryId
 * @return array of products.
 * 
 */

function getProductsByCat($itemId){
	global $db;

	
	$itemId = intval($itemId);

	$sql = "	SELECT * 
				FROM products
				WHERE category_id = '{$itemId}' ";

	$rs = mysqli_query($db, $sql);

	

	return createSmartyRsArray($rs);
} 

/**
 * 
 * Retrieve products from DB
 * 
 * @param integer $itemId = product id
 * @return array of products
 * 
 */

function getProductById($itemId){
	global $db;

	$itemId = intval($itemId);

	$sql = "	SELECT *
				FROM products
				WHERE id = '{$itemId}' ";

	$rs = mysqli_query($db, $sql);

	return mysqli_fetch_assoc($rs);
}

/**
 * 
 * Retrieves products for car
 * 
 * @param array of products IDs
 * @return array of products
 * 
 */


function getProductsFromArray($itemsIds) {

	global $db;

	//this function transofms id's to a string with , in between
	$strIds = implode($itemsIds, ', ');


	$sql = "	SELECT *
				FROM products
				WHERE id in ($strIds);";

	$rs = mysqli_query($db, $sql);
	return createSmartyRsArray($rs);

}

/**
 * 
 * Retrieve products
 * 
 */

function getProducts(){

	$sql = "SELECT * 
			FROM `products`
			ORDER BY category_id";

	global $db;
	$rs = mysqli_query($db, $sql);
	
	return createSmartyRsArray($rs);		
}


/**
 * 
 * Adding new products to DB
 * 
 * @param Items name
 * @param Items price
 * @param Items description
 * @param Items category
 * 
 */



function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat){

	$sql = "INSERT INTO products
			SET
				`name` = '{$itemName}',
				`price` = '{$itemPrice}',
				`description` = '{$itemDesc}',
				`category_id` = '{$itemCat}'";

	global $db;
	$rs = mysqli_query($db, $sql);
	return $rs;
}

function updateProduct($itemId, $itemName, $itemPrice, 
						$itemStatus, $itemDesc, $itemCat, $newFileName=null){

		$set = array();

		if($itemName){
			$set[] = "`name` = '{$itemName}'";
		}

		if($itemPrice > 0){
			$set[] = "`price` = '{$itemPrice}'";
		}

		if($itemStatus !== null){
			$set[] = "`status` = '{$itemStatus}'";
		}

		if($itemDesc){
			$set[] = "`description` = '{$itemDesc}'";
		}

		if($itemCat){
			$set[] = "`category_id` = '{$itemCat}'";
		}

		if($newFileName){
			$set[] = "`image` = '{$newFileName}'";
		}

		$setStr = implode($set, ", ");
		$sql = "UPDATE products
				SET {$setStr}
				WHERE id = '{$itemId}'";

	global $db;
	$rs = mysqli_query($db, $sql);
	return $rs;
}

function updateProductImage($itemId, $newFileName){
	$rs = updateProduct($itemId, null, null, 
	null, null, null, $newFileName);

	return $rs;
}