<?php

require __DIR__.'/vendor/autoload.php';
use Models\DataBase;
use Models\Customers;
use Controllers\CustomerController;
use Controllers\ApiCustomerController;

 $dotenv = new Dotenv\Dotenv( __DIR__ ); 
 $dotenv->load();
?>
        
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maxmilhas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/js/function.js"></script>
</head>
<body>
    
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Consulta CPF</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li>
        <?php
          if($_GET['acao']=="create" || $_GET['acao']=="edit" ){
        ?>
        <a href="<?=$_ENV['BASE_URL'];?>"> <i class="material-icons">arrow_back</i></a>
          <?php } ?>
        </li>        
      </ul>
    </div>
  </nav>

 <div class="container">

<?php

if(!$_GET['acao']){
  include('./views/customer/customerConsult.php');
}

if($_GET['consulta']=="" && $_GET['cpf']){

  $api =  new ApiCustomerController();
  $api->find($_GET['cpf']);
}

if($_GET['status']=="server"){

  $api =  new ApiCustomerController();
  $api->status();
}

if($_GET['acao']=="create"){
    $c =  new CustomerController();
    $c->create();
}

if($_POST['botao']=="Consultar"){
    
    $request = $_POST['cpf'];
    $c =  new CustomerController();
    $c->index($request);
}

if($_GET['acao']=="store"){
    $request = $_POST;
    $c =  new CustomerController();
    $c->store($request);
  }

if($_GET['acao']=="update"){

    $request = $_POST;
    $c =  new CustomerController();
    $c->update($request);
  }

if($_GET['acao']=="destroy"){

    $c =  new CustomerController();
    $id = $_GET['id'];
    $c->destroy($id);

}  

if($_GET['acao']=="edit"){
  $c =  new CustomerController();
  $id = $_GET['id'];
  $c->edit($id);
}  
?>
</div>
</div>

<div class="fixed-action-btn">
  <a href="?acao=create" class="btn-floating btn-large red">
    <i class="large material-icons">add</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>
 
</div>
</body>
</html>

