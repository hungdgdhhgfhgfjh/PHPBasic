<?php
namespace Models;
use PDO;
include_once "database.php";
use Models\Model;
class Customers extends Model{
    public function getAll($search="")
    {
            if($search){
                $sql = "SELECT * FROM customers Where fullname like '%".$search."%'";
            }else{
                $sql = "SELECT * FROM customers ";
            }
        
        $stmt = $this->db_->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $customers = $stmt->fetchAll();
        return $customers;
    }
    public function getAdd($fullName,$email,$numberPhone,$pass_word)
    {
    try   {
              $sql  = "INSERT INTO `customers` (`id`, `fullName`, `email`, `pass_word`, `numberPhone`) VALUES (NULL, '".$fullName."', '".$email."', '".$numberPhone."', '".$pass_word."');";
              $result = $this->db_->query($sql);
              $result->setFetchMode(PDO::FETCH_OBJ);
              $users    = $result->fetchAll();    
              if (!$result)
                   {
                       throw new Exception();
                       $error = 'registration failed !';
                   }
          } 
    catch (Exception $e)
               {
                $error = 'registration failed !';
                $_SESSION['error'] = $error;
               
               }
        
    }
    public function Update($fullName,$email,$numberPhone,$pass_word,$id)
    {
        $sql ="UPDATE `customers` SET `fullName` = '".$fullName."', `email` = '".$email."', `numberPhone` = '".$numberPhone."', `pass_word` = '".$pass_word."' WHERE `customers`.`id` = $id;";
        $stmt = $this->db_->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
    public function delete($id)
    {
        $sql ="DELETE FROM `customer` WHERE `customer`.`id` = $id";
        $stmt = $this->db_->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
    }
}