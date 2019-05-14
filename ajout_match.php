<?php
include("mise_en_page.php");
include("partial/annonce_match.php");

entete();

menu_nav();


if(!isset($_POST['match'])) {
	header('Location: accueil_recherche.php');
	exit();
}
?>

<?php

$nom_match = $_POST['match'];
$bdd = new PDO('mysql: host=localhost ;dbname=aperofoot ;charset=utf8', 'root', '');

$rows = $bdd->query("SELECT n_user, nommatch, commentaire, ville from proposition where nommatch=$nom_match")->fetchAll();
foreach($rows as $row){
$nom_hote = $bdd->query("SELECT prenom from user join proposition on user.n_user = $row -> n_user ");
annonce_match($row['nommatch'], $nom_hote, $row['commentaire'], $row['ville']);

}
pied();

?>