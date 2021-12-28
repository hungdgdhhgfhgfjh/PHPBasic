<?php
namespace Models;
use PDO;
include_once "database.php";
use Models\Model;
class Category extends Model{
    public function getAll($search="")
    {
            if($search){
                $sql = "SELECT * FROM category Where category like '%".$search."%'";
            }else{
                $sql = "SELECT * FROM category ";
            }
        
        $stmt = $this->db_->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $categorys = $stmt->fetchAll();
        return $categorys;
    }
}