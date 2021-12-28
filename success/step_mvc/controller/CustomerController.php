<?php
 include_once './model/Customer.php';
class CustomerController{
    public function index()
    {
        include_once './view/customer/index.php';
    }
    public function create()
    {
        include_once './view/customer/create.php';
    }
    public function edit()
    {
        include_once './view/customer/edit.php';
    }
    public function delete()
    {
        include_once './view/customer/delete.php';
    }
    public function add()
    {
    $alert = '';
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if( $username == '' ||  $password == '' ){
            $alert = 'Vui lòng nhập đầy đủ thông tin';
        }else{
            $objModel = new Customer();
            $objModel->save();
            $alert = 'Lưu thành công';
        }
    }
    
    include_once './view/customer/create.php';
    include_once './view/customer/edit.php';
    include_once './view/customer/delete.php';

    }

    public function home()
    {
        echo "123";
    }
}
