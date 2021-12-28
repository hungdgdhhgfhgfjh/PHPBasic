<?php
include_once './controller/CustomerController.php';
    
    
    $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 'home';
    
    
    $objCustomerController = new CustomerController();
    

    switch ($page) {
        case 'index':
            $objCustomerController->index();
            break;
        case 'create':
            $objCustomerController->create();
            break;
        case 'edit':
            $objCustomerController->edit();
            break;
        case 'delete':
            $objCustomerController->delete();
            break;
        
        default:
        $objCustomerController->home();
            break;
    }
    