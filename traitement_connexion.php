
<?php



include("mise_en_page.php");
entete();

$adresse_mail = $_POST['adresse_mail'];
$password= $_POST['password'];

session_start();
$ok=0;

$bdd = new PDO('mysql: host=localhost ;dbname=mabase ;charset=utf8', 'root', '');




$requete =  $bdd->query('SELECT id FROM user WHERE email = "'.$adresse_mail.'" && password = "'.$password.'"');
if ( $requete -> rowCount() == 0){
echo 'Mauvais pseudo ou mot de passe';
header('Location: connexion.php');
}
else{
echo 'Vous voilà connecté';
$ok=1;
}

if ($ok == 1){
	$_SESSION['id']=$requete->fetch()['id'];
	$_SESSION['adresse_mail']= $adresse_mail;
}
$requete->closeCursor();
header('Location: mon_compte.php');



pied();



?>