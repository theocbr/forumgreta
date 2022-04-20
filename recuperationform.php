<?php  
   // Vérifier si le formulaire est soumis 
//    if ( isset( $_POST['submit'] ) ) {
//     /* récupérer les données du formulaire en utilisant 
//        la valeur des attributs name comme clé 
//       */
//     // $nom = $_POST['nom']; 
//     // $message = $_POST['message']; 
//     // $type = $_POST['type']; 
//     // $mail = $_POST['mail'];
//     // // afficher le résultat
//     // echo '<h3>Informations récupérées en utilisant POST</h3>'; 
//     // echo 'Mail : ' . $mail .'<br> Nom : ' . $nom . '<br> Type : ' . $type . '<br> Message : ' . $message; 
//     // exit;
// }
$retour = mail('forumgreta2022@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], '');
if ($retour)
    echo '<p>Votre message a bien été envoyé.</p>';
?>
<!DOCTYPE html>
<html lang="fr">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <LINK rel="stylesheet" type="text/css" href="style.css">
      <title>Récupération</title>
    </head>
      <body>

      </body>
  </html>