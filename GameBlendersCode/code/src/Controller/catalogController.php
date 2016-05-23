<?php
namespace Controller;

use Project\Connexion;
use Model\Users;
use Model\Admin;
use Model\Catalog;
use Model\Msg;

class catalogController
{

    public function listAction()
    {
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        $getCatalogList = Catalog::getCatalogList($pdo);
        include "./admin/adminCatalog.php";
    }

    public function addItemAction()
    {
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        $getCategories = Catalog::getCategories($pdo);
        $error = '';
        $date = time();

        if (isset($_POST['submit'])) {

            $formOk = true;

            if (!$_POST['name']) {
                $error['name'] = 'Merci de renseigner le titre du jeu';
                $formOk = false;
            }

            if (!$_POST['gameRules'] || strlen($_POST['gameRules']) < 140) {
                $error['gameRules'] = 'les règle du jeu doivent faire un minimum de 140 caractères';
                $formOk = false;
            }

            if (!$formOk) {
                foreach ($error as $value) {
                    echo $value . "<br>";
                }
            } else {

                $nameFile = trim($_POST['name']);
                $src = $_FILES['view']['tmp_name'];
                $imgName = "view_" . $nameFile . "_catalog_";
                $destination = "../../public/upload/catalog/" . $imgName . ".jpg";
                move_uploaded_file($src, $destination);

                $getCategoriesId = Catalog::getCategoriesId($pdo, $_POST['type']);

                $_POST['id_cat'] = $getCategoriesId['id'];
                $_POST['view'] = $imgName;
                $_POST['name'] = htmlentities($_POST['name']);
                $_POST['gameRules'] = htmlentities($_POST['gameRules']);
                $_POST['date'] = $date;

                $addItem = Catalog::add($pdo);

                header('Location: /catalog/list/');
                exit;

            }
            
        }
        include "./catalog/addItem.php";
    }

    public function listCatAction(){
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        $getCategories = Catalog::getCategories($pdo);


        include "./catalog/viewCatCatalog.php";
    }

    public function listItemAction($params){
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        list($id) = explode("/", $params);
        $getItemsList = Catalog::getItemList($pdo, $id);
        $getCategoriesName = Catalog::getCategoriesName($pdo, $id);
        $getCategories = Catalog::getCategories($pdo);

        include "./catalog/viewItemCat.php";
    }

    public function viewItemAction($params){
        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        list($id) = explode("/", $params);
        $getItems = Catalog::getItem($pdo, $id);
        $getCategories = Catalog::getCategories($pdo);

        include "./catalog/viewItem.php";
    }

    public function deleteAction($params) {

        $pdo = Connexion::getInstance();
        $getMP = Msg::getNbMsg($pdo);
        list($id) = explode("/", $params);

        $deleteUsers = Catalog::deleteItem($pdo, $id);

        header("Location: /catalog/list/");
        exit;
    }
}