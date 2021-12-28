<?php
namespace Controller;

include_once "./Models/Note.php";
include_once "./Models/Category.php";
use Models\Category;
use Models\Note;

class HomeController{
   public function home()
   {
       include_once "./Views/home/home.php";
   }
   public function createNote()
   {
        $objCategory = new Category();
        $errors = [];
        $categories = $objCategory->getAll();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";
            // Array
            // (
            //     [home] => create
            //     [category_id] => 
            //     [name_note] => 
            //     [note_Content] => 
            // )
            $category_id  = $_REQUEST["category_id"];
            $name_note    = $_REQUEST["name_note"];
            $note_Content = $_REQUEST["note_Content"];
            if($category_id == ""){
                $errors["category_id"] ="bạn chưa nhập chủ đề của note";
            }
            if($name_note == ""){
                $errors["name_note"] ="bạn chưa nhập tên của note";
            }
            if($note_Content == ""){
                $errors["note_Content"] ="bạn chưa nhập nội dung của note";
            }
            if(count($errors) === 0){
                  
            }



        }                              
       include_once "./Views/home/creatNote.php";
   }
   public function edit()
   {
       # code...
   }

}