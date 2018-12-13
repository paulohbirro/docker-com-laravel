<?php
namespace Models;

class DataBase{

public $database_name= "././maxmilhas.db";
public $db;

public function __construct(){
    return self::connection();
}

public function connection(){
  return $this->db =  new \SQLite3($this->database_name);
}

}