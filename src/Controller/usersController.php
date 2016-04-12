<?php
namespace Controller;

use Project\Connexion;
use Model\Users;

class usersController{

    public function loginAction(){
        if(!isset($_POST['nickname'])){
            include "./login.php";
        }
        else{

        }

    }
    public function registerAction(){



        include "./register.php";

        $date = time();
        $error = array();
        $formOk = true;
        $pdo = Connexion::getInstance();

        if(isset($_POST['nickname'])){


            if(!$_POST['nickname'] || strlen($_POST['nickname']) < 4){
                $error['nickname'] = 'Votre Pseudo doit faire un minimum de 4 caractères';
                $formOk = false;
            }

            if(!$_POST['email'] || filter_var($_POST['email'], !FILTER_VALIDATE_EMAIL)){
                $error['email'] = "votre e-mail n'est pas valide.";
                $formOk = false;
            }

            if(!$_POST['password'] || strlen($_POST['password']) < 6 AND $_POST['password'] != $_POST['passwordVerif']){
                $error['password'] =  "votre mot de pass doit faire un minimum de 6 caractères et doit être identique a la vérification.";
                $formOk = false;
            }

            if(!$formOk) {
                foreach ($error as $value) {
                   echo $value . "<br>";
                }
            }else{

                $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
                $_POST['email'] = trim(htmlentities($_POST['email']));
                $_POST['password'] = trim(htmlentities(sha1($_POST['password'])));

                $register = Users::registerUser($pdo,$date);
                echo ('<script>alert("ok")</script>');

            }
        }

    }

}