<table>
        <thead>
          <tr>
              <th>CPF</th>
              <th>Nome</th>
              <th>Status</th>
              <th>Gerenciar</th>
          </tr>
        </thead>

        <tbody>
        <?php
        while($row =  $result->fetchArray()){;
                              
        ?>    
           
           <tr>
            <td> <?=$row['cpf'];?>  </td>
            <td> <?=$row['name'];?> </td>
            <td> <?=$row['status']==1?'Free':'Block';?>  </td>
            <td colspan='2'> 
            <a href="?acao=edit&id=<?=$row['id'];?>"><i class="material-icons">edit</i></a> 
            <a href="?acao=destroy&id=<?=$row['id'];?>"><i class="material-icons">delete</i></a>    
              </td>
            
          </tr>
       <?}?>
      
       
        </tbody>
      </table>

