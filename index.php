<?php

/*
 * fichier de routage
*/
	// initialisation des paramètres du site
	require_once('Defines/structure.php');
	require_once(PATH_LANGUES.PATH_FR.'textes.php');
	require_once(PATH_DEFINES.'configuration.php');

	//démarrage de la classe base
	require_once(PATH_LIB.'base.php');
	$base= new base();

	 // décision de la route à prendre
	 // si le champ 'page' n'est pas vide, que l'adresse est correcte et que le fichier correspondant existe
	 if(isset($_GET['page']) && $base->isAlpha($_GET['page']) != false && is_file(PATH_CONTROLLEUR.$_GET['page'].".php")) {

		$page=$base->isAlpha($_GET['page']);
	 }
	 elseif(!isset($_GET['page'])) {

		$page='index';   // index du controlleur
	 }
	 else {
		$page='erreur'; // redirection vers la page d'erreur
	}
	// récupération de la variable page pour poursuivre dans la vue.
			require_once(PATH_CONTROLLEUR.$page.'.php');
	$base ->__destruct();

	require_once (PATH_VUE.'footer.php');

?>
