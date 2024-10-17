<?php
require('../model/database.php');
// require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'under_construction'; 
    }
}

switch ($action) {
    case 'under_construction':
        include('../under_construction.php');
        break;

    case 'list_products':
        include('../product_manager/product_list.php');
        break;

    case 'add_product':
        try {
            include('../product_manager/add_product.php');
        } catch (TypeError $e) {
            $error = "TypeError: " . $e->getMessage();
            include('../errors/error.php');
        } catch (Exception $e) {
            $error = "An error occurred: " . $e->getMessage();
            include('../errors/error.php');
        }
        break;

    case 'delete_product':
        include('../product_manager/delete_product.php');
        break;

    default:
        include('../under_construction.php');
        break;
}
?>