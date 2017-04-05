<?php
/*
 * model modifierGalerie
 * modifie les informations dans la base à l'aide de la fonction queryBdd()
 * de bdd, comme pour le modèle ajouterGalerie.
 * Ici, on modifie juste les informations grâce à UPDATE
 */

require_once(PATH_LIB.PATH_BDD.BDD);

$bdd=new bdd($MYSQL_host, $MYSQL_bdname, $MYSQL_user, $MYSQL_password);

$query = "UPDATE image SET ordre = ? , date_modification=NOW() where image_id=?;";
$params =array(
                $ordre,
                $id
                );
 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;

$query = "UPDATE image_description SET titre = ? , description=?  where id_image=?;";
$params =array(
                $titre,
                $description,
                $id
                );


//print_r($bdd);
 $bdd->queryBdd($query,$params);
 $diapositives=$bdd->_donnees;

 $bdd->__destruct();
