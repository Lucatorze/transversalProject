<?php
namespace Controller;

use Project\Connexion;
use Model\Users;
use Model\Admin;
use Model\Msg;

class eventController{

    public function listAdminAction(){
        
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        $getListEvent = Admin::getListEvent($pdo);
        
        include "./admin/adminEvent.php";
    }

    public function addAction(){
        
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        $date = time();
        $error = '';

        if (isset($_POST['submit'])){
            $formOk = true;

            if(!$_POST['title']){
                $error['title'] = 'Merci de renseigner le titre de l\'evenement';
                $formOk = false;
            }

            if(!$_POST['place']){
                $error['place'] = 'Merci de renseigner le lieu de l\'evenement';
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

                $nameFile = trim($_POST['title']);
                $src = $_FILES['view']['tmp_name'];
                $imgName = "view_".$nameFile."_event_";
                $destination = "../../public/upload/event/".$imgName.".jpg";
                move_uploaded_file($src, $destination);

                $_POST['view'] = $imgName;
                $_POST['title'] = htmlentities($_POST['title']);
                $_POST['place'] = htmlentities($_POST['place']);
                $_POST['content'] = htmlentities($_POST['content']);
                $_POST['dateAdd'] = $date;

                $addEvent = Admin::addEvent($pdo);

                header('Location: /event/list/');
                exit;

            }
        }
        
        include "./admin/addEvent.php";
    }

    public function viewAction($params){

        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        list($id) = explode("/", $params);

        $getEvent = Admin::getEvent($pdo, $id);

        include ('./viewEvent.php');

    }

    public function listAction(){
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        $getListEvent = Admin::getListEvent($pdo);

        include "/eventList.php";
    }

}