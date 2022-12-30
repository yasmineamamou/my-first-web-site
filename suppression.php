<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire de suppression</title>
    </head>
    <body>
        <?php
       
       include 'ProduitManager.php';
       require_once 'produit.php';
            $i=$_POST['id'];
                
                $db=new PDO('mysql:host=localhost;dbname=amemoustore','root','');
                $manager=new ProduitManager($db);
                echo "<br>***suppression Produit ***<br>";
                $produit=new Produit($i,"","",0,0);
                $manager->delete($produit);
             
        ?>
        
    </body>
</html>