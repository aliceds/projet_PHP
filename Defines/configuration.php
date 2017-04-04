<?php
/* Configuration du site
 */

// Variables de configuration
define('NOM_SITE','Mon Site');
define('LOGO', 'LOGO.jpeg');
define('MENU', 'menu.php');

// informations utilisateur
$user = 'alice';
$password = 'la4fotSSue6cc'; //toto
//echo crypt($password); //  plus utilisé depuis php 5.6 // apres php 5.6 utilisé -> echo password_hash($password)
//echo password_hash($password,PASSWORD_DEFAULT);



$MYSQL_host = "localhost";
$MYSQL_bdname = "php";
$MYSQL_user = "root";
$MYSQL_password = "";

$BDD_nombase="php";
