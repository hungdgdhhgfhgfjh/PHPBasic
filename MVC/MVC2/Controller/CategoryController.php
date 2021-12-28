<?php
namespace Controller;
include_once "./Models/category.php";
use Models\Category;
class CategoryControler
{
    public function add()
    {
        include_once "./Views/category/add.php";
    }
    public function edit()
    {
        include_once "./Views/category/edit.php";
    }
    public function delete()
    {
        include_once "./Views/category/delete.php";
    }
    public function list()
    {
        $objcategory = new Category();
        $categorys  = $objcategory->getAll();
        echo "<pre>";
        print_r($categorys);
        echo "</pre>";
        include_once "./Views/category/list.php";
    }

}