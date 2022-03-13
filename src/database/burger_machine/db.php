<?php

class Database 
{
    private $host = 'localhost';
    private $db = 'burger_machine';
    private $uid = 'root';
    private $pwd = '';
    private $conn;

    public function connect(){ 
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host='.$this->host.'; dbname='.$this->db, $this->uid, $this->pwd, [PDO::ATTR_EMULATE_PREPARES=>false]); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
           echo 'Connection Error '.$e;
        }
        
        return $this->conn; 
    }

    
}
