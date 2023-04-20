<h1>POO_Livre</h1>

<?php

include 'Auteur.php';
include 'Livre.php';

//instance de l'objet auteur "Stephen King"
$auteur = new Auteur("Stephen", "King");

//instances de les objets livres ecrits par "Stephen King"
$livre_1 = new Livre("Ca", 1138, "1986", 20.0, $auteur);
$livre_2 = new Livre("Simetierre", 374, "1983", 15.0, $auteur);
$livre_3 = new Livre("Le Fléau", 823, "1978", 14.0, $auteur);
$livre_4 = new Livre("Shining", 447, "1977", 16.0, $auteur);

//appel de le methode pour calculer le livre de l'auteur 
//$auteur->countLivres();

//appel de le method pour afficher la bibliographie
$auteur->afficherBibliographie(); 

//methode toString() à terminer
//echo $auteur;
?>