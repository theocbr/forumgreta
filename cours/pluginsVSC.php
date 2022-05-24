<?php
echo'<i>Vous êtes ici : </i><a id="ici" href ="pluginsVSC.php">Plugins Visual Studio Code</a>';
?>
<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="../cours/style/stylecours.css" />
      <title>Plugins VSC</title>
    </head>
    <body></body>
  </html>
  <h1 id="titreplugVSC">
    Les plugins/extensions à installer sur Visual Studio Code :
  </h1>

  <div id="containerplugins">
    <div id="gaucheplugins">
      <ul>
        <li id="liplugins">- Auto Rename Tag</li>
        <li id="lipluginsdescr">est un puissant assistant d'intelligence artificielle gratuit conçu pour vous aider à coder plus rapidement,
           à réduire les erreurs et à découvrir les meilleures pratiques de codage. </li>
        <li id="liplugins">- Bracket Pair Corolizer</li>
        <li id="lipluginsdescr">Cette extension permet d'identifier les supports assortis avec des couleurs.
           L'utilisateur peut définir les caractères à faire correspondre et les couleurs à utiliser.</li>
        <li id="liplugins">- CSS Peek</li>
        <li id="lipluginsdescr">Gérez les demandes d'extraction et effectuez des revues de code dans votre IDE avec un contexte d'arborescence 
          source complet. Commentez n'importe quelle ligne, pas seulement les diffs. Utilisez le saut à la définition,
           vos raccourcis clavier préférés et l'intelligence du code avec une plus grande partie de votre flux de travail.</li>
        <li id="liplugins">- French Language Pack For Visual Studio Code (Pour CSS)</li>
        <li id="lipluginsdescr">Le module linguistique français fournit une expérience d'interface utilisateur localisée pour VS Code.</li>
        
       <li id="liplugins">- HTML CSS Support</li>
        <li id="lipluginsdescr">Achèvement des identifiants et attributs de classe en HTML et CSS pour Visual Studio Code.</li> 
      </ul>
      <br>
      <br>
    </div>
    <div id="droiteplugins">
      <ul>
        <li id="liplugins">- PHP Debug</li>
        <li id="lipluginsdescr">Gérez les demandes d'extraction et effectuez des revues de code dans votre IDE
           avec un contexte d'arborescence source complet. Commentez n'importe quelle ligne, pas seulement les diffs.
            Utilisez le saut à la définition, vos raccourcis clavier préférés et l'intelligence du code avec une plus grande partie de 
            votre flux de travail. (Pour PHP)</li>
        <li id="liplugins">- PHP Intelephense</li>
        <li id="lipluginsdescr">est un serveur de langage PHP hautes performances doté de fonctionnalités essentielles pour un développement PHP 
          productif.</li>
        <li id="liplugins">- Prettier - Code Formater</li>
        <li id="lipluginsdescr">est un formateur de code opiniâtre. Il applique un style cohérent en analysant votre code et 
          en le réimprimant avec ses propres règles qui prennent
          en compte la longueur de ligne maximale, en encapsulant le code si nécessaire.</li>
        <li id="liplugins">- Javascript Code snippets</li>
        <li id="lipluginsdescr">contient des extraits de code pour JavaScript dans la syntaxe ES6 pour l'éditeur Vs Code 
          (prend en charge JavaScript et TypeScript).</li>
        <li id="liplugins">- Path Intellisense</li>
        <li id="lipluginsdescr">Plugin Visual Studio Code qui complète automatiquement les noms de fichiers.</li>
      </ul>
      <br>
      <br>
    </div>
  </div>
  <div id="foot">
          <div id="footer">
            <br>
            <br><div id="inlineblock">
            <ul id="footnav" class="foot-nav">
              <label id="labelmenufoot">MENU DE NAVIGATION</label><br />
              <br>
              <li id="lifoot"><a href="../index.php">Acceuil</a></li><br />
              <li id="lifoot"><a href="../ressources.php">Ressources</a></li><br />
              <li id="lifoot"><a href="../chat.php">Chat</a></li>
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
            <li><p id="prenomfoot">Théo : </p><a href="https://github.com/theocbr"><ion-icon id="iconfootgithub" name="logo-github"></ion-icon> &nbsp </a><a href="https://my.indeed.com/resume?hl=fr&co=FR&from=gnav-homepage"><ion-icon id="iconfootlkdn" name="logo-linkedin"></ion-icon>&nbsp&nbsp</a><a href="https://basicforcsgo.com/"><ion-icon id="iconfootweb" name="globe-outline"></ion-icon>&nbsp</a></li>
              <li><p id="prenomfoot">Stanislas :</p><a href="https://github.com/Smithleystan"> <ion-icon id="iconfootgithub" name="logo-github"></ion-icon> &nbsp</a><a href=""><ion-icon id="iconfootlkdn" name="logo-linkedin"></ion-icon>&nbsp&nbsp</a><a href=""><ion-icon id="iconfootweb" name="globe-outline"></ion-icon>&nbsp</a></li>
            </ul>
            </div>
            <div id="search">
            <br>
            <ion-icon id="iconfootsearch" name="search-circle-outline"></ion-icon><input type="search" id="search" placeholder="Search...." required><button id="btnrechercher" ><ion-icon id="iconfootclick" name="navigate-outline"></ion-icon></button>
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
</html>
