<?php 
namespace Models;
include_once "database.php";
use Models\Model; 
use PDO;
class categorybook extends Model {
    public function getAll($search)
    {
        if($search){
            $sql = "SELECT * FROM `categorybooks` where `category` like '%".$search."%' ";
        }
        else{
            $sql = "SELECT * FROM categorybooks";
        }
       
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $categoryBooks = $stmt->fetchAll();
        return $categoryBooks;
    }
    public function getFect($id)
    {
        $sql = "SELECT * FROM categorybooks  where id =$id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $categoryBook = $stmt->fetch();
        return $categoryBook;
    }
    public function update($id,$categoryBook)
    {
        $sql = "UPDATE `categorybooks` SET `category` = '".$categoryBook."' WHERE `categorybooks`.`id` = $id;";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
    public function getAdd($categoryBook)
    {
        $sql = "INSERT INTO `categorybooks` (`id`, `category`) VALUES (NULL, '".$categoryBook."');";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
    public function detroy($id)
    {
        $sql = "DELETE FROM `categorybooks` WHERE `categorybooks`.`id` = $id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
}
