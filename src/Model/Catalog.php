<?php

namespace Model;

class Catalog{

    public static function add($pdo){

        $stmt = $pdo->prepare('INSERT INTO catalog_items(id_cat, name, releaseDate, dateAdd, players, gameRules, view) VALUE (?,?,?,?,?,?,?)');
        $stmt->bindParam(1, $_POST['id_cat']);
        $stmt->bindParam(2, $_POST['name']);
        $stmt->bindParam(3, $_POST['releaseDate']);
        $stmt->bindParam(4, $_POST['date']);
        $stmt->bindParam(5, $_POST['players']);
        $stmt->bindParam(6, $_POST['gameRules']);
        $stmt->bindParam(7, $_POST['view']);
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

    public static function deleteMsg($pdo, $id){
        $stmt = $pdo->prepare("DELETE FROM privatemsg WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}