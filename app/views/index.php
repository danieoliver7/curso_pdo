
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="btn-group">
            <a class="btn btn-default" href="#" role="button">Inicio</a>
            <a class="btn btn-default" href="/create_user.php" role="button">Cadastrar</a>
        </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
     
    </tr>
  </thead>
  <tbody>
      <?php foreach ($users as $user){
   echo "<tr>";
      echo "<th>". $user->id ."</th>";
      echo "<th>" . $user->name . "</th>";
    
      };
      echo"</tr>"
    ?>   
  </tbody>
</table>



    </div>  
   
</body>
</html>