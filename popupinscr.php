<?php  ?>
<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <LINK rel="stylesheet" type="text/css" href="styles/stylepopup.css">
      <title>Inscription</title>
    </head>
      <body>
          <div id="containerform">
          <div id="forminscription">
              <form action="popupinscr.php" method="post">
                Pseudo : <input id="inputco" type="text" name="pseudo" value="<?php if (isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>">
                Mot de passe : <input id="inputco" type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>">
                <input type="submit" id="btninscr" name="inscription" value="S'inscrire">
              </form>
          </div>
          </div>
      </body>
  </html>