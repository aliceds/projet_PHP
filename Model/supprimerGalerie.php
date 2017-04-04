<?php
/*
 * model supprimerGalerie
 */

require_once(PATH_LIB.PATH_BDD.BDD);
$bdd=new bdd($MYSQL_host, $MYSQL_bdname, $MYSQL_user, $MYSQL_password);

$query = "DELETE FROM  image WHERE image_id=?;";
$params =array(
                $ordre,
                $id
                );
 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;

$query = "DELETE FROM image_description WHERE id_image=?;";
$params =array(
                $titre,
                $description,
                $id
                );


//print_r($bdd);
 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;

 $bdd->__destruct();

 ?>
