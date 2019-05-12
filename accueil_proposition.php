<?php
include("mise_en_page.php");

entete();

menu_nav();
?>

<?php
if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])){
?>
    <div class="titre_div">
        <h1 class="titre_page">Proposer un match</h1>
    </div>

    <div class="content_form">
        <h2 class="titre_proposition">Quoi de mieux que des amis pour regarder un match</h2>

        <form class="form_proposition" method="post">
            <div class="match_prop">
                <p class="membre_formulaire">
                    <label for="match">
                        Je propose le match :
                        <span class="required">*</span>
                    </label>
                    <input list="match" type="text" id="choix_match">
                    <datalist id="match">
                        <?php
                        include("partial/listematchs.php");
                        ?>
                    </datalist>
                </p>
                <p class="membre_formulaire">s
                    <label for="place">
                        Nombre de places sur le canapé
                        <span class="required">*</span>
                    </label>
                    <select id="place">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </p>

            </div>
            <div class="membre_formulaire adresse_formulaire">
                <label for="adresse" class="adresse_prop">
                    Adresse :
                </label>
                <div class="membre_adresse">
                    <div class="flex_adresse">
                        <label for="rue" class="rue_prop">
                            Numéro et nom de rue :
                            <span class="required">*</span>
                        </label>
                        <input type="text" id="rue">
                    </div>
                    <div class="flex_adresse">
                        <label for="ville" class="ville_prop">
                            Ville :
                            <span class="required">*</span>
                        </label>
                        <input type="text" id="ville">
                    </div>
                </div>
            </div>
            <p class="membre_formulaire adresse_formulaire">
                <label for="commentaires" class="commentaires_prop">
                    Commentaires :
                </label>
                <textarea id="commentaires" rows="10" cols="150" maxlength="1000">Informations complémentaires, que souhaitez vous qu'ils apportent pour l'apéro, ...</textarea>
            </p>

            <p class="membre_formulaire">
                <button type="submit" class="bouton_formulaire" name="login" value="envoyer">Envoyer</button>
            </p>

        </form>

    </div>


    <?php
}
else {
    ?>

    <div class="titre_div">
        <h1 class="titre_page">Proposer un match</h1>
    </div>

    <div class="content_form">
        <h2 class="titre_proposition">Quoi de mieux que des amis pour regarder un match</h2>

        <form class="form_proposition" method="post">
            <div class="match_prop">
                <p class="membre_formulaire">
                    <label for="match">
                        Je propose le match :
                        <span class="required">*</span>
                    </label>
                    <input list="match" type="text" id="choix_match">
                    <datalist id="match">
                    <?php
                        include("partial/listematchs.php");
                        ?>
                    </datalist>
                </p>
                <p class="membre_formulaire">
                    <label for="place">
                        Nombre de places sur le canapé
                        <span class="required">*</span>
                    </label>
                    <select id="place">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </p>

            </div>
            <div class="membre_formulaire adresse_formulaire">
                <label for="adresse" class="adresse_prop">
                    Adresse :
                </label>
                <div class="membre_adresse">
                    <div class="flex_adresse">
                        <label for="rue" class="rue_prop">
                            Numéro et nom de rue :
                            <span class="required">*</span>
                        </label>
                        <input type="text" id="rue">
                    </div>
                    <div class="flex_adresse">
                        <label for="ville" class="ville_prop">
                            Ville :
                            <span class="required">*</span>
                        </label>
                        <input type="text" id="ville">
                    </div>
                </div>
            </div>
            <p class="membre_formulaire adresse_formulaire">
                <label for="commentaires" class="commentaires_prop">
                    Commentaires :
                </label>
                <textarea id="commentaires" rows="10" cols="150" maxlength="1000">Informations complémentaires, que souhaitez vous qu'ils apportent pour l'apéro, ...</textarea>
            </p>

            <p class="membre_formulaire">
                <button type="submit" class="bouton_formulaire" name="login" value="envoyer">Envoyer</button>
            </p>

        </form>

    </div>

    <?php
}




pied();

?>