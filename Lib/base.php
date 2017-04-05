<?php
/*
 */
class base {
    function __construct() {
        session_name('p1501778');
        session_start();
    }

    public function __destruct(){

    }

    // vérifie si la chaîne de caractère contient des caractères spéciaux ou des espaces
	public static function isAlpha($string){
		if(isset($string)&& $string != '' && is_string($string) && !preg_match('/[#|\@]/',$string)){
			 return htmlspecialchars($string);
		}else{
		  return false;
	 	}
	 }

     public static function notLogged(){
        $_SESSION['user']='';
        $_SESSION['logged']=false;
     }
     public static function login($user){
         $_SESSION['user']=$user;
         $_SESSION['logged']=true;
     }

     public static function disconnect($user){
         unset($_SESSION['user']);
         unset($_SESSION['logged']);
     }

     public static function alerteMessage($class, $message){
            echo '<div class="alert '.$class.'">'.$message.'</div>';
     }
}
