<?php
include_once "database.php";
class User extends Model {
    public $id      = 0;
    public $name     = "";
    public $nghe    = "";
    public function find($id)
    {
        $sql = "SELECT * FROM user WHERE id = $id ";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM user";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }
    public function store($name, $nghe)
    {
        $sql = "SELECT * FROM user (name,nghe) VALUES ('$name','$nghe')";
        $this->_db->query($sql);
    }
    public function create($name, $nghe)
    {
        $sql = "INSERT INTO user (id,name,nghe) VALUES (NULL,'$name','$nghe') ";
        $this->_db->query($sql);
    }
    public function getAllSearch($name)
    {
        $sql = "SELECT * FROM user WHERE name LIKE '%$name%' OR nghe LIKE '%$name%' ";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }
    public function update($id, $name, $nghe)
    {
        $sql = " UPDATE user SET name='$name', nghe='$nghe' WHERE id='$id'  ";
        $this->_db->query($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id='$id'";
        $this->_db->query($sql);
    }
}






