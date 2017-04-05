<?php
/*
 * model supprimerGalerie
 */

require_once(PATH_LIB.PATH_BDD.BDD);
$bdd=new bdd($MYSQL_host, $MYSQL_bdname, $MYSQL_user, $MYSQL_password);

$query = "DELETE FROM image_description WHERE id_image=?;";
$params =array(
                $id
                );


 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;


$query = "DELETE FROM  image WHERE image_id=?;";
$params =array(
                $id
                );
 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;


  $bdd->__destruct();

  unlink(PATH_IMAGES.$nomFichier);

 ?>
