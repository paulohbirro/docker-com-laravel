<?php

namespace Models;
use Models\DataBase;

class Customers extends DataBase{

public $db;

public function __construct(){

    return $this->db = parent::connection();
}

public function index($request=null){

    if($request==null)
        $query = "SELECT * FROM customers";
    else
        $query = "SELECT * FROM customers where  cpf=$request";    

        self::log(1);
        return  $result = $this->db->query($query);  

}

public function findId($id){
    $query = "SELECT * FROM customers where  id=$id";    
    return  $result = $this->db->query($query);
}

public function update($request){

    $query =  "UPDATE customers set name='$request[name]', status=$request[status] WHERE id=$request[id]";

	if($this->db->query($query)){
		return true;
	}else{
		return false;
    }    
}

public function store($request){

    $query = "INSERT INTO customers (name,cpf,status) VALUES ('$request[name]', '$request[cpf]','$request[status]')";
    
	if($this->db->query($query)){
		return true;
	}else{
		return false;
	}
}

public function destroy($id){

    $query = "DELETE FROM customers WHERE id=$id";

    // Run the query to delete record
    if( $this->db->query($query) ){
       return true;
    }else {
       return false;
    }

}

public function log($value){
    $query = "INSERT INTO log (consulting) VALUES ('$value')";
	$this->db->query($query);
}
}
?>