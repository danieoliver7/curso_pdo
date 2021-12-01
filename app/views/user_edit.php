
<h2>Atualizar</h2>

<form action="/curso_pdo-main/public/////" method="post" role="form">
    
   
    <div class="form-group">
        <label for="">
            Nome
        </label>

        <input type="hidden" name="id" value="<?=$userEncontrado->id;?>">
        <input type="text" name="name" class="form-control" value="<?=$userEncontrado->name;?>">
    </div>

    <div class="form-group">
        <label for="">
            Email
        </label>
        <input type="text" name="email" class="form-control" value="<?=$userEncontrado->email;?>">
    </div>

    <div class="form-group">
        <label for="">
            Password
        </label>
        <input type="password"  name="password"class="form-control" value="<?=$userEncontrado->password;?>">
    </div>
<br>
    <button type="submit" class="btn btn-primary" > Atualizar </button>

</form>