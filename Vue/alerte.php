<?php
/*
 * affichage du message correpondant à une bonne ou une mauvaise connexion
 *
 */

if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
$base::alerteMessage('alert-success', 'Bonne connexion');

}elseif(isset($_SESSION['logged']) && $_SESSION['logged']== false) {

$base::alerteMessage('alert-warning', 'Etat Deconnecté');
}else{

}
