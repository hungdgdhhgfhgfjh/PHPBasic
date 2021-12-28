<?php
namespace Controller;
include_once "./Models/categoryBook.php";
use PDO;
use Models\CategoryBook;
class CategorybookController{
    public function add()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //     echo "<pre>";
            //    print_r($_REQUEST);
            //     echo "</pre>";
            //     Array
            //     (
            //     [categoryBooks] => edit
            //     [id] => 1
            //     [categoryBook] => book love
            //     )
            $categoryBook =$_REQUEST["categoryBook"];
            if($categoryBook == "")
            {

            }   
           else
            {
                $objCategorybook = new CategoryBook();
                $objCategorybook->getAdd($categoryBook);
                header("location:index.php?categoryBooks=list");
            }
        }    
        include_once "./Views/categorybook/add.php";
    }
    public function edit()
    {
        $id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";

        $objCategorybook = new CategoryBook();
        $categoryBook    = $objCategorybook->getFect($id);
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //     echo "<pre>";
            //    print_r($_REQUEST);
            //     echo "</pre>";
            //     Array
            //     (
            //     [categoryBooks] => edit
            //     [id] => 1
            //     [categoryBook] => book love
            //     )
            $categoryBook =$_REQUEST["categoryBook"];
            if($categoryBook == "")
            {
                    $errocategoryBooks  = "mời bạn nhập your category book"; 
            }   
           else
            {
                $objCategorybook->update($id,$categoryBook);
                header("location:index.php?categoryBooks=list");
            }

        }
        // echo "<pre>";
        // print_r($categoryBook);
        // echo "</pre>";
        include_once "./Views/categorybook/edit.php";
        
    }
    public function list()
    {
        $search = (isset($_REQUEST['search'])  && !empty($_REQUEST['search'])) ? $_REQUEST["search"] : "";
        $objCategorybook = new CategoryBook();
        $categoryBooks   = $objCategorybook->getAll($search);
        // echo "<pre>";
        // print_r($categoryBooks);
        // echo "</pre>";
        include_once "./Views/categorybook/list.php";
        
    }
    public function delete()
    {
        $id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
        $objCategorybook = new CategoryBook();
        $objCategorybook->detroy($id);
        header("location:index.php?categoryBooks=list");
        include_once "./Views/categorybook/delete.php";
        
    }
}