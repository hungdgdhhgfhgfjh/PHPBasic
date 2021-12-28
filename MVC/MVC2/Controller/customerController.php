<?php
namespace Controller;
include_once "./Models/customers.php";
use Models\Customers;
use PDO;
class CustomerController{
    public function add()
    {
        $errorFullname          = "";
        $errorEmail             = '';
        $errorNumberPhone       = '';
        $errorPass_word         = '';
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";
            // Array
            // (
            //     [customer] => add
            //     [fullName] => Lê Quốc Hưng
            //     [address] => hung@gmail.com
            //     [numberPhone] => 0198902000
            //     [pass_word] => sssss
            // )
            $fullName       = $_REQUEST["fullName"];
            $email          = $_REQUEST["email"];
            $numberPhone    = $_REQUEST["numberPhone"];
            $pass_word      = $_REQUEST["pass_word"];
            if($fullName == "" || $email == ""|| $numberPhone == "" || $pass_word == ""  )
            {
                $errorFullname          = "Please enter your  fullname";
                $errorEmail             = "Please enter your  email";
                $errorNumberPhone       = "Please enter your  number phone";
                $errorPass_word         = "Please enter your  password";
            }
            else
            {
                $objCustomer = new Customers();
                $objCustomer->getAdd($fullName,$email,$numberPhone,$pass_word);
                header("location:index.php?customers=list");
            }

            
        }
        include_once "./Views/customer/add.php";
    }
    public function edit()
    {
        $objCustomer = new Customers();
        $id          = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"]))?$_REQUEST["id"]:"";
        $sql         = "SELECT * from customers Where id = $id";
        $stmt        = $objCustomer->db_->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $customers   = $stmt->fetch();
        $errorFullname          = "";
        $errorEmail             = '';
        $errorNumberPhone       = '';
        $errorPass_word         = '';
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";
            // Array
            // (
            //     [customer] => add
            //     [fullName] => Lê Quốc Hưng
            //     [address] => hung@gmail.com
            //     [numberPhone] => 0198902000
            //     [pass_word] => sssss
            // )
            $fullName       = $_REQUEST["fullName"];
            $email          = $_REQUEST["email"];
            $numberPhone    = $_REQUEST["numberPhone"];
            $pass_word      = $_REQUEST["pass_word"];
            if($fullName == "" || $email == ""|| $numberPhone == "" || $pass_word == ""  )
            {
                $errorFullname          = "Please enter your  fullname";
                $errorEmail             = "Please enter your  email";
                $errorNumberPhone       = "Please enter your  number phone";
                $errorPass_word         = "Please enter your  password";
            }
            else
            {
                $objCustomer = new Customers();
                $objCustomer->Update($fullName,$email,$numberPhone,$pass_word,$id);
                header("location:index.php?customers=list");
            }
        }
        include_once "./Views/customer/edit.php";
    }
    public function delete()
    {
        $objCustomer = new Customers();
        $id          = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"]))?$_REQUEST["id"]:"";
        $sql         = "SELECT * from customers Where id = $id";
        $stmt        = $objCustomer->db_->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $customers = $stmt->fetchAll();
        $objCustomer = new Customer();
        $objCustomer->delete($id);
        include_once "./Views/customer/delete.php";
        header("location:index.php");
    }
    public function list()
    {
        $objCustomer = new Customers();
        $customers   = $objCustomer->getAll();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Array
            // (
            //     [search] => sss
            // )
            $search = $_REQUEST["search"];
            if($search == ""){

            }else{
                $customers   = $objCustomer->getAll($search);
                
            }
        }
        include_once "./Views/customer/list.php";
    }
    
}