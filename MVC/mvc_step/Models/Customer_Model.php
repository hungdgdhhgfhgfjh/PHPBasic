<?php
namespace Models;

use PDO;
class Customer_Model{
       private $db_host = "localhost";
       private $db_user = "root";
       private $db_pass = "";
       private $db_name = "list_staff";
       protected $_db ;
        public function __construct()
        {
            $this->_db = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, $this->db_user, $this->db_pass);
        }

        public function getAll()
        {
            $sql = "SELECT * FROM `secretary`";
            $stmt  = $this->_db->query( $sql );
            //tùy chọn kiểu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            //lấy tất cả kết quả
            $Secretary   = $stmt->fetchAll();
            return $Secretary;
        }
        public function getAdd($name,$gender,$age)
        {
            $sql = "INSERT INTO `secretary` (`id`, `name`, `gender`, `age`) VALUES (NULL, '".$name."', '".$gender."', $age);";
            $stmt  = $this->_db->query( $sql );
            //tùy chọn kiểu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            
        }
        public function Update($id,$age,$name,$gender)
        {
            $sql = "UPDATE `secretary` SET `name` = '".$name."', `gender` = '".$gender."', `age` = $age WHERE `secretary`.`id` = $id;";
            $stmt  = $this->_db->query( $sql );
            //tùy chọn kiểu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
        }
    public function delete($id)
    {
        $sql ="DELETE FROM `secretary` WHERE `secretary`.`id` = $id";
        $stmt  = $this->_db->query( $sql );
            //tùy chọn kiểu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        
    }
}