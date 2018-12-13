
<?php
$row =  $result->fetchArray();

?>

<h5>Editar Cliente</h5>

<form method="post" action="?acao=update" >
    <input type="hidden" name="id" value="<?=$_GET['id'];?>" />

     <div class="row"  style="padding-top:80px;">
        <div class="input-field col s12">
       
          <label for="first_name">CPF:  <?=$row['cpf'];?></label>
        </div>
     </div>

    <div class="row" style="padding-top:30px;">
        <div class="input-field col s12">
          <input placeholder="Insira um nome" value="<?=$row['name'];?>" id="name" name="name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
     </div>



  <label>Status  <?=$row['status']==2?'selected':'';?>  </label>
  <select name="status" class="browser-default">
    <option value="" disabled >Escolha um status</option>
    <option <?=($row['status']=='Free')?'selected':'';?>   value="1">Free</option>
    <option <?=($row['status']=='Block')?'selected':'';?>  value="2">Block</option>

  </select>

     <div class="row">
        <div class="input-field col s12">
            <input type="submit" name="botao" value="Alterar" class="btn"/>
        </div>
     </div>
</form>