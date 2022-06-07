<?php 
// Connexion à la base de donnée , on indique la table .
try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8','root','');
}catch(Exception $e){
    die('Erreur'.$e->getMessage());
}

?>