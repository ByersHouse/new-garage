<?php
class Dbo {
    private $settings = array();
    private static $_instance = null;
    private function __construct() {

        $this->dbParams = parse_ini_file(ROOT.'/db.ini');

        $params = $this->dbParams;

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $this->db = new PDO($dsn, $params['username'], $params['password'],  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $this->db;
    }
    
    protected function getDb() {
        
        return $this->db;
    }
    
    
    protected function __clone() {
    // ограничивает клонирование объекта
    }
    static public function getInstance() {
    if(is_null(self::$_instance))
    {
    self::$_instance = new self();
    }
    return self::$_instance;
    }
    public function import() {
    // ...
    }
    public function get() {
    // ...
    }
}