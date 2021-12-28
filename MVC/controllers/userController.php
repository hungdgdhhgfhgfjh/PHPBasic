<?php
include_once "./models/User.php";
class userController{

    public function  add()
    {
        if($_SERVER["REQUEST_METHOD"]  == "POST")
        {
            $name = $_REQUEST["name"];
            $nghe = $_REQUEST["nghe"];
            $objUser = new User;
            $objUser->create($name,$nghe);
            header("location:home.php?user1=list");
        }
        include_once 'view/user/add.php';
    }
    public function  edit()
    {
        $id = $_REQUEST["id"];
        $objUser = new User();
        $user = $objUser->find($id);
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['name'];
            $nghe = $_REQUEST['nghe'];
            if ($name == '') {
                $errors['name'] = "Vui lòng nhập tên";
            }
            if ($nghe == '') {
                $errors['nghe'] = "Vui lòng nhập nghề nghiệp";
            }

            if (count($errors) == 0) {
                $objUser = new User();
                $data = [
                    'name' => $name,
                    'nghe' => $nghe,
                ];
                $objUser->update($id, $name, $nghe);
                $_SESSION['alert'] = "Cập nhật thành công";
                header("Location: home.php?user1=list");
            }
        }
        include_once 'view/user/edit.php';
    }
    public function  delete()
    {
        $id =(isset($_REQUEST["id"])  && !empty($_REQUEST["id"]))?$_REQUEST["id"]:'';
        if(!$id){
            
        }
       $objUser = new User();
       $objUser->delete();
       $_SESSION["alert"] ="xoa thanh cong";
       include_once "view/user/delete.php";
    }
    public function  list()
    {
        $s =(isset($_SESSION["s"])  && !empty($_SESSION["s"])) ? $_SESSION["s"]:"";
        $objUser = new User();
        if($s){
            $users = $objUser->getAllsearch($s);
        }
        else{
            $users = $objUser->getAll();
        }
        include_once "view/user/list.php";
    }
}