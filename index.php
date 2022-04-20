<?php
//Cette fonction doit être appelée avant tout code html
session_start();

//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
$titre = "Index du forum";
include("identifiants.php");
include("debut.php");
include("menu.php");

echo'<i>Vous êtes ici : </i><a id="ici" href ="index.php">Acceuil du forum</a>';
?>
<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <LINK rel="stylesheet" type="text/css" href="style.css">
      <title>FORUM</title>
    </head>
      <body>
      <h1>Forum</h1>
      <div id="foot">
          <div id="footer">
            <br>
            <br><div id="inlineblock">
            <ul id="footnav" class="foot-nav">
              <label id="labelmenufoot">MENU DE NAVIGATION</label><br />
              <br>
              <li id="lifoot"><a href="index.php">Acceuil</a></li><br />
              <li id="lifoot"><a href="ressources.php">Ressources</a></li><br />
              <li id="lifoot"><a href="chat.php">Chat</a></li>
            </ul>
            <div id="options">
            <ul class="foot-nav">
            <label id="labelmenufoot">OPTIONS</label><br />
            <br>
              <li id="lifoot"><a href="">Inscription</a></li><br/>
              <li id="lifoot"><a href="">Connexion</a></li><br />
              <li id="lifoot"><a href="">Mon profil</a></li>
            </ul>
            </div>
            <div id="reseaux">
            <ul class="foot-nav">
            <label id="labelmenufoot">Réseaux</label>
            <li><p id="prenomfoot">Théo : </p><a href="https://github.com/theocbr"><ion-icon id="iconfootgithub" name="logo-github"></ion-icon> &nbsp </a><a href=""><ion-icon id="iconfootlkdn" name="logo-linkedin"></ion-icon>&nbsp&nbsp</a><a href="https://basicforcsgo.com/"><ion-icon id="iconfootweb" name="globe-outline"></ion-icon>&nbsp</a></li>
              <li><p id="prenomfoot">Stanislas :</p><a href="https://github.com/Smithleystan"> <ion-icon id="iconfootgithub" name="logo-github"></ion-icon> &nbsp</a><a href=""><ion-icon id="iconfootlkdn" name="logo-linkedin"></ion-icon>&nbsp&nbsp</a><a href=""><ion-icon id="iconfootweb" name="globe-outline"></ion-icon>&nbsp</a></li>
            </ul>
            </div>
            <div id="search">
            <label id="labelmenufoot">Rechercher :</label><br />
            <br>
            <ion-icon id="iconfootsearch" name="search-circle-outline"></ion-icon><input type="search" id="search" placeholder="Search...." required><button id="btnrechercher" >Rechercher</button>
            </div>
            </div>
            <br>
            <br>
          </div>
          <hr>
          <p id="copyright">Copyright © - 2022 All rights reserved By Théo & Stanislas </p>
          <br>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </body>
        </html>