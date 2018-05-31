<?php


Class dbConfig{
    protected $serverName;
    protected $dbuser;
    protected $password;
    protected $dbName;
    public $QueryStr;
    
    function dbConfig(){
        $this -> serverName = 'localhost';
        $this -> dbuser = 'root';
        $this -> password = '';
        $this -> dbName = 'oop';
    }
    function connectDb(){
        $this -> serverName;
        $this->QueryStr =  mysql_connect($this->serverName, $this->dbuser, $this->password);
        mysql_select_db($this -> dbName, $this->QueryStr);
        return $this->QueryStr;
    }
}

?>