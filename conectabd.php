<?php
class ConectaBD{
    
    
    private $ban;
    private $con;
    
    public function ConectaBD() {
        $con=new PDO('mysql:host=localhost;dbname=oservico', "root", "");
        return $con;
        
    }  
}
