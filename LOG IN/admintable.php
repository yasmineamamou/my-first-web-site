<?php 
class Admin
{ 
    private string $user;
    private string $pass;
   
    

 
    
    public function __construct( string $user, string $pass)
    {   $this->user=$user;
        $this-> pass=$pass;
     
    }
    
    public function getUser():string{return $this->user;}
    public function setUser(string $user){$this->user=$user;}
    public function getPass():string {return $this -> pass;}
    public function setPass(string $pass){$this ->pass=$pass ;}
   
   
}
?>