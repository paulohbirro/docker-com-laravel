<?php

namespace Models;
namespace Controllers;

use Models\ApiCustomers;

class ApiCustomerController{

   public  $obj = null;

    public function __construct(){
        $this->obj = new ApiCustomers();      
    }
    
    public function find($cpf){
     
        $result =  $this->obj->find($cpf);        
        while($row =  $result->fetchArray()){;

            $data = array(
                'name'=>$row['name'],
                'cpf'=>$row['cpf'],
                'status'=>$row['status']==1?'Free':'Block'
            );
            
                echo json_encode($data) ;

        }
    }
    public function status(){
        $result =  $this->obj->blackList();
        $result2 =  $this->obj->consulting();

        $row =  $result->fetchArray();
        $row2 =  $result2->fetchArray();

            $data = array(
                'Total_Blacklist'=>$row['black'],
                'Consultas_Realizadas'=>$row2['num']
                
            );
            
                echo json_encode($data) ;

                
       
    }

}
?>
