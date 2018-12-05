<?php
//connexion a la base de données
// dsn = Data Source Name = driver MYSQL
$dsn='mysql:dbname=pizzeria;host=localhost';
//login
$login='root';
// Mot de passe
$motDePasse='root';

// Connexion au serveur MySQL
try{
    // CREATION DE LA CONEXION A LA BASE DE DONNEE SI AUCUNE ERREUR (UTILISER DANS INDEX.PHP)
    $bdd = new PDO($dsn, $login, $motDePasse,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
// SI ERREUR DESCRIPTION DE CETTE DERNIERE DANS LE NAVIGATEUR
catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}