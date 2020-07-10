<?php
/**
 * 
 * This module is for working with order table
 * 
 */

include_once '../config/db.php';

/**
 * 
 * This code creates new order.
 * 
 * @param string $name
 * @param string $phone
 * @param string $adress
 * 
 */

function makeNewOrder($name, $phone, $adress) {
    global $db;
    //> Details initialization
    $userId     = $_SESSION['user']['id'];

    $comment    = " User ID: {$userId}<br>
                    Name: {$name}<br>
                    Phone: {$phone}<br>
                    Adress: {$adress}";
                    
    $dateCreated    = date('Y.m.d H:i:s');
    $userIp         = $_SERVER['REMOTE_ADDR'];
    //<

    //SQL Request
    $sql = "INSERT INTO 
            orders(`user_id`, `date_created`, `date_payment`, `status`, `comment`, `user_ip`)
            VALUES ('{$userId}', '{$dateCreated}', null, '0', '{$comment}', '{$userIp}')";

    $rs = mysqli_query($db, $sql);

    if($rs){
        $sql = "SELECT id 
                FROM orders
                ORDER BY id DESC
                LIMIT 1";

        $rs = mysqli_query($db, $sql);

        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])){
            return $rs[0]['id'];
        }
    }

    return false;

}

/**
 * 
 * Get list of oreders for user $userId
 * 
 * @param user's id
 * @return array with orders with linked products
 * 
 */

function getOrdersWithProductsByUser($userId){
    global $db;
    $userId = intval($userId);

    $sql = "SELECT * FROM orders 
            WHERE user_id = '{$userId}'
            ORDER BY id DESC";

    $rs = mysqli_query($db, $sql);

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)){
        $rsChildren = getPurchaseForOrder($row['id']);

        if($rsChildren){
            $row['children'] = $rsChildren;
            $smartyRs[] = $row; 
        }
    }

    return $smartyRs; 

}

/**
 * 
 * Gets all orders for admin page
 * 
 */

function getOrders(){
    $sql = "SELECT o.*, u.name, u.email, u.phone, u.adress
            FROM orders AS `o`
            LEFT JOIN users as `u` ON o.user_id = u.id
            ORDER BY id DESC";
    
    global $db;
    $rs = mysqli_query($db, $sql);
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)){
        $rsChildren = getProductsForOrder($row['id']);

        if($rsChildren){
            $row['children'] = $rsChildren;
            $smartyRs[] = $row; 
        }
    }

    return $smartyRs; 

}


/**
 * 
 * Get products for orders in admin page
 * 
 * @param integer ID of order
 * @return array with products
 * 
 */


function getProductsForOrder($orderId){

    $sql = "SELECT * 
            FROM purchase AS pe
            LEFT JOIN products AS ps
                ON pe.product_id = ps.id
            WHERE (`order_id` = '{$orderId}')";

    global $db;
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * 
 * Update order status
 * 
 */

function updateOrderStatus($itemId, $status){

    $status = intval($status);

    $sql = "UPDATE orders
            SET `status` = '{$status}'
            WHERE id = '{$itemId}'";
 

    global $db;
    $rs = mysqli_query($db, $sql);

    return $rs;
}

/**
 * 
 * Update payment date
 * 
 */

 function updateOrderDatePayment($itemId, $datePayment){

    $sql = "UPDATE orders
            SET `date_payment` = '{$datePayment}'
            WHERE id = '{$itemId}'";

    
    global $db;
    $rs = mysqli_query($db, $sql);

    return $rs;
 }