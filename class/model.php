<?php
class model{

    private static $db;
    
    public static function getDB(){
        if (!isset(self::$db)) {
            self::$db = new PDO(
                "mysql:host=127.0.0.1;dbname=pdo;charset=utf8",
                'root',
                ''
            );
            return self::$db;
        } else {
           return self::$db;
        }
        
    }
}