<?php
    require_once("./view/bootstrap.php");
    require_once("./model/assuranceModel.php");
    require_once("./model/bdModel.php");
    require_once("./controller/assuranceController.php");
    $database = new Database();
    $model = new AssuranceModel($database->getConnexion());
    $controller = new AssuranceController($model);

    #add("Vie",300000,5);
    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action'] == "addAssurance"){
            $controller->addFormAssurance();
        }
        if($_GET['action'] == "saveAssurance"){
            $lib = $_POST["libelle"];
            $montant = $_POST["montant"];
            $bonus = $_POST["bonus"];
            $controller->ajoutAssurance($lib,$montant,$bonus);

        }
        if($_GET['action'] == "delete" && !empty($_GET['id']) ){
            $id = $_GET['id'];
            $controller->deleteAssurance($id);
        }
        if(isset($_GET['id']) && !empty($_GET['id']) ){
            if($_GET['action'] == "edit"){
                $id = $_GET['id'];
                $controller->pageEditeAssurance($id);

            }
            if($_GET['action'] == "editAssurance" ){
                $id = $_POST['id'];
                $lib = $_POST["libelle"];
                $montant = $_POST["montant"];
                $bonus = $_POST["bonus"];
                
                $controller->editAssurance($id,$lib,$montant,$bonus);
            }
        }
        #else $controller->listAssurance();

    }else{
        $controller->listAssurance();
    }

   
?>
   