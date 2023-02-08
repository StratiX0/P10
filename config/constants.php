<?php
// define('ROOT_URL', 'http://localhost/gcnews/');
// define('DB_HOST', 'localhost');
// define('DB_USERNAME', 'gcnews');
// define('DB_PASSWORD', '359D655A');
// define('DB_NAME', 'gcnews_bdd_v1');

// $hostName = "mysql-gcnews.alwaysdata.net";
// $db = "gcnews_bdd_v1";
// $username ="gcnews";
// $password = "359D55A";

// $hostName = "localhost";
// $db = "gcnews";
// $username ="root";
// $password = "root";

define('ROOT_URL', 'http://localhost/gcnews/');
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'gcnews_bdd_v1');


class takeinfo {
    function __construct($db){
        $this->db = $db;
    }
    function getArticle($art){
        $sql = "SELECT * FROM article";
        $stm = $this->db->prepare($sql);
        $stm->execute(array($art));
        return $stm->fetchAll();
    }
    function getUser($user){
        $sql = "SELECT * FROM user";
        $stm = $this->db->prepare($sql);
        $stm->execute(array($user));
        return $stm->fetchAll();
    }
}


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
?>