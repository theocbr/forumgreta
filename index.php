<?php

//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
$titre = "Index du forum";
include("identifiants.php");
include("debut.php");
include("menu.php");

echo'<i>Vous êtes ici : </i><a id="ici" href ="index.php">Acceuil du forum</a>';
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
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1050432655642426',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
     
    FB.AppEvents.logPageView();  
     
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

FB.getLoginStatus(function(response) {
  statusChangeCallBack(response);
});

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log(response.authResponse.accessToken);
  }
});

</script>





<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v14.0&appId=1050432655642426&autoLogAppEvents=1" nonce="PSehX4Bz"></script>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <LINK rel="stylesheet" type="text/css" href="style.css">
      <title>Acceuil</title>
    </head>
      <body>
        <br>
        <div id="formdiv">
        <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
      <p id="titreform">Connexion à l'espace membre :</p>
      <fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
<form action="espacemembre/connex.php" method="post">
</form>
</div>

      <br />
      <br />
      <h1 id="h1blog">Blog</h1>
      <div id="divcours">
      <h2 id="h2options">Options:</h2>
      <div id="containerindex">
          <div id="masque1">
          <input type="button" id="btnmasquer" value="Cours CSS" onclick="masquer_div('a_masquercss');" />
          </div><br />
          <div id="masque2">
          <input type="button" id="btnmasquer" value="BDD" onclick="masquer_div('a_masquerbdd');" />
          </div><br />
          <div id="masque3">
          <input type="button" id="btnmasquer" value="Autres" onclick="masquer_div('a_masquerautres');" />
          </div><br />
          <div id="masque4">
          <input type="button" id="btnmasquer" value="JavaSript" onclick="masquer_div('a_masquerjs');" />
          </div><br />
      </div>
          <br/>
          <br />
          <div id="a_masquercss" style="display:none"><!-- DIV QUI Permet d'afficher et masquer la div pour le bouton Cours CSS -->
      <ul class='card-container'>
      <li class='card'>
        <img class="img-card" src="./assets/img/boxshadow.PNG">
      <div class='text-card-container'>
        <a href="./cours/box-shadow.html" id="pcardtitre">Cours CSS : Box-Shadow</a>
      </li>
      <li class='card'>
      <img class="img-card" src="./assets/img/flex.jpg">
      <div class='text-card-container'>
      <a href="./cours/flex.html" id="pcardtitre">Cours CSS : FlexBox</a>
      </li>
      <li class='card'>
      <img class="img-card" src="./assets/img/transition.png">
      <div class='text-card-container'>
      <a href="./cours/transitions.html" id="pcardtitre">Cours CSS : Transitions</a>
      </li>
      <li class='card'>
      <img class="img-card" src="./assets/img/lineargradient.PNG">
      <div class='text-card-container'>
      <a href="./cours/linear-gradient.html" id="pcardtitre">Cours CSS : Linear-Gradient (dégradés)</a>
      </li>
      <li class='card'>
      <img class="img-card" src="./assets/img/opacity.PNG">
      <div class='text-card-container'>
      <a href="./cours/opacity.html" id="pcardtitre">Cours CSS : Opacity</a>
      </li>
      <li class='card'>
      <img class="img-card" src="./assets/img/pseudoelement.PNG">
      <div class='text-card-container'>
      <a href="./cours/pseudoelement.html" id="pcardtitre">Cours CSS : Pseudo Element</a>
      </li>
      <li class='card'>
        <img class="img-card" src="./assets/img/pseudoclass.PNG">
      <div class='text-card-container'>
        <a href="./cours/pseudoclass.html" id="pcardtitre">Cours CSS : Les pseudos class</a>
      </li>
      <li class='card'>
        <img class="img-card" src="./assets/img/overflow.webp">
      <div class='text-card-container'>
        <a href="./cours/overflow.html" id="pcardtitre">Cours CSS : Overflow</a>
      </li>
      </ul>
      </div>
      <div id="a_masquerbdd" style="display:none">  <!-- DIV qui permet d'afficher et masquer la div pour le bouton BDD -->
      <ul class='card-container'>
      <li class='card'>
        <img class="img-card" src="./assets/img/modelisationbdd.png">
      <div class='text-card-container'>
        <a href="./cours/db.pdf" id="pcardtitre">Cours BDD : Modelisation Base de Données</a>
      </li>
      <li class='card'>
        <img class="img-card" src="./assets/img/SQL.png">
      <div class='text-card-container'>
        <a href="./cours/sql.pdf" id="pcardtitre">Cours BDD : Les requêtes SQL</a>
      </li>
      </ul>
    </div>
    <div id="a_masquerautres" style="display:none"> <!-- DIV qui permet d'afficher et masquer la div pour le bouton AUTRES -->
    
    <ul class='card-container'>
        <li class='card'>
        <img class="img-card" src="./assets/img/vscodelogo.png">
      <div class='text-card-container'>
        <a href="./cours/pluginsVSC.php" id="pcardtitre">Les plugins utiles pour Visual Studio Code</a>
      </li>
      </ul>
    </div>
    <div id="a_masquerjs" style="display:none"> <!-- DIV qui permet d'afficher et masquer la div pour le bouton JS -->
    
    <ul class='card-container'>
        <li class='card'>
        <img class="img-card" src="https://res.cloudinary.com/dsx6152nt/image/upload/v1654168147/crousty/forum-greta%20/Api_esumqm.jpg">
      <div class='text-card-container'>
        <a href="./cours/Api.html" id="pcardtitre">La méthode API</a>
      </li>
      <li class='card'>
        <img class="img-card" src="https://res.cloudinary.com/dsx6152nt/image/upload/v1654169921/crousty/forum-greta%20/addevent_rb4dwx.jpg">
      <div class='text-card-container'>
        <a href="./cours/addeventlistener.html" id="pcardtitre">Addeventlistener</a>
      </li>
      </ul>
    </div>
</div>
      <!-- A REMPLACER DANS LE FUTUR -->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
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
              <li id="lifoot"><a href="espacemembre/popupinscr.php">Inscription</a></li><br/>
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