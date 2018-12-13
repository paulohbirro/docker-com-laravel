<h5>Cadastrar Cliente</h5>

<form method="post" action="?acao=store">

    <div class="row" style="padding-top:80px;">
        <div class="input-field col s12">
          <input placeholder="Insira um nome" id="name" name="name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
     </div>

     <div class="row">
        <div class="input-field col s12">
          <input  onkeyup="somenteNumeros(this);" maxlength="11"  placeholder="Insira o CPF (somente números)" id="cpf" name="cpf" type="text" class="validate">
          <label for="first_name">CPF</label>
        </div>
     </div>

  <label>Status</label>

  <select name="status" class="browser-default">
    <option value="" disabled selected>Escolha um status</option>
    <option value="1">Free</option>
    <option value="2">Block</option>
  </select>

     <div class="row">
        <div class="input-field col s12">
            <input type="submit" name="botao" value="Cadastrar" class="btn"/>
        </div>
     </div>
</form>