<?php 
namespace Models;
include_once "database.php";
use Models\Model; 
use PDO;
class Book extends Model {
    public function getAll($search)
    {
        if($search){
            $sql = "SELECT book_code,book_name,category,image_book FROM `book` JOIN categorybooks on book.categorybooks_id=categorybooks.id WHERE book_name like '%".$search."%' ";
        }
        else{
            $sql = "SELECT book_code,book_name,category,image_book FROM `book` JOIN categorybooks on book.categorybooks_id=categorybooks.id ";
        }
       
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $books = $stmt->fetchAll();
        return $books;
    }
    public function getFect($id)
    {
        $sql = "SELECT * FROM book  where book_code = $id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $categoryBook = $stmt->fetch();
        return $categoryBook;
    }
    public function Update($id,$book_name,$image_book,$categoryBook)
    {
        $sql = "UPDATE `book` SET `book_name` = '".$book_name."', `image_book` = '".$image_book."', `categorybooks_id` = $categoryBook WHERE `book`.`book_code` = $id;";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
    public function getadd($book_name,$image_book,$categoryBook)
    {
        $sql = "INSERT INTO `book` (`book_code`, `book_name`, `image_book`, `categorybooks_id`) VALUES (NULL, '".$book_name."', '".$image_book."', $categoryBook);";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
    public function detroy($id)
    {
        $sql = "DELETE FROM `book` WHERE `book`.`book_code` = $id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
}
