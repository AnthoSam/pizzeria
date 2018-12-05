<?php

include "cnx.php";
$sql = $bdd->prepare("select nomLiv from livreus where numLiv = ".$_GET['']);
$sql->execute();

foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "<p>".$ligne['nomLiv']."</p>";
}


?>