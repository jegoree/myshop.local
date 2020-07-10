<?php

/**
 *  Model for categories table
 */

	include_once '../config/db.php';


	/**
	 * 
	 * Get sub categories for main category $catId
	 * 
	 * @param int $catId has ID of main category
	 * @return array with child categories
	 * 
	 */

	function getChildrenForCat($catId){
		

		$sql = "	SELECT * 
					FROM categories 
					WHERE parent_id = '{$catId}'";
			

		global $db;
		$rs = mysqli_query($db, $sql);

		return createSmartyRsArray($rs);


	}


	/**
	 * 
	 * Get all main categories liked with child categories.
	 * 
	 * @return array with categories
	 * 
	 */
	function getAllMainCatsWithChildren (){
		$sql = '	SELECT * 
					FROM categories 
					WHERE parent_id = 0';

		global $db;
		$rs = mysqli_query($db, $sql);
	
		$smartyRs = array();
	
		while ($row = mysqli_fetch_assoc($rs)){

			$rsChildren = getChildrenForCat($row['id']); 
		
			if ($rsChildren){
				$row['children'] = $rsChildren;
			}
			
			$smartyRs[] = $row;
		
		}
	
		return $smartyRs;
		
	};

	/**
	 * Get categories by ID
	 * 
	 * @param integer $catId = category ID
	 * @return array - category line
	 * 
	 */


	function getCatById($catId){
		
		//a small trick against sql injection.
		$catId = intval($catId);

		global $db;
		//here also you forward is in '' and {} to protect against sql injection.
		$sql = "	SELECT * 
					FROM categories
					WHERE id = '{$catId}'";

			

		$rs = mysqli_query($db, $sql);
		
		
		return mysqli_fetch_assoc($rs);

	}

/**
 * 
 * Function gets categories for the admin panel
 * 
 * @return array with categories 
 * 
 * 
 */

function getAllMainCategories() {

	$sql = 'SELECT * 
			FROM categories
			WHERE parent_id = 0';

	global $db;	

	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);

}

/**
 * 
 * Function gets all categories
 * 
 * @return array with categories
 * 
 */

function getAllCategories() {

	$sql = 'SELECT * 
			FROM categories
			ORDER BY parent_id ASC';

	global $db;	

	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);

}


/**
 * 
 * 
 * 
 */

function insertCat($catName, $catParentId = 0){

	global $db;	
	//request

	$sql = "INSERT INTO
			categories (`parent_id`, `name`)
			VALUES ('{$catParentId}', '{$catName}')";

	mysqli_query($db, $sql);

	$id = mysqli_insert_id($db);

	return $id;
}


/**
 * 
 * Updating categories
 * 
 * @param int $itemId
 * @param int $parentId
 * @param string $newName
 * 
 * @return type
 * 
 */


function updateCategoryData($itemId, $parentId = -1, $newName = ''){
	global $db;	
	$set = array();

	if($newName){
		$set[] = "`name` = '{$newName}'";
	}

	if($parentId > -1) {
		$set[] = "`parent_id` = '{$parentId}'";
	}

	$setStr = implode($set, ", ");

	$sql = "UPDATE categories
			SET {$setStr}
			WHERE id = '{$itemId}'";

	$rs = mysqli_query($db, $sql);

	return $rs;
}