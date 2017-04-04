<?php
 /* connexion à la base de données
  * __destruct()
  * __construct()
  * queryArray()
  * queryRow()
  * queryBdd()
  */
class bdd {
    private $_bdd;
    public $_donnees;
    public $_rowcount;
    function __construct($MYSQL_host, $MYSQL_bdname, $MYSQL_user, $MYSQL_password) {
        // Connexion à la base de données
        try {
            $this->_bdd = new PDO('mysql:host='.$MYSQL_host.'; dbname='.$MYSQL_bdname, $MYSQL_user, $MYSQL_password);
            $this->_bdd->exec('SET NAMES utf8');
            //$this->_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function __destruct() {
        $this->_bdd = null;
    }

    // Récupérer un ensemble de lignes  (selon la requête passée en paramètre)
    public function queryArray($query, $params = array()) {
        try {
            $finalq = $this->_bdd->prepare($query);
            $finalq->execute($params);

            $this->_donnees = $finalq->fetchAll();
            $this->_rowcount = count($this->_donnees);
        }
        catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    // Récupérer une seule ligne (selon la requête passée en paramètre)
    public function queryRow($query, $params = array()) {
        try {
            $finalq = $this->_bdd->prepare($query);
            $finalq->execute($params);

            $this->_donnees = $finalq->fetch();
            $this->_rowcount = count($this->_rowcount);
        }
        catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
    public function queryBdd($query, $params) {
       try {
           $finalq = $this->_bdd->prepare($query);
           $finalq->execute($params);

           $this->_donnees = $finalq->fetch();
           $this->_rowcount = count($this->_rowcount);
       }
       catch (Exception $e) {
           die('Erreur : '.$e->getMessage());
       }
   }
}
