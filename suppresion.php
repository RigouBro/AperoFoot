<?php
include("mise_en_page.php");

entete();



$adresse_mail = $_POST['adresse_mail'];
$password= $_POST['password'];


$bdd = new PDO('mysql: host=localhost ;dbname=mabase ;charset=utf8', 'root', '');




$requete =  $bdd->exec('DELETE FROM user WHERE email = "'.$adresse_mail.'" && password = "'.$password.'"');
if( $requete == 1){
	echo 'Votre compte a bien été supprimé';
	header('Loaction:accueil.php');
}

else {
	echo 'Une erreur est survenue';
	header('Loaction: connexion.php');
}


pied();

?>