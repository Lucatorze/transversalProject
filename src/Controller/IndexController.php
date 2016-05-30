<?php
namespace Controller;

use Model\Home;
use Project\Connexion;
use Model\Msg;
use Model\Admin;

class IndexController{

  public function indexAction(){
    $pdo = Connexion::getInstance();
    $getMP = Msg::getNbMsg($pdo);
    $countUsers = Home::countUsers($pdo);
    $countItem = Home::countItem($pdo);
    $getLastCatalog = Home::getLastCatalog($pdo);
    include "./home.php";
  }

}