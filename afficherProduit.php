<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire d'affichage</title>
    </head>
    <body>
        <?php
       
       include 'ProduitManager.php';
          require_once 'produit.php';
                
                $db=new PDO('mysql:host=localhost;dbname=amemoustore','root','');
                $manager=new ProduitManager($db);
                $T=$manager->getProduits();
                foreach($T as $produit)
                {
                echo "<li>"."Id: ".$produit->getId()." ** ".
                "Code : ".$produit->getCode()." ** ".
                "Intitule : ".$produit->getIntitule()." ** ".
                " Prix : ".$produit->getPrix()." ** ".
                " Garantie: ".$produit->getGarantie()." ** ";
                }
                echo "</ul>";
                ?>

             
             
             
             
             
             
        ?>
        
    </body>
</html>