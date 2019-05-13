<?php
include("mise_en_page.php");

entete("Accueil");

menu_nav();

if (isset($_SESSION['id']) AND isset($_SESSION['adresse_mail']))
{
    echo 'Bonjour, bienvenue sur votre compte.'

}

    echo '<p> Vous pouvez proposer un match '
    echo '<button id="ButtonProposition" class="submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("ButtonProposition").onclick = function () {
        location.href = "accueil_proposition.php";
    };
</script>'
    echo '<\br>'
    echo 'Ou aller en regarder un en toute tranquilité'
    echo '<button id="ButtonRecherche" class="submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("ButtonRecherche").onclick = function () {
        location.href = "accueil_recherche.php";
    };
</script>'
    echo '<\br>'
    echo "Pas de foot pour ce soir ? N'oubliez pas de vous déconnecter"
    echo '<button id="ButtonDeconnexion" class="submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("ButtonDeconnexion").onclick = function () {
        location.href = "deconnexion.php";
    };
</script>'


pied();

?>

<button id="ButtonProposition" class="submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("ButtonProposition").onclick = function () {
        location.href = "www.yoursite.com";
    };
</script>