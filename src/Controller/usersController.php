<?php
namespace Controller;

use Project\Connexion;
use Model\Users;

class usersController{

    public function loginAction(){

        include "./login.php";

        $error = array();
        $formOk = true;
        $pdo = Connexion::getInstance();

        if(isset($_POST['nickname'])){
            $_POST['password'] = trim(htmlentities(sha1($_POST['password'])));
            $login = Users::loginUser($pdo);

            if($login === false){
                $error['login'] = "Votre pseudo est introuvable.";
                $formOk = false;
            }
            if(empty($_POST['password'])){
                $error['password'] = "Merci de renseigner votre mot de passe.";
                $formOk = false;
            }
            if($_POST['password'] != $login['password']){
                $error['password2'] = "Votre mot de passe n'est pas correcte.";
                $formOk = false;
            }
            if($login['rank'] == 0){

                $error['ban'] = "Ce compte à été banni.";
                $formOk = false;

            }
            if(!$formOk) {
                foreach ($error as $value) {
                    echo $value . "<br>";
                }
            }else{

                if($login['rank'] == 4){

                    $_SESSION['admin'] = $login['id'];
                    $_SESSION['userId'] = $login['id'];

                }
                elseif($login['rank'] == 3){

                    $_SESSION['modo'] = $login['id'];
                    $_SESSION['userId'] = $login['id'];

                }
                elseif($login['rank'] == 2){

                    $_SESSION['partner'] = $login['id'];
                    $_SESSION['userId'] = $login['id'];

                }
                elseif($login['rank'] == 1){

                    $_SESSION['member'] = $login['id'];
                    $_SESSION['userId'] = $login['id'];

                }

                header('Location: /');
                exit;


            }
        }

    }

    public function registerAction(){

        include "./register.php";

        $date = time();
        $error = array();
        $formOk = true;
        $pdo = Connexion::getInstance();
        $getUsers = Users::getUsers($pdo);

        if(isset($_POST['nickname'])){


            if(!$_POST['nickname'] || strlen($_POST['nickname']) < 4){
                $error['nickname'] = 'Votre Pseudo doit faire un minimum de 4 caractères';
                $formOk = false;
            }
            elseif($_POST['nickname'] == $getUsers['nickname']){
                $error['nickname2'] = 'Ce Pseudo est déjà utilisé';
                $formOk = false;
            }

            if(!$_POST['email'] || filter_var($_POST['email'], !FILTER_VALIDATE_EMAIL)){
                $error['email'] = "votre e-mail n'est pas valide.";
                $formOk = false;
            }
            elseif($_POST['email'] == $getUsers['email']){
                $error['email2'] = 'Cette E-Mail est déjà utilisé';
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


                header('Location: /users/login/');
                exit;


            }
        }

    }

    public function logoutAction(){

        if(isset($_SESSION['userId'])){
            session_unset();
            session_destroy();

            header('Location: /');
            exit;
        }
        else {

            header('Location: /');
            exit;

        }

    }

    public function profileAction($params){

        $pdo = Connexion::getInstance();
        $getUsers = Users::getUsers($pdo);
        $formOk = true;

        if(!empty($params)){

            list($id) = explode("/", $params);
            $getUserProfile = Users::getUserProfile($pdo,$id);

            if(!$getUserProfile){

                header('Location: /users/usersList/');

            }

            include "./otherProfile.php";
        }
        else{

            $getProfile = Users::getProfile($pdo);

            include "./profile.php";

            if(isset($_POST['password'])){

                if(!$_POST['password'] || strlen($_POST['password']) < 6 AND $_POST['password'] != $_POST['passwordVerif']){
                    $error['password'] =  "votre mot de pass doit faire un minimum de 6 caractères et doit être identique a la vérification.";
                    $formOk = false;
                }

                if(!$_POST['age'] || !is_numeric($_POST['age'])){
                    $error['age'] = "Votre age doit être écris en chiffre.";
                    $formOk = false;
                }

                if(!$_POST['phonenumber'] || !is_numeric($_POST['phonenumber'])){
                    $error['phonenumber'] = "Votre numéro de téléphone doit être composer de nombres.";
                    $formOk = false;
                }

                if(!$_POST['postalcode'] || !is_numeric($_POST['postalcode'])){
                    $error['postalcode'] = "Votre code Postal doit être composer de nombres.";
                    $formOk = false;
                }

                if(!$formOk) {
                    foreach ($error as $value) {
                        echo $value . "<br>";
                    }
                }else{

                    $_POST['nickname'] = $getProfile['nickname'];
                    $_POST['email'] = $getProfile['email'];
                    $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
                    $_POST['lastname'] = trim(htmlentities($_POST['lastname']));
                    $_POST['age'] = trim(htmlentities($_POST['age']));
                    $_POST['phonenumber'] = trim(htmlentities($_POST['phonenumber']));
                    $_POST['town'] = trim(htmlentities($_POST['town']));
                    $_POST['postalcode'] = trim(htmlentities($_POST['postalcode']));
                    $_POST['adress'] = trim(htmlentities($_POST['adress']));
                    $_POST['password'] = trim(htmlentities(sha1($_POST['password'])));

                    $updateProfile = Users::updateProfile($pdo);

                    header('Location: /users/profile/');
                    exit;


                }

            }

        }
}

    public function usersListAction(){

        $pdo = Connexion::getInstance();
        $getUsersList = Users::getUsersList($pdo);
        include('./usersList.php');

    }

    public function uploadAction(){
        $pdo = Connexion::getInstance();
        $user_id = $_POST['user_id'];
        $src = $_FILES['avatar']['tmp_name'];
        $imgName = "avatar_".$user_id;
        $destination = "../../public/upload/avatar/".$imgName.".jpg";
        move_uploaded_file($src, $destination);
        $updateAvatar = Users::updateAvatar($pdo,$imgName);
        header("Location: /users/profile/");
    }

}