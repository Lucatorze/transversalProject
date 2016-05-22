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

    public static function addEvent($pdo){
        $stmt = $pdo->prepare("INSERT INTO events(title, place, date, content, view, dateAdd) VALUE (?,?,?,?,?,?)");
        $stmt->bindParam(1, $_POST['title']);
        $stmt->bindParam(2, $_POST['place']);
        $stmt->bindParam(3, $_POST['date']);
        $stmt->bindParam(4, $_POST['content']);
        $stmt->bindParam(5, $_POST['view']);
        $stmt->bindParam(6, $_POST['dateAdd']);
        $stmt->execute();
    }

    public static function getListEvent($pdo){
        $stmt = $pdo->prepare("SELECT * FROM events ORDER BY id");
        $stmt->execute();

        $getListEvent = [];

        while($result = $stmt->fetch()){
            $getListEvent[] = $result;
        }

        return $getListEvent;

    }

    public static function getEvent($pdo, $id){
        $stmt = $pdo->prepare("SELECT * FROM events WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

}