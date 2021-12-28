<?php
class User
{
    public $id;
   public $name;
   public $email;
   public $password;
   public $numberPhone;
   public function getAll()
   {
       $user_json = file_get_contents("user.json");
       if($user_json)
       {
           $users = json_decode($user_json);
       }
       else
       {
           $users = [];
       }
       return $users;
   }
   public function find($id)
   {
        $users      = $this->getAll();
        $foundId    = "";
        foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
                $foundId = $user;
                break;
            }
        }
        return $foundId;
   }
   public function update($id,$data)
   {
    $users      = $this->getAll();
    foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
                $users[$key]->email         = $data["email"];
                $users[$key]->password      = $data["password"];
                $users[$key]->numberPhone   = $data["numberPhone"];
                $users[$key]->name          = $data["name"];
                break;
            }
        }
        $userString = json_encode($users);
        file_put_contents("user.json",$userString);
   }
   public function delete($id)
   {
    $users      = $this->getAll();
    foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
                unset($users[$key]);
                break;
            }
        }
        echo "<pre>";
        print_r($users);
        echo "</pre>";
        $users = array_values($users);
        $userString = json_encode($users);
        file_put_contents("user.json",$userString);
   }
   
   



}