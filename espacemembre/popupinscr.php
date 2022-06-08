<?php  ?>
<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <LINK rel="stylesheet" type="text/css" href="../styles/stylepopup.css">
      <title>Inscription</title>
    </head>
      <body>
      <?php 
           if(isset($_GET['reg_err'])){
             $err = htmlspecialchars($_GET['reg_err']);
             switch($err) {
                        case 'success':
                        ?>
                            <div class="alert">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 
                    }
                }
                ?>
          <div id="containerform">
          <div id="forminscription">
              <form action="inscr_traitement.php" method="post">
                <input id="inputco" type="text" name="pseudo" placeholder="Pseudo" autocomplete="off" required>
                <input id="inputco" type="email" name="email" placeholder="Email" autocomplete="off" required >
                <input id="inputco" type="password" name="password" autocomplete="off" placeholder="Mot de passe" required>
                <input id="inputco" type="password" name="password_retype" placeholder="Re-tapez le mot de passe"  autocomplete="off" required>
                <input type="submit" id="btninscr" name="inscription" value="S'inscrire">
              </form>
          </div>
          </div>
      </body>
  </html>