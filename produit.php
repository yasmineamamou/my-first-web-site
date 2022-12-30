<?php 
class Produit
{   private int $id;
    private string $code;
    private string $intitule;
    private float $prix;
    private int $garantie;
    

 
    
    public function __construct(int $id, string $code, string $intitule, float $prix, int $garantie)
    {   $this-> id=$id;
        $this-> code=$code;
        $this-> intitule=$intitule;
        $this-> prix=$prix;
        $this-> garantie=$garantie;
    }
    public function getId():int{return $this->id;}
    public function Id(int $id){$this->id=$id;}
    public function getCode():string{return $this->code;}
    public function setCode(string $code){$this->code=$code;}
    public function getIntitule():string {return $this -> intitule;}
    public function setIntitule(string $intitule){$this ->intitule=$intitule ;}
    public function getPrix():float {return $this->prix;}
    public function setPrix(float $prix){$this -> prix= $prix;}
    public function getGarantie():int {return $this ->garantie;}
    public function setGarantie(int $garantie){ $this->garantie=$garantie;}
   
}
?>