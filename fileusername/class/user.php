<?php
class User {
    public $email;
    public $id;
    public $password;
     public function getAll()
    {
        $user_json   = file_get_contents("user.json");
           if($user_json)
            {
            $users = json_decode($user_json);
            }
            else
            {
            $users =[];
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
        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die();                                              
        foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
               $users[$key]->email = $data["email"]; 
               $users[$key]->password = $data["password"]; 
               break;
            }
        }
        $userSring = json_encode($users);
        file_put_contents("user.json",$userSring);


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
        $userSring = json_encode($users);
        file_put_contents("user.json",$userSring);


    }
}