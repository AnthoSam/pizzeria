<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Pizzeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../JQuery/jquery-3.1.1.js"></script>
    <script src="../JS/mesfonctions.js"></script>
</head>
<body>

    <?php
        include '../PHP/cnx.php';
        $sql = $bdd->prepare("select * from livreurs");
        $sql->execute();
        $sql2 = $bdd->prepare("select * from clients");
        $sql2->execute();
        $sql3 = $bdd->prepare("select * from pizzas");
        $sql3->execute();
        
        
        echo"<table>";
        echo"<tr>";
                echo"<th>numero commande</th>";
                echo"<th>livreur</th>";
                echo"<th>client</th>";
        echo"</tr>";
        echo"<tr>";
            echo "<th><input type='text' name='lname' disabled></th>";
            echo "<th><select id=client onchange='AfficherLesClients()'>";
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
                {  
                    echo "<option value='".$ligne['numLiv']."'>".$ligne['nomLiv']."</option>";
                }
                echo "</select></th>";

                echo "<th><select id=livreurs onchange='AfficherLesLivreurs()'>";
        foreach($sql2->fetchAll(PDO::FETCH_ASSOC) as $ligne)
                {  
                    echo "<option value='".$ligne['numCli']."'>".$ligne['nomCli']."</option>";
                }
                echo "</select></th>";
            echo"</tr>";
            
            echo"</table>";
            echo"<table>";
        echo"<tr>";
                echo"<th>nom pizza</th>";
                echo"<th>nombre personne</th>";
                echo"<th>prix</th>";
                echo"<th>quantité</th>";
        echo"</tr>";
            foreach($sql3->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {  
                
                echo "<option value='".$ligne['numPiz']."'>".$ligne['nomPiz']."</option>";
                echo "<option value='".$ligne['numPiz']."'>".$ligne['nbPers']."</option>";
                echo "<option value='".$ligne['numPiz']."'>".$ligne['prix']."</option>";
            
            }
           
            

?>
</body>
</html>