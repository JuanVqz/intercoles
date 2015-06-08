<?php
class Database {
    private static $dbName = '' ;
    private static $dbUsername = '';
    private static $dbUserPassword = '';
    private static $dbHost = '';

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
