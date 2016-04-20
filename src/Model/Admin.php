<?php

namespace Model;

class Admin{

    public static function updateUsers($pdo,$id){

        $stmt = $pdo->prepare("UPDATE users SET nickname = :nickname, email = :email, password = :password, rank = :rank WHERE id = :id");
        $stmt->bindParam(":nickname", $_POST['nickname']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":rank", $_POST['rank']);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

    }

    public static function deleteUsers($pdo,$id){
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

    }

}