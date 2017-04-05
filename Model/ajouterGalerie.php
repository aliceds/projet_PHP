<?php
/*
 * model ajouterGalerie
 * - connexion à la base de données
 * - définition des requêtes $query pour insérer une ligne dans les bases image et image_description
 * - définition des paramètres récupérés dans le controleur ajouterGalerie
 * - exécution de la requête grâce à la fonction queryBdd du fichier bdd
 * - récupération du résultat dans la variable $diapositives
 * - destruction de la connexion
 *
 */

require_once(PATH_LIB.PATH_BDD.BDD);

$bdd=new bdd($MYSQL_host, $MYSQL_bdname, $MYSQL_user, $MYSQL_password);

$query = "INSERT INTO image (nom_fichier,date_creation,date_modification,informations_utilisateur) VALUES (?,NOW(),NOW(),'alice');";
$params =array($nomFichier);
 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;


 $query = "INSERT INTO  image_description (titre,description) VALUES (?,?);";
 $params =array("a","b");
  $bdd->queryBdd($query,$params);
  $diapositives=$bdd->_donnees;

 $bdd->__destruct();
 ?>
