<?php



if(!isset($_POST['nom_match'])) {
	header('Location: accueil_recherche.php');
	exit();
}

$nom_match = $_POST['nom_match'];
$bdd = new PDO('mysql: host=localhost ;dbname=aperofoot ;charset=utf8', 'root', '');
$res =[];

$rows = $bdd->query("SELECT n_user, nommatch, commentaire, ville from proposition where nommatch=$nom_match")->fetchAll();
foreach($rows as $row){
$nom_hote = $bdd->query("SELECT prenom from user join proposition on user.n_user = $row -> n_user ");
annonce_match($row['nommatch'], $nom_hote, $row['commentaire'], $row['ville']);









?>