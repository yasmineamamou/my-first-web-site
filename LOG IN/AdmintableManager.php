<?php
class AdmintableManager
{
    public $db;
    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function setDb(PDO $db)
    {
        $this->db=$db;
    }
    public function add( Admin $mat)
    {
        $q=$this->db->prepare('INSERT INTO admintable (user,pass)VALUES(:user,:pass)');
        // Aassignation des valeur
        $q->bindValue(':user',$mat->getUser());
        $q->bindValue(':pass',$mat->getPass());
       
       
        // Execution de la requete
        $R=$q->execute();
        echo $this->db->lastInsertId();
        if(!$R){
            echo"echec insertion";
        }
        else{
            echo"insertion reussit";
        
        }
        
    }
}