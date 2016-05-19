<?php

namespace Model;

class Offers{

    public static function createOffers($pdo){

        $stmt = $pdo->prepare('INSERT INTO offers(userId, name, offerType, type, releaseDate, players, view, content, date, nickname) VALUE (?,?,?,?,?,?,?,?,?,?) ');
        $stmt->bindParam(1, $_POST['userId']);
        $stmt->bindParam(2, $_POST['name']);
        $stmt->bindParam(3, $_POST['offerType']);
        $stmt->bindParam(4, $_POST['type']);
        $stmt->bindParam(5, $_POST['releaseDate']);
        $stmt->bindParam(6, $_POST['players']);
        $stmt->bindParam(7, $_POST['view']);
        $stmt->bindParam(8, $_POST['content']);
        $stmt->bindParam(9, $_POST['date']);
        $stmt->bindParam(10, $_POST['nickname']);
        $stmt->execute();

    }

    public static function createOffers2($pdo){

        $stmt = $pdo->prepare('INSERT INTO offers(userId, name, price, offerType, type, releaseDate, players, view, content, date, nickname) VALUE (?,?,?,?,?,?,?,?,?,?,?) ');
        $stmt->bindParam(1, $_POST['userId']);
        $stmt->bindParam(2, $_POST['name']);
        $stmt->bindParam(3, $_POST['price']);
        $stmt->bindParam(4, $_POST['offerType']);
        $stmt->bindParam(5, $_POST['type']);
        $stmt->bindParam(6, $_POST['releaseDate']);
        $stmt->bindParam(7, $_POST['players']);
        $stmt->bindParam(8, $_POST['view']);
        $stmt->bindParam(9, $_POST['content']);
        $stmt->bindParam(10, $_POST['date']);
        $stmt->bindParam(11, $_POST['nickname']);
        $stmt->execute();

    }

    public static function listOffersExchange($pdo,$type){

        $stmt = $pdo->prepare('SELECT * FROM offers WHERE offerType = :offerType ORDER BY id');
        $stmt->bindParam(':offerType', $type);
        $stmt->execute();

        $getOffersList = [];

        while ($result = $stmt->fetch()) {
            $getOffersList[] = $result;
        }

        return $getOffersList;

    }


    public static function listOffersRental($pdo, $type){

        $stmt = $pdo->prepare('SELECT * FROM offers WHERE offerType = :offerType ORDER BY id');
        $stmt->bindParam(':offerType', $type);
        $stmt->execute();

        $getOffersList = [];

        while ($result = $stmt->fetch()) {
            $getOffersList[] = $result;
        }

        return $getOffersList;

    }

    public static function viewOffers($pdo,$id){

        $stmt = $pdo->prepare('SELECT * FROM offers WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;

    }

}