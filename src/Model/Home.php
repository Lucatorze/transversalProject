<?php

namespace Model;

class Home{

    public static function countUsers($pdo){
        $stmt = $pdo->prepare("SELECT COUNT(id) as countid FROM users");
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function countItem($pdo){
        $stmt = $pdo->prepare("SELECT COUNT(id) as countid FROM catalog_items");
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getLastCatalog($pdo){

            $stmt = $pdo->prepare("SELECT * FROM catalog_items ORDER BY id DESC LIMIT 3");
            $stmt->execute();

            $getItemList = [];

            while ($result = $stmt->fetch()) {
                $getItemList[] = $result;
            }

            return $getItemList;

    }
    
}