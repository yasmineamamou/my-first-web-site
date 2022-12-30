<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire de modification</title>
    </head>
    <body>
        <?php
       
       include 'ProduitManager.php';
       require_once 'produit.php';
            
                $produit=new Produit(0,$_POST['code'],$_POST['intitule'],$_POST['prix'],0);
                $db=new PDO('mysql:host=localhost;dbname=amemoustore','root','');
                $manager=new ProduitManager($db);
                echo "<br>***modification Produit ***<br>";
                $manager->update($produit);
             
        ?>
        
    </body>
</html>