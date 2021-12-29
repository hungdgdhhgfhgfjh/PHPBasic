<?php
namespace Controller;
include_once "./Models/User.php";
use Models\User;


class UserController{
    public function register()
    {
        
        include_once "./Views/user/register.php";
    }
    public function HandleRegister()
    {
        
        //    echo "<pre>";
        //    print_r($_REQUEST);
        //    echo "<pre>";
        //    Array
        // (
        //     [users] => HandleRegister
        //     [name] => hOÀNG ANH
        //     [email] => hungrandy@gmail.com
        //     [password] => hungpro123
        //     [numberPhone] => 0921687290
        // )
        $required_fields = [
            'name' => 'tên',
            'email' => 'email',
            'password' => 'mật khẩu',
            'numberPhone' => 'số điện thoại',
            
        ];
        $_SESSION["errors"] = [];
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $name        = $_REQUEST['name'];
            $email       = $_REQUEST['email'];
            $password    = $_REQUEST['password'];
            $numberPhone = $_REQUEST['numberPhone'];

            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = "Vui lòng nhập " . $label;
                }
             }
            if(count($errors) === 0){
                    $data = $_REQUEST;
                    $userModel = new User();
                    $userModel->store($data,$errors);
            }
            else{
                $_SESSION["errors"] = $errors;
                header("location:index.php?users=register");
            }
        }

    }
    public function login()
    {
        include_once "./Views/user/login.php";
    }
    public function handleLogin()
    {
         //    echo "<pre>";
        //    print_r($_REQUEST);
        //    echo "<pre>";
        //    Array
        // (
        //     [users] => HandleRegister
        //     [name] => hOÀNG ANH
        //     [email] => hungrandy@gmail.com
        //     [password] => hungpro123
        //     [numberPhone] => 0921687290
        // )
        $required_fields = [
            'email' => 'email',
            'password' => 'mật khẩu',
           
            
        ];
        $_SESSION["errors"] = [];
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
          
            $email       = $_REQUEST['email'];
            $password    = $_REQUEST['password'];
          

            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = "Vui lòng nhập " . $label;
                }
             }
            if(count($errors) === 0){
                    $data = $_REQUEST;
                    $userModel = new User();
                    $userModel->handleLogin($data,$errors);
            }
            else{
                $_SESSION["errors"] = $errors;
                header("location:index.php?users=login");

            }
        }
        
    }
}