<?php 
    session_start();
    require_once 'espacemembre/config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM membre');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>
                <div class="text-center">
                        <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                        <hr />
                        <a href="espacemembre/deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                          Changer mon mot de passe
                        </button>
                </div>
            </div>
        </div>    