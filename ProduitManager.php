<?php
class ProduitManager
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
    public function add(Produit $mat)
    {
        $q=$this->db->prepare('INSERT INTO produit (id,code,intitule,prix,garantie)VALUES(0,:cod,:intit,:prix,:gara)');
        // Aassignation des valeur
        $q->bindValue(':cod',$mat->getCode());
        $q->bindValue(':intit',$mat->getIntitule());
        $q->bindValue(':prix',$mat->getPrix());
        $q->bindValue(':gara',$mat->getGarantie());
       
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
    public function update(Produit $mat)
    {
        $q=$this->db->prepare('UPDATE produit SET intitule=:intit and prix=:prix  WHERE code=:cod');
        // Aassignation des valeur
        $q->bindvalue(':intit', $mat->getIntitule());
        $q->bindvalue(':prix', $mat->getPrix());
        $q->bindvalue(':cod', $mat->getCode());
        

        // Execution de la requete
        $R=$q->execute();
        echo "voici".$R."<br>";
            if(!$R)
            echo "echec modification";
            else 
            echo" modification reussit";
    }
    public function delete(Produit $mat)
    {
        $this->db->exec('DELETE FROM produit WHERE id='.$mat->getId());
    }
    
    public function get($id)
    {
        $id = (int)  $id;
        $q = $this->db->query('SELECT * FROM produit WHERE id ='.$id);
        if ($q->rowCount()) {
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $mat=new Produit($donnees["id"],$donnees["code"],$donnees["intitule"],$donnees["prix"],$donnees["garantie"]);
        return $mat;
        }
        return null;
    }
    public function getProduits()
    {
        $produits= array();
        $q = $this->db->query('SELECT * FROM produit ');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
        $mat=new Produit($donnees["id"],$donnees["code"],$donnees["intitule"],$donnees["prix"],$donnees["garantie"]);
        $produits[]= $mat;
        }
        return $produits;
    }
}