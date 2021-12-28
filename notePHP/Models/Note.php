<?php
namespace Models;
include_once "database.php";
use Models\Model; 
use PDO;
class Note extends Model{
    public function noteUser($category_id,$note_Content,$user_id,$name_note)
    {
        $sql  = "INSERT INTO `notes` (`id`, `note_Content`, `name_note`, `user_id`, `category_id`) VALUES (NULL, '".$note_Content."', '".$name_note."', '".$user_id."', '".$category_id."');";
        $result = $this->db_->query($sql);
        $result->setFetchMode(PDO::FETCH_OBJ);
        $users    = $result->fetchAll();    
    }
}