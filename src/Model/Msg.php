<?php

namespace Model;

class Msg{

    public static function send($pdo){

        $stmt = $pdo->prepare('INSERT INTO privatemsg(authorId, recipientId, title, content, date) VALUE (?,?,?,?,?)');
        $stmt->bindParam(1, $_POST['authorId']);
        $stmt->bindParam(2, $_POST['recipientId']);
        $stmt->bindParam(3, $_POST['title']);
        $stmt->bindParam(4, $_POST['content']);
        $stmt->bindParam(5, $_POST['date']);
        $stmt->execute();

    }

    public static function getPrivateMsg($pdo){

        $stmt = $pdo->prepare("SELECT * FROM privatemsg WHERE recipientId = :recipientId ORDER BY id DESC");
        $stmt->bindParam(':recipientId', $_SESSION['userId']);
        $stmt->execute();

        $getPrivateMsg = [];

        while ($result = $stmt->fetch()) {
            $getPrivateMsg[] = $result;
        }

        return $getPrivateMsg;
    }

    public static function getMsg($pdo, $id){

        $stmt = $pdo->prepare("SELECT * FROM privatemsg WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;

    }

    public static function getNbMsg($pdo){
        $stmt = $pdo->prepare("SELECT COUNT(id) as countid FROM privatemsg WHERE recipientId = :recipientId");
        $stmt->bindParam(":recipientId", $_SESSION['userId']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getRecipientId($pdo, $nickname){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE nickname = :nickname");
        $stmt->bindParam(":nickname", $nickname);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

}