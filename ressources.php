<?php
//Cette fonction doit être appelée avant tout code html
 session_start();
//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
$titre = "Index du forum";
// include("identifiants.php");
include("debut.php");
include("menu.php");

echo'<i>Vous êtes ici : </i><a id="ici" href ="ressources.php">Ressources</a>';
?>
<script>
function masquer_div(id)
{
  if (document.getElementById(id).style.display == 'none') {
       document.getElementById(id).style.display = 'block';
  }
  else {
       document.getElementById(id).style.display = 'none';
  }
}
</script>

<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <LINK rel="stylesheet" type="text/css" href="style.css">
      <title>Ressources</title>
    </head>
      <body>
        <div id="divbienvenue">
          <h1 id="h1bienvenue">Bienvenue sur la page Ressources !  </h1>
          <p id="pbienvenue">Vous pouvez y retrouver les meilleurs outils pour développeur web comme des sites, des logiciels, des librairies, des frameworks, de la documentation....</p>
          <p id="pbienvenue">Vous pouvez également contribuer à cet page , il suffit de remplir le formulaire qui se trouve en bas de la page. </p>
          <br>
          <h2 id="h2ressources">Outils très utiles pour le développement web</h2>
        </div>
          <br>
          <div id="container">
            <div id="masque1">
          <input type="button" id="btnmasquer" value="Frameworks" onclick="masquer_div('a_masquer');" />
          </div>
          <div id="masque2">
          <input type="button" id="btnmasquer" value="Outils Web" onclick="masquer_div('a_masquer2');" />
          </div>
          <div id="masque3">
          <input type="button" id="btnmasquer" value="Documentations" onclick="masquer_div('a_masquer3');" />
          </div>
          <div id="masque4">
          <input type="button" id="btnmasquer" value="Logiciels" onclick="masquer_div('a_masquer4');" />
          </div>
          <div id="masque5">
          <input type="button" id="btnmasquer" value="S'exercer" onclick="masquer_div('a_masquer5');" />
          </div>
          </div>
          <br>
          <div id="a_masquer" style="display:none">
          <br>
          <p id="pdiv">Frameworks</p>
            <p id="psites"><b>React.js & Angular & Node.js & Vue.js & jQUERY & Next.js : </b> framework Javascript | <b>Bootstrap & Pure.css : </b> framework CSS  |
            <b>Cake.php & Symfony & Laravel : </b> framework PHP</p>
           <br>
          </div>
          <div id="a_masquer2" style="display:none">
          <br>
          <p id="pdiv">Outils Web</p>
            <p id="psites"><b>Codepen: </b> Librairies communautaires | <b>Cssgradient: </b> Générateur de couleur | <b>uiGradient: </b> Générateur de dégradés de couleurs 
          | <b>Coolors: </b> Générateur de combinaison de couleurs | <b>Unsplash & Pexels: </b> Librairie de photos libre de droit </p>
            <p id="psites"><b>Compressor: </b> Compresseur d'images | <b>gtmetrix: </b> Test la vitesse chargement d'un site | 
            <b>fonts.google: </b> Librairie de polices d'écriture | <b>Ionic.io: </b> Librairie d'icons | <b>Photopea: </b> Redimensionner des photos | 
            <b>Figma: </b> Maquette </p>
            <br>
          </div>
          <div id="a_masquer3" style="display:none">
          <br>
          <p id="pdiv">Documentations</p>
            <p id="psites"><b>Openclassroom: </b> site formation gratuite | <b>StackOverflow: </b> Forum d'entraides | 
            <b>MDN Web Docs: </b> docs & ressources | <b>Developpez.com: </b> Forum d'entraides | <b>Grafikart: </b> tutos/exos/forum/docs </p>
            <br>
          </div>
          <div id="a_masquer4" style="display:none">
            <br>
            <p id="pdiv">Logiciels</p>
            <p id="psites"><b>Visual Studio Code & SublimText & Notepad++: </b> Editeur de code | <b>Uwamp & XAMPP & WampServer: </b> Serveur en local | 
            <b>Gitbash: </b> Console en ligne de commande | <b>FileZilla & WinSCP: </b> client FTP | <b>GIMP: </b> editeur d'images | 
            <b>OracleVM: </b> Logiciel de machine virtuel | <b>Balsamiq & Pencil: </b> Maquettes</p>
            <br>
          </div>
          <div id="a_masquer5" style="display:none">
            <br>
            <p id="pdiv">S'exercer</p>
            <p id="psites"><b> Flexboxfroggy: </b> Exos flexbox | <b> CodinGame: </b> Exos avec des jeux | <b> CodeCademy: </b> Exos base des langages | 
            <b>Code.org: </b> apprendre le code | <b>CodeWars: </b> Appronfondir ses compétences</p>
            <br>
          </div>
          <div id="containerform">
          <h2 id="h2ressources">Vous souhaitez contribuer à cet page ?</h2>
            <br>
            <p id="pcontribution">Contribution :</p>
          <div id="form">
            <form id="contact_form" action="recuperationform.php" method="POST" enctype="multipart/form-data">
            <div class="row">
             <label class="required" for="email">Mail:</label><br />
             <input id="email" name="mail" type="email" placeholder="Votre email...." size="40" required/><br />
            </div>
            <div class="row">
              <label class="required" for="type">Type :</label><br />
              <input id="type" name="type" type="text" placeholder="Framework,Logiciel,Librairie...." size="40" required/><br />
            </div>
            <div class="row">
              <label class="required" for="name">Nom de l'outil:</label><br />
              <input id="text" name="nom" type="text" placeholder="Bootstrap, Visual Studio......" size="40" required/><br />
            </div>
             <div class="row">
              <label class="required" for="message">Description:</label><br />
              <textarea id="message" name="message" placeholder="Votre message....." rows="7" cols="40" required></textarea><br />
            </div>
            <br>
            <button name="submit" id="envoyer">Envoyer <a href="envoyer.html" target="_blank"></a></button>
           </form>
          </div>
          <br>
          <br>
          </div>
          <div id="foot">
          <div id="footer">
            <br>
            <br><div id="inlineblock">
            <ul id="footnav" class="foot-nav">
              <label id="labelmenufoot">MENU DE NAVIGATION</label>
              <br>
              <li id="lifoot"><a href="index.php">Acceuil</a></li>
              <li id="lifoot"><a href="ressources.php">Ressources</a></li>
              <li id="lifoot"><a href="chat.php">Chat</a></li>
            </ul>
            <div id="options">
            <ul class="foot-nav">
            <label id="labelmenufoot">OPTIONS</label>
            <br>
              <li id="lifoot"><a href="">Inscription</a></li>
              <li id="lifoot"><a href="">Connexion</a></li>
              <li id="lifoot"><a href="">Mon profil</a></li>
            </ul>
            </div>
            <div id="reseaux">
            <ul class="foot-nav">
            <label id="labelmenufoot">Réseaux</label>
            <li><p id="prenomfoot">Théo : </p><a href="https://github.com/theocbr"><ion-icon id="iconfootgithub" name="logo-github"></a><a href=""> </ion-icon> <ion-icon id="iconfootlkdn" name="logo-linkedin"></ion-icon></a></li>
              <li><p id="prenomfoot">Stanislas :</p><a href="https://github.com/Smithleystan"> <ion-icon id="iconfootgithub" name="logo-github"></a><a href=""></ion-icon> <ion-icon id="iconfootlkdn" name="logo-linkedin"></ion-icon></a></li>
            </ul>
            </div>
            <div id="search">
            <label id="labelmenufoot">Rechercher</label>
            <br>
            <input type="search" id="search">
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
      