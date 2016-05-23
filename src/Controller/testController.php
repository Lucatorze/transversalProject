<?php
namespace Controller;

use Project\Connexion;
use Model\Users;
use Model\Admin;
use Model\Msg;

class testController{

    public function listAction(){
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        include "./test/listTest.php";
    }
}