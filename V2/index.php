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
        elseif($_GET['action'] == "saveAssurance"){
            $lib = $_POST["libelle"];
            $montant = $_POST["montant"];
            $bonus = $_POST["bonus"];
            $controller->ajoutAssurance($lib,$montant,$bonus);

        }
        elseif($_GET['action'] == "delete" && !empty($_GET['id']) ){
            $id = $_GET['id'];
            $controller->deleteAssurance($id);
        }
        elseif($_GET['action'] == "edit" && !empty($_GET['id']) ){
            $id = $_GET['id'];
            $id = intval($id);
            $controller->pageEditeAssurance($id);
        }
        elseif($_GET['action'] == "editAssurance" && !empty($_GET['id']) ){
            $id = $_POST['id'];
            $lib = $_POST["libelle"];
            $montant = $_POST["montant"];
            $bonus = $_POST["bonus"];
            
            $controller->editAssurance($id,$lib,$montant,$bonus);
        }
        else $controller->listAssurance();

    }else{
        $controller->listAssurance();
    }

   
?>
   