<?php

include_once './models/Customer_Model.php';
use Models\Customer_Model;
class Customer{
    public function add()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";
            // Array
            // (
            //     [page] => add
            //     [name] => Le Quoc Hung
            //     [gender] => sss
            //     [age] => ssss
            // )
            $name   = $_REQUEST["name"];
            $gender = $_REQUEST["gender"];
            $age    = $_REQUEST["age"];
            if($name == "" || $gender == "" || $age == "" )
            {
                $erroname   = "";
                $errogender = "";
                $erroage    = "";
            }
            else
            {
                $objCustomer = new Customer_Model();
                $objCustomer->getAdd($name,$gender,$age);
                header("location:index.php?page=list");
            }
        }
        include_once './views/customers/add.php';
    }
    public function edit()
    {
        $id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";
            // Array
            // (
            //     [page] => add
            //     [name] => Le Quoc Hung
            //     [gender] => sss
            //     [age] => ssss
            // )
            $name   = $_REQUEST["name"];
            $gender = $_REQUEST["gender"];
            $age    = $_REQUEST["age"];
            if($name == "" || $gender == "" || $age == "" )
            {
                $erroname   = "";
                $errogender = "";
                $erroage    = "";
            }
            else
            {
                $objCustomer = new Customer_Model();
                $objCustomer->Update($id,$age,$name,$gender);
                header("location:index.php?page=list");
            }
        }
        include_once './views/customers/edit.php';
    }
    public function list()
    {
        $objCustomer = new Customer_Model();
        $Secretarys = $objCustomer->getAll();
        include_once './views/customers/list.php';
    }
    public function delete()
    {
        $id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
        $objCustomer = new Customer_Model();
        $Secretarys = $objCustomer->delete($id);
        header("location:index.php?page=list");
        include_once './views/customers/delete.php';
    }
}