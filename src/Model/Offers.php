<?php

namespace Model;

class Offers{

    public static function createOffers($pdo){

        $stmt = $pdo->prepare('INSERT INTO offers(userId, name, view, content, date, nickname) VALUE (?,?,?,?,?,?) ');
        $stmt->bindParam(1, $_POST['userId']);
        $stmt->bindParam(2, $_POST['name']);
        $stmt->bindParam(3, $_POST['view']);
        $stmt->bindParam(4, $_POST['content']);
        $stmt->bindParam(5, $_POST['date']);
        $stmt->bindParam(6, $_POST['nickname']);
        $stmt->execute();

    }

    public static function listOffers($pdo){

        $stmt = $pdo->prepare('SELECT * FROM offers ORDER BY id');
        $stmt->execute();

        $getOffersList = [];

        while ($result = $stmt->fetch()) {
            $getOffersList[] = $result;
        }

        return $getOffersList;

    }

}