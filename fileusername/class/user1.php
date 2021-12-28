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
            $user = json_decode($user_json);
            }
            else
            {
            $user =[];
            }   
            return $user;
    }
    public function find($id)
    {
        $users       = $this->getAll();    
        $foundId    = "";
        foreach($users as $key => $user)
        {
            if($user->id == $id)
            {
                $foundId    = $user;
                break;
            }
        }
        return $foundId;
    }
  public function update($id,$data)
  {
      $users = $this->getAll();
      foreach($users as $key => $key)
      {
          if($users->id == $id)
          {
              $user[$key]->email    = $data["email"];
              $user[$key]->password = $data["password"];
          }

      }
      
  }
   
}