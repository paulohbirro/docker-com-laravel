<?php

namespace Models;
use Models\DataBase;

class ApiCustomers extends DataBase{

public $db;

public function __construct(){

    return $this->db = parent::connection();
}

public function find($cpf=null){

    if($request==null)
        $query = "SELECT * FROM customers";
    else
        $query = "SELECT * FROM customers where  cpf=$request";    

        return  $result = $this->db->query($query);  

}

public function blackList(){   
    $query = "SELECT count(status) as black FROM customers where status='2'";
    return  $result = $this->db->query($query);  
}

public function consulting(){   
    $query = "SELECT count(id) as num FROM log";
    return  $result = $this->db->query($query);  
}

}
?>