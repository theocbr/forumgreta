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

error_reporting(E_ALL);

echo "<pre>"; 
var_dump($_POST);
echo "</pre>";
die;

$emailFrom = $_POST['mail']; 
$emailTo = "forumgreta2022@gmail.com";
$type = $_POST['type'];
$nom = $_POST['nom']; 
$message = $_POST['message']; 


 ?>