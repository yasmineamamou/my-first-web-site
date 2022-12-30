<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire d'insertion</title>
    </head>
    <body>
        <?php
       
        include 'ProduitManager.php';
            require_once 'produit.php';
            if (empty($_POST['code'])||empty($_POST['intitule'])||empty($_POST['prix'])||empty($_POST['garantie'])):
                echo'erreur il faut remplir tous les champs';
            else :
                
               
                $produit=new Produit(0,$_POST['code'],$_POST['intitule'],$_POST['prix'],$_POST['garantie']);
                $db=new PDO('mysql:host=localhost;dbname=amemoustore','root','');
                $manager=new ProduitManager($db);
                echo "<br>***insertion matiere ***<br>";
                $manager->add($produit);
             
            endif;?>
        
    </body>
</html>