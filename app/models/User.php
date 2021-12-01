<?php

namespace app\models;

class User extends Model{

    protected $table = 'users';


   /* public function insert(array $attributes){

        $sql = "INSERT INTO {$this->table}(name,email,password) VALUES (:name,:email,:password)";

        $insert =$this->connection->prepare($sql);
        $insert->bindValue('name', $attributes['name']);
        $insert->bindValue('email', $attributes['email']);
        $insert->bindValue('password', $attributes['password']);

       return $insert->execute();
    }
    

    public function update(array $attributes){

        $sql = "UPDATE {$this->table} SET name = :name, email = :email, password =:password where id = :id";
        $update= $this->connection->prepare($sql);
        $update->execute($attributes);

        return $update->rowCount();


    }*/
}