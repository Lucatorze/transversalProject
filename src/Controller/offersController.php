<?php
namespace Controller;

use Project\Connexion;
use Model\Users;
use Model\Offers;

class offersController{

    public function createAction(){

        $pdo = Connexion::getInstance();
        $getProfile = Users::getProfile($pdo);
        $error = '';
        $date = time();

        if(isset($_POST['submit'])){

            $formOk = true;

            if(!$_POST['name']){
                $error['name'] = 'Merci de renseigner le titre du jeu';
                $formOk = false;
            }

            if(!$_POST['content'] || strlen($_POST['content']) < 140){
                $error['content'] = 'Votre description doit faire un minimum de 140 caractères';
                $formOk = false;
            }

            if(!$formOk){
                foreach ($error as $value) {
                    echo $value . "<br>";
                }
            }
            else{

                $nameFile = trim($_POST['name']);
                $src = $_FILES['view']['tmp_name'];
                $imgName = "view_".$nameFile;
                $destination = "../../public/upload/offers/".$imgName.".jpg";
                move_uploaded_file($src, $destination);

                $_POST['userId'] = $_SESSION['userId'];
                $_POST['nickname'] = $getProfile['nickname'];
                $_POST['view'] = $imgName;
                $_POST['name'] = htmlentities($_POST['name']);
                $_POST['content'] = htmlentities($_POST['content']);
                $_POST['date'] = $date;

                $createOffers = Offers::createOffers($pdo);

                header('Location: /Offers/list/');
                exit;

            }



        }

        include "./offers/newOffers.php";

    }

    public function listAction(){

        $pdo = Connexion::getInstance();
        $getOffersList = Offers::listOffers($pdo);
        include "./offers/listOffers.php";

    }

}