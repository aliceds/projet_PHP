<?php
/*
 * controleur modifierGalerie
 * récupère les variables permettant de modifier les informations de l'image
 * et appelle le modèle modifierGalerie qui modifie les informations dans la
 * base puis appelle la vue index.php
 */
    $ordre=$_POST['ordre'];
    $titre=$_POST['titre'];
    $description=$_POST['description'];
    $id=$_POST['id'];

require_once(PATH_MODEL.'modifierGalerie.php');
require_once(PATH_VUE.'index.php');
