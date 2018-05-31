<?php
require_once("Dbconfig.php");
Class Mysql extends dbConfig{
    public $QueryStr;
    private $sqlQuery;
    public  $result;
    
    function Mysql(){
        $parameters = new dbConfig();
        return $this->QueryStr = $parameters->connectDb();
    }
    function selectAllFromTable($table){
        $this->sqlQuery  = "SELECT * FROM ".$table;
        $check = mysql_query( $this->sqlQuery ,  $this->QueryStr ) or die(mysql_error());
        
        if(mysql_num_rows($check) > 0){
           while($row = mysql_fetch_array($check)) { 
                 $data[] = $row; 
            }
           
           return $this->result =$data;
           
        }else{
            return false;
        } 
    }   
}

?>