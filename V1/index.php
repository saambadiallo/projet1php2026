<?php
    require_once("./view/bootstrap.php");
    require_once("./model/assuranceModel.php");
    require_once("./model/bdModel.php");
    require_once("./controller/assuranceController.php");

    #add("Vie",300000,5);
    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action'] == "addAssurance"){
            addFormAssurance();
        }
        elseif($_GET['action'] == "saveAssurance"){
            $lib = $_POST["libelle"];
            $montant = $_POST["montant"];
            $bonus = $_POST["bonus"];
            ajoutAssurance($lib,$montant,$bonus);

        }
        elseif($_GET['action'] == "delete" && !empty($_GET['id']) ){
            $id = $_GET['id'];
            deleteAssurance($id);
        }
        elseif($_GET['action'] == "edit" && !empty($_GET['id']) ){
            $id = $_GET['id'];
            pageEditeAssurance($id);
        }
        elseif($_GET['action'] == "editAssurance" && !empty($_GET['id']) ){
            $id = $_GET['id'];
            $lib = $_POST["libelle"];
            $montant = $_POST["montant"];
            $bonus = $_POST["bonus"];
            
            editAssurance($id,$lib,$montant,$bonus);
        }
        else listAssurance();

    }else{
        listAssurance();
    }

   
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    </body>
    </html>