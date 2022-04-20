<?php
session_start();
$titre="Connexion";
include("identifiants.php");
include("debut.php");
include("menu.php");
echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Index du forum</a> --> Connexion';
?>