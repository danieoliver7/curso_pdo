

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>

    </tr>
  </thead>
  <tbody>
      <?php foreach ($users as $user):?>
   <tr>  
       <td><?=$user->id?></td> 
       <td><?=$user->name?></td> 
       <td><?=$user->email?></td> 
       
      <td>
      <a href="/curso_pdo-main/public////?id=<?=$user->id;?>" class="btn btn-warning btn-xs">Editar</a> 
      <a href="/user_destroy?id=<?=$user->id;?>" class="btn btn-danger btn-xs">Excluir</a> 
    </td>
    <?php endforeach;?>
      </tr>  
  </tbody>
</table>