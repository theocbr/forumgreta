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
            <br>
            <ul id="footnav" class="foot-nav">
              <label id="labelmenufoot">MENU DE NAVIGATION</label>
              <li><a href="index.php">Acceuil</a></li>
              <li><a href="ressources.php">Ressources</a></li>
              <li><a href="chat.php">Chat</a></li>
            </ul>
            <br>
            <br>
          </div>
          <hr>
          <p id="copyright">Copyright © Greta  - All rights reserved </p>
          <br>
          </div>
        </body>
        </html>