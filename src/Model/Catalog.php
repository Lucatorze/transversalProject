<?php

namespace Model;

class Catalog{

    public static function add($pdo){

        $stmt = $pdo->prepare('INSERT INTO catalog_items(id_cat, userId, itemType, nickname, name, description, releaseDate, dateAdd, players, age, time, view) VALUE (?,?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bindParam(1, $_POST['id_cat']);
        $stmt->bindParam(2, $_POST['userId']);
        $stmt->bindParam(3, $_POST['itemType']);
        $stmt->bindParam(4, $_POST['nickname']);
        $stmt->bindParam(5, $_POST['name']);
        $stmt->bindParam(6, $_POST['description']);
        $stmt->bindParam(7, $_POST['releaseDate']);
        $stmt->bindParam(8, $_POST['date']);
        $stmt->bindParam(9, $_POST['players']);
        $stmt->bindParam(10, $_POST['age']);
        $stmt->bindParam(11, $_POST['time']);
        $stmt->bindParam(12, $_POST['view']);
        $stmt->execute();

    }

    public static function getCatalogList($pdo){

        $stmt = $pdo->prepare("SELECT * FROM catalog_items ORDER BY id DESC");
        $stmt->execute();

        $getCatalogList = [];

        while ($result = $stmt->fetch()) {
            $getCatalogList[] = $result;
        }

        return $getCatalogList;
    }

    public static function getCategories($pdo){

        $stmt = $pdo->prepare("SELECT * FROM catalog_categories ORDER BY id");
        $stmt->execute();

        $getCategories = [];

        while ($result = $stmt->fetch()) {
            $getCategories[] = $result;
        }

        return $getCategories;

    }

    public static function getCategoriesId($pdo, $name){
        $stmt = $pdo->prepare("SELECT * FROM catalog_categories WHERE name = :name");
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getCategoriesName($pdo, $id){
        $stmt = $pdo->prepare("SELECT * FROM catalog_categories WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getItemList($pdo,$id){

        $stmt = $pdo->prepare("SELECT * FROM catalog_items WHERE id_cat = :id_cat ORDER BY id DESC");
        $stmt->bindParam(":id_cat", $id);
        $stmt->execute();

        $getItemList = [];

        while ($result = $stmt->fetch()) {
            $getItemList[] = $result;
        }

        return $getItemList;
    }

    public static function getItem($pdo,$id){

        $stmt = $pdo->prepare("SELECT * FROM catalog_items WHERE id = :id ORDER BY id DESC");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public static function deleteItem($pdo,$id){
        $stmt = $pdo->prepare("DELETE FROM catalog_items WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public static function getRand($pdo){
        $stmt = $pdo->prepare("SELECT * FROM catalog_items ORDER BY rand() LIMIT 2");
        $stmt->execute();

        $getRand = [];

        while ($result = $stmt->fetch()) {
            $getRand[] = $result;
        }

        return $getRand;
    }


}