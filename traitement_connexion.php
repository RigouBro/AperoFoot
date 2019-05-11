
<?php
include("mise_en_page.php");
entete();
$adresse_mail = $_POST['adresse_mail'];
$password= $_POST['password'];

session_start();
$ok=0;

$bdd = new PDO('mysql: host=localhost ;dbname=mabase ;charset=utf8', 'root', '');

//on teste si on s'est bien connectés à la base de données

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$requete =  $pdo->query('SELECT id FROM user WHERE email = "'.$adresse_mail.'" && password = "'.$password.'"');
if ( $requete -> rowCount() == 0){
echo 'Mauvais pseudo ou mot de passe';
header('Location: connexion.php');
exit();
}
else{
echo 'vous voilà connecté';
$ok=1;
}

if ($ok == 1){
	$_SESSION['id']=$requete->fetch()['id'];
}
$requete->closeCursor();
header('Location: mon_compte.php');
exit();







?>