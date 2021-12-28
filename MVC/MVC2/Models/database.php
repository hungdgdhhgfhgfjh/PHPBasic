<?php
namespace Models;
use PDO;
class Model{
    public $db_host = "localhost";
    public $db_name = "shoprh";
    public $db_pass = "";
    public $db_user = "root";
    public $db_;
    public function __construct()
    {
        $this->db_ = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, $this->db_user, $this->db_pass);
    }
}