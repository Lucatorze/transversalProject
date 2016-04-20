<?php
namespace Controller;

use Project\Connexion;
use Model\Users;
use Model\Admin;

class adminController{

    public function homeAction(){
        include "./admin/admin.php";
    }

    public function usersAction(){
        $pdo = Connexion::getInstance();

        $getUsersList = Users::getUsersList($pdo);
        include "./admin/adminUsers.php";
    }

    public function editAction($params){

        $pdo = Connexion::getInstance();

        list($id) = explode("/", $params);
        $getUserProfile = Users::getUserProfile($pdo,$id);

        include "./admin/editUsers.php";

        if(isset($_POST['nickname'])){

            $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
            $_POST['password'] = trim(htmlentities(sha1($_POST['password'])));
            $_POST['email'] = trim(htmlentities($_POST['email']));
            $_POST['rank'] = trim(htmlentities($_POST['rank']));

            $updateUsers = Admin::updateUsers($pdo,$id);

            header("Location: /admin/users/");
            exit;

        }

    }

    public function deleteAction($params) {

        $pdo = Connexion::getInstance();
        list($id) = explode("/", $params);

        $deleteUsers = Admin::deleteUsers($pdo, $id);

        header("Location: /admin/users/");
        exit;
    }

}