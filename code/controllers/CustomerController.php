<?php

namespace Models;
namespace Controllers;

use Models\Customers;

class CustomerController{

   public  $obj = null;

    public function __construct(){
        $this->obj = new Customers();      
    }
    
    public function index($request){
        $result =  $this->obj->index($request);        
        include "./views/customer/customerList.php";
    }

    public function create(){
        include "./views/customer/customerCreate.php";
    }

    public function store($request){
        $result =  $this->obj->store($request); 
        include "./views/customer/customerSuccess.php";
    }

    public function update($request){
        $result =  $this->obj->update($request); 
        include "./views/customer/customerSuccess.php";
    }

    public function edit($id){
        $result =  $this->obj->findId($id); 
        include "./views/customer/customerEdit.php";
    }  

    public function destroy($id){
        $result =  $this->obj->destroy($id); 
        include "./views/customer/customerDestroy.php";          
    }    

}
?>
