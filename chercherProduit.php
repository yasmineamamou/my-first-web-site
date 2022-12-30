<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire de recherche</title>
    </head>
    <body>
        <?php

        include 'ProduitManager.php';
          require_once 'produit.php';
            $i=$_POST['id'];
                
                $db=new PDO('mysql:host=localhost;dbname=amemoustore','root','');
                $manager=new ProduitManager($db);
                echo "<br>***recherche de produit***<br>";
                $produit=$manager->get($i);
                if($produit)
                echo "La matiere recherchee a comme :".
                "<ul>".
                "<li> Id : ".$produit->getId()."</li>".
                "<li> Code : ".$produit->getCode()."</li>".
                "<li> Intitule : ".$produit->getIntitule()."</li>".
                "<li> Prix : ".$produit->getPrix()."</li>".
                "<li> Garantie : ".$produit->getGarantie()."</li>".
               
                "</ul>";
             
               else echo "aucun produit trouvée"
             
             
             
             
        ?>
        
    </body>
</html>