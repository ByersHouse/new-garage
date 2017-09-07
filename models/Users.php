<?php
require_once ROOT.'/components/Dbo.php';


class Users {
    
    
    private $tablename;
    private $id;
    
    public function __construct() {
        
    
        $this->tablename = 'users';
        $this->db = Dbo::getInstance()->db;
        $this->createTableForUsers();
    }
    
    public function tableName() {
        
        return $this->tablename;
    }
    
     public function createTableForUsers() {
        
        
        $result = mysql_query( 
                "CREATE TABLE `".$this->tablename."` (".
                "`id` INT(11) NOT NULL AUTO_INCREMENT,".
                "`username` VARCHAR(50) NULL DEFAULT NULL,".
                "`email` VARCHAR(50) NULL DEFAULT NULL,".
                "`password` TEXT NULL,".
        	"PRIMARY KEY (`id`)".
                " )COLLATE='utf8_general_ci' ENGINE=InnoDB;",$this->db);
        
        return $result;
        
    }
    
    

    
    public function newUser($params = array()) {
        
        
      
        if(count($params) && !$this->userExist($params['username'])){
   
            $params['password'] = base64_encode($params['password']);
         
            mysql_query( "INSERT INTO ".$this->tablename."(username,email,password) "
                        . "VALUES ('".$params['username']."','".$params['email']."','".$params['password']."')",$this->db);
            $this->id = mysql_insert_id ($this->db);
            return $this->id ;
        }   
    }
        
    
    public function userExist($username,$return_type = 1) {
        
        $sql_result = mysql_query("SELECT username,email,password FROM ".$this->tablename
                                 ." WHERE username='".$username."'",$this->db);
        $row = mysql_fetch_assoc($sql_result);
        return ($return_type == 1) ? (bool)$row : $row;
    }

    public function getUsers() {
        
        $sql_result = mysql_query("SELECT username,email FROM ".$this->tablename,$this->db);
        $result = array();
        while($row = mysql_fetch_assoc($sql_result)){
                $result[] = $row;
        }
        
    
        return $result;
    }
    
}
