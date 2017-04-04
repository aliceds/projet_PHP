<?php
/*
 * controlleur modifierGalerie
 *
 */

    $ordre=$_POST['ordre'];
    $titre=$_POST['titre'];
    $description=$_POST['description'];
    $id=$_POST['id'];

require_once(PATH_MODEL.'modifierGalerie.php');
require_once(PATH_VUE.'index.php');
