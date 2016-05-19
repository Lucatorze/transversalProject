<?php
namespace Controller;

use Project\Connexion;
use Model\Msg;

class IndexController{

  public function indexAction(){
    $pdo = Connexion::getInstance();
    $getMP = Msg::getNbMsg($pdo);
    include "./home.php";
  }

}