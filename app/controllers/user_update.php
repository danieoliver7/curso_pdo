<?php

    use app\models\User;
    use app\classes\Validation;

$validation = new Validation; 
$user = new User;

$validate = $validation->validate($_POST);   

$updated = $user->update($validate,['id' => $validate->$id]);

if($updated){
    header('Location:/curso_pdo-main/public/');
}