<?php


include("mise_en_page.php");

entete();


if(!isset($_POST['nom']) OR !isset($_POST['prenom']) OR !isset($_POST['password']) OR !isset($_POST['email'])) {
	header('Location: connexion.php');
	exit();
}


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$password=$_POST['passowrd'];
$email=$_POST['email'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO user(n_user, password, nom, prenom, email, n_tel) VALUES(:n_user, :password, :nom, :prenom, :email, n_tel)');
$req->execute(array(
	'n_user' => $nom,
	'password' => $password,
	'nom' => $nom,
	'email' => $email,
	'n_tel' => NULL,
	'prenom' => $prenom
	));

echo 'L utilisateur a bien été ajouté !';
$req->closeCursor();
header('Location:connexion.php');
exit();

pied();
?>