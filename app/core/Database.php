<?php

class Database{
    
    private $dbcon = null;
    private $stmt = null;
    private static $database = null;

    public function __construct(){
        $this->dbcon = new PDO('mysql:dbname=' .Config::get("mysql/db_name").';host=' .Config::get("mysql/db_host").';charset=' .Config::get("mysql/db_charset"), Config::get("mysql/db_user"), Config::get("mysql/db_pass"));

        $this->dbcon->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function open_db(){
        if(self::$database === null){
            self::$database = new Database();
        }
        return self::$database;
    }

    public function prepare($query){
        $this->stmt = $this->dbcon->prepare($query);
    }

    public function bindValue($param, $value, $type = PDO::PARAM_STR) {
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute() {
        return $this->stmt->execute();
    }

    public static function close_db(){
        
        if(isset(self::$database)){
            self::$database->dbcon = null;
            self::$database->stmt = null;
            self::$database = null;
        }
    }
}
?>