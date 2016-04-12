<?php

namespace Model;

class Users{

    public static function registerUser($pdo,$date){
        $addUser = $pdo->prepare("INSERT INTO users(nickname,password,email,date) VALUE (?,?,?,?)");
        $addUser->bindParam(1, $_POST['nickname']);
        $addUser->bindParam(2, $_POST['password']);
        $addUser->bindParam(3, $_POST['email']);
        $addUser->bindParam(4, $date);
        $addUser->execute();
    }

}