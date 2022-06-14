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
          <p id="pdiv">Frameworks/Librairies</p>
            <p id="psites"><b id="fram">React.js & Angular & Node.js & Vue.js & jQUERY & Next.js & Chart.js: </b> Javascript | <b  id="fram">Bootstrap & Pure.css : </b> CSS  |
            <b id="fram">Cake.php & Symfony & Laravel : </b> PHP</p>
           <br>
          </div>
          <div id="a_masquer2" style="display:none">
          <br>
          <p id="pdiv">Outils Web</p>
            <p id="psites"><b id="fram">Codepen: </b> Librairies communautaires | <b id="fram">Cssgradient: </b> Générateur de couleur | <b id="fram">uiGradient: </b> Générateur de dégradés de couleurs 
          | <b id="fram">Coolors: </b> Générateur de combinaison de couleurs | <b id="fram">Unsplash & Pexels: </b> Librairie de photos libre de droit </p>
            <p id="psites"><b id="fram">Compressor: </b> Compresseur d'images | <b id="fram">gtmetrix: </b> Test la vitesse chargement d'un site | 
            <b id="fram">fonts.google: </b> Librairie de polices d'écriture | <b id="fram">Ionic.io: </b> Librairie d'icons | <b id="fram">Photopea: </b> Redimensionner des photos | </p>
            <p id="psites"><b id="fram">Figma: </b> Maquette | <b id="fram">sitecheck.sucuri.net: </b> Vérifier la sécurité de son site </p>
            <br>
          </div>
          <div id="a_masquer3" style="display:none">
          <br>
          <p id="pdiv">Documentations</p>
            <p id="psites"><b id="fram">Openclassroom: </b> site formation gratuite | <b id="fram">StackOverflow: </b> Forum d'entraides | 
            <b id="fram">MDN Web Docs: </b> docs & ressources | <b id="fram">Developpez.com: </b> Forum d'entraides | <b id="fram">Grafikart: </b> tutos/exos/forum/docs </p>
            <br>
          </div>
          <div id="a_masquer4" style="display:none">
            <br>
            <p id="pdiv">Logiciels</p>
            <p id="psites"><b id="fram">Visual Studio Code & SublimText & Notepad++: </b> Editeur de code | <b id="fram">Uwamp & XAMPP & WampServer: </b> Serveur en local | 
            <b id="fram">Gitbash: </b> Console en ligne de commande | <b id="fram">FileZilla & WinSCP: </b> client FTP | <b id="fram">GIMP: </b> editeur d'images | 
            <b id="fram">OracleVM: </b> Logiciel de machine virtuel | <b id="fram">Balsamiq & Pencil: </b> Maquettes  | <b id="fram"> MySQL WorkBench: </b> BDD</p></p>
            <br>
          </div>
          <div id="a_masquer5" style="display:none">
            <br>
            <p id="pdiv">S'exercer</p>
            <p id="psites"><b id="fram"> Flexboxfroggy: </b> Exos flexbox | <b id="fram"> CodinGame: </b> Exos avec des jeux | <b id="fram"> CodeCademy: </b> Exos base des langages | 
            <b id="fram">Code.org: </b> apprendre le code | <b id="fram">CodeWars: </b> Appronfondir ses compétences</p>
            <br>
          </div>
          <div id="containerform">
          <h2 id="h2ressources">Vous souhaitez contribuer à cet page ?</h2>
          <p id="pcontribu">Envoyez-nous vos ressources dans le formulaire ci-dessous !</p>
            <br>
            <p id="pcontribution">Contribution :</p>
          <div id="form">
            <form id="contact_form" action="recuperationform.php" method="POST" enctype="multipart/form-data">
            <div class="row">
             <label class="required" for="email">Mail:</label><br />
             <ion-icon id="iconmail" name="mail-open-outline"></ion-icon><input id="email" name="mail" type="email" placeholder="Votre email...." size="40" required/><br />
            </div>
            <div class="row">
              <label class="required" for="type">Type :</label><br />
              <ion-icon id="iconarrow" name="arrow-forward-outline" ></ion-icon><input id="type" name="type" type="text" placeholder="Framework,Logiciel,Librairie...." size="40" required/><br />
            </div>
            <div class="row">
              <label class="required" for="name">Nom de l'outil:</label><br />
              <ion-icon id="iconarrow" name="arrow-forward-outline" ></ion-icon><input id="text" name="nom" type="text" placeholder="Bootstrap, Visual Studio......" size="40" required/><br />
            </div>
             <div class="row">
              <label class="required" for="message">Description:</label><br />
              <ion-icon id="iconmessage" name="chatbox-outline"></ion-icon><textarea id="message" name="message" placeholder="Votre message....." rows="7" cols="40" ></textarea><br />
            </div>
            <br>
            <button name="submit" id="envoyer"><b>ENVOYER </b><a href="envoyer.html" target="_blank"></a></button>
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
        </body>
        </html>
      