<?php

function entete($titre)
{
    echo " <!DOCTYPE html>\n";
    echo " <html>\n";
    echo " <head>\n";
    echo " <meta charset=\"utf-8\" />\n";
    echo " <title>$titre</title>\n";
    echo " <link rel=\"stylesheet\" href=\"style.css\"/>\n";
    echo " <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">\n";
    echo " <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">\n";
    echo " </head>\n";
}

function menu_nav()
{
	echo "<header>";
    echo "<div class=\"flex_div_principal\">";
    echo "<img class=\"logo_site\" src=\"logo2.png\" alt=\"logo apero foot\"/>";
	echo "<nav class=\"menu_principal\">";
	echo "<a href=\"accueil.php\" class=\"lien_menu_principal\">Accueil</a>";
	echo "<a href=\"accueil_recherche.php\" class=\"lien_menu_principal\"> <i class=\"fas fa-search\"></i> Recherche</a>";
    echo "<a href=\"accueil_proposition.php\" class=\"lien_menu_principal\">Proposer un match</a>";
	echo "<a href=\"mon_compte.php\" class=\"lien_menu_principal\">Mon compte</a>";
	echo "</nav>";
    echo "</div>";
	echo "</header>";
    echo "<main class=\"main_content\">";

}



function pied(){
    echo "</main>";
    echo "<footer>";
    echo "<div class=\"footer_haut\">";
    echo "<div class=\"menu_footer\">";
    echo "<nav id=\"nav_footer\">";
    echo "<ul>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "<li class=\"li_footer\"> <a href=\"#\">Lorem ipsum</a></li>";
    echo "</ul>";
    echo "</nav>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"footer_bas\">";
    echo "<div class=\"thanks\">";
    echo "<span>Apero Foot est le premier réseau de covisionnage de match au monde. Copyright 2019 © RigouIndustries. Créé avec plaisir par Balt, Le Houss, GEB et Rigou. </span>";
    echo "</div>";
    echo "</div>";
    echo "</footer>";
    echo "</body>";
    echo "</html>";

}

?>
