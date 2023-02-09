<?php

define('ROOT_URL', 'http://localhost/gcnews/');
define('DB_HOST', 'mysql-gcnews.alwaysdata.net');
define('DB_USERNAME', 'gcnews');
define('DB_PASSWORD', '359D655A');
define('DB_NAME', 'gcnews_bdd_v1');

try {
    $connString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
    $conn = new PDO($connString, DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }

class takeinfo {
    function __construct($db){
        $this->db = $db;
    }
    function getArticle($art){
        $idauthor = "SELECT * FROM article a INNER JOIN user u ON a.id_auteur = u.id_user";
        $stm = $this->db->prepare($idauthor);
        $stm->execute(array($art));
        return $stm->fetchAll();
    }
}
?>