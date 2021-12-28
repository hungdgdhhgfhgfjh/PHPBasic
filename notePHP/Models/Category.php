<?php
namespace Models;
include_once "database.php";
use Models\Model; 
use PDO;
class Category extends Model{
    public function getAll()
    {
        $sql = "SELECT * FROM categiries ";
    

        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $categiries = $stmt->fetchAll();
        return $categiries;
    }
}