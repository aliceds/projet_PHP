<?php
/*
 * controleur supprimerGalerie
 * récupère l'id du fichier à supprimer (qui est dans le formulaire de Galerie)
 * pour ensuite appeler le modèle supprimerGalerie qui supprime l'image dans la
 * base (et dans le dossier) et renvoie sur index
 *
 */

$id = $_POST['id'];
$nomFichier = $_POST['nom-fichier'];

require_once(PATH_MODEL.'supprimerGalerie.php');
require_once(PATH_VUE.'index.php');
