<?php
/*
 * model diaporama
 * de même que pour le modèle ajouterGalerie : connexion à la bdd puis
 * définition de la requête (pas de paramètres ici) et exécution de la requête
 * à l'aide de la fonction queryArray() de bdd; enfin récupération du résultat
 * dans la variable $diapositives
 */

require_once(PATH_LIB.PATH_BDD.'bdd.php');

$bdd=new bdd($MYSQL_host, $MYSQL_bdname, $MYSQL_user, $MYSQL_password);

$query = "SELECT image_id, nom_fichier, ordre, titre, description FROM image, image_description WHERE image.image_id=image_description.id_image ORDER BY ordre";
//print_r($bdd);

$bdd->queryArray($query);
$diapositives=$bdd->_donnees;
// print_r($diapositives);
