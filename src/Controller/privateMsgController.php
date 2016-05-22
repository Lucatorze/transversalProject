<?php
namespace Controller;

use Project\Connexion;
use Model\Users;
use Model\Msg;

class privateMsgController{

    public function myMsgAction(){
        $pdo = Connexion::getInstance();
        $getPrivateMsg = Msg::getPrivateMsg($pdo);

        foreach ($getPrivateMsg as $nickname){
            $getUserProfile = Users::getUserProfile($pdo, $nickname['authorId']);
        }

        include "./privateMsg/myMsg.php";
    }

    public function createAction($params){

        $pdo = Connexion::getInstance();
        list($id) = explode("/", $params);

        $getNickname = Users::getUsersList($pdo);

        if (isset($_POST['submit'])){

            $date = time();
            $error = array();
            $formOk = true;

            if($id == NUll){


                if (!$_POST['recipientId']){
                    $error = 'Merci d\'indiquer un destinataire';
                    $formOk = false;
                }
                
                if (!$_POST['title']){
                    $error = 'Merci d\'indiquer un titre';
                    $formOk = false;
                }

                if (!$_POST['content']){
                    $error = 'Merci d\'écrire un message';
                    $formOk = false;
                }

                if ($formOk){

                    $getRecipientId = Msg::getRecipientId($pdo, $_POST['recipientId']);

                    $_POST['date'] = $date;
                    $_POST['authorId'] = $_SESSION['userId'];
                    $_POST['recipientId'] = $getRecipientId['id'];

                    $sendMsg = Msg::send($pdo);

                    header('Location: /privateMsg/myMsg/');
                    exit;
                }
            }
            else{
                if (!$_POST['title']){
                    $error = 'Merci d\'indiquer un titre';
                    $formOk = false;
                }

                if (!$_POST['content']){
                    $error = 'Merci d\'écrire un message';
                    $formOk = false;
                }

                if ($formOk){

                    $_POST['date'] = $date;
                    $_POST['authorId'] = $_SESSION['userId'];
                    $_POST['recipientId'] = $id;

                    $sendMsg = Msg::send($pdo);

                    header('Location: /privateMsg/myMsg/');
                    exit;
                }
            }
        }

        include "./privateMsg/newMsg.php";
    }

    public function viewMsgAction($params){

        $pdo = Connexion::getInstance();
        list($id) = explode("/", $params);
        
        $getMsg = Msg::getMsg($pdo, $id);
        $getUserProfile = Users::getUserProfile($pdo, $getMsg['authorId']);

        include "./privateMsg/viewMsg.php";
    }

    public function deleteAction($params){
        $pdo = Connexion::getInstance();
        list($id) = explode("/", $params);

        $deleteUsers = Msg::deleteMsg($pdo, $id);

        header("Location: /privateMsg/myMsg/");
        exit;
    }

}