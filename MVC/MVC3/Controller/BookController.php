<?php
namespace Controller;
include_once "./Models/Book.php";
use PDO;
use Models\Book;
class BookController{
    public function add()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //     echo "<pre>";
            //    print_r($_REQUEST);
            //     echo "</pre>";
                // Array
                // (
                //     [book] => edit
                //     [id] => 1
                //     [book_code] => 1
                //     [book_name] => sách đắc nhân tâm
                //     [categoryBook] => https://sachhay24h.com/uploads/images/review-sach-dac-nhan-tam.jpg
                //     [categorybooks_id] => 3
                // )
            
                $book_name      = $_REQUEST["book_name"];
                $image_book     = $_REQUEST["image_book"];
                $categoryBook   = $_REQUEST["categorybooks_id"];
                if( $book_name == "" || $image_book == "" || $categoryBook == "" )
                {
                        $error_book_code = ""; 
                }
                else
                {
                    $objBook = new Book();
                    $objBook->getadd($book_name,$image_book,$categoryBook);
                    header("location:index.php?book=list");
                }
        }
        include_once "./Views/book/add.php";
    }
    public function edit()
    {
        $id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";

        $objBook = new Book();
        $book    = $objBook->getFect($id);
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
                echo "<pre>";
               print_r($_REQUEST);
                echo "</pre>";
                // Array
                // (
                //     [book] => edit
                //     [id] => 1
                //     [book_code] => 1
                //     [book_name] => sách đắc nhân tâm
                //     [categoryBook] => https://sachhay24h.com/uploads/images/review-sach-dac-nhan-tam.jpg
                //     [categorybooks_id] => 3
                // )
               
                $book_name      = $_REQUEST["book_name"];
                $image_book     = $_REQUEST["image_book"];
                $categoryBook   = $_REQUEST["categorybooks_id"];
                if( $book_name == "" || $image_book == "" || $categoryBook == "" )
                {
                        $error_book_code = ""; 
                }
                else
                {
                    $objBook->Update($id,$book_name,$image_book,$categoryBook);
                    header("location:index.php?book=list");
                }
        }
        include_once "./Views/book/edit.php";
    }
    public function list()
    {
        $search = (isset($_REQUEST['search'])  && !empty($_REQUEST['search'])) ? $_REQUEST["search"] : "";
        $objBook = new Book();
        $books   = $objBook->getAll($search);
        include_once "./Views/book/list.php";
    }
    public function delete()
    {
        $id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
        $objBook = new Book();
        $objBook->detroy($id);
        header("location:index.php?book=list");
        include_once "./Views/book/list.php";
    }
}