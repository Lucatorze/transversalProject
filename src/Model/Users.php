<?php

namespace Model;

class Users{

    public static function registerUser($pdo,$date){
        $stmt = $pdo->prepare("INSERT INTO users(nickname,password,email,date) VALUE (?,?,?,?)");
        $stmt->bindParam(1, $_POST['nickname']);
        $stmt->bindParam(2, $_POST['password']);
        $stmt->bindParam(3, $_POST['email']);
        $stmt->bindParam(4, $date);
        $stmt->execute();
    }

    public static function loginUser($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE nickname = :nickname");
        $stmt->bindParam(":nickname", $_POST['nickname']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getProfile($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users where id = :id");
        $stmt->bindParam(":id", $_SESSION['userId']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getUserProfile($pdo,$userId){
        $stmt = $pdo->prepare("SELECT * FROM users where id = :id");
        $stmt->bindParam(":id", $userId);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function updateProfile($pdo){
        $stmt = $pdo->prepare("UPDATE users SET nickname = :nickname, firstname = :firstname, lastname = :lastname, email = :email, password = :password, age = :age, phonenumber = :phonenumber, town = :town, postalcode = :postalcode, adress = :adress WHERE id = :id");
        $stmt->bindParam(':nickname', $_POST['nickname']);
        $stmt->bindParam(':firstname', $_POST['firstname']);
        $stmt->bindParam(':lastname', $_POST['lastname']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->bindParam(':age', $_POST['age']);
        $stmt->bindParam(':phonenumber', $_POST['phonenumber']);
        $stmt->bindParam(':town', $_POST['town']);
        $stmt->bindParam(':postalcode', $_POST['postalcode']);
        $stmt->bindParam(':adress', $_POST['adress']);
        $stmt->bindParam(":id", $_SESSION['userId']);
        $stmt->execute();
    }

    public static function getUsers($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public static function getUsersList($pdo){

            $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id");
            $stmt->execute();

            $getUsersList = [];

            while ($result = $stmt->fetch()) {
                $getUsersList[] = $result;
            }

            return $getUsersList;
    }




}