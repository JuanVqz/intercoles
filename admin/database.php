<?php
class Database {
    private static $dbName = 'intercoles' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';
    private static $dbHost = 'localhost';
    
    private static $cont  = null;
    
    public function __construct() {
        exit('No inicio la funcion');
    }
    
    public static function connect() {
        if ( null == self::$cont ) {
            try {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch(PDOException $e) {
                die($e->getMessage());  
            }
       }
       return self::$cont;
    }

    public static function disconnect() {
        self::$cont = null;
    }
}
?>
