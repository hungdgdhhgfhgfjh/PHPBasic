<?php
class User
{
    public $id          = '';
    public $email       = '';
    public $password    = '';
    public $numberPhone = '';
    public $name        = '';
    public function getAll()
    {
        $user_json  = file_get_contents("user.json");
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
    public function findId($id)
    {
        $foundId = '';
        $users   = $this->getAll();
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
    public function update($data,$id)
    {
        $users   = $this->getAll();
        foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
                $users[$key]->email            = $data["email"];
                $users[$key]->password         = $data["password"];
                $users[$key]->numberPhone      = $data["numberPhone"];
                $users[$key]->name             = $data["name"];
                break;
            }
        }
        $userString = json_encode($users);
        file_put_contents("user.json",$userString);
    }
    public function delete($id)
    {
        $users   = $this->getAll();
        foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
                unset($users[$key]);
                break;
            }
        }
        $users = array_values($users);
        $userString = json_encode($users);
        file_put_contents("user.json",$userString);
    }
}