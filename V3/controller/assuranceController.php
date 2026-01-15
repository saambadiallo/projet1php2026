<?php
class AssuranceController{
    private $model;
    function __construct($model){
        $this->model = $model;
    }
    function addFormAssurance(){
        require_once('./view/add.php');
    }
    function ajoutAssurance($lib,$montant,$bonus){
        $this->model->add($lib,$montant,$bonus);
        header("location:index.php");
    
    }
    function listAssurance(){
        $liste = $this->model->recupererListe();
        //var_dump($liste);
        require_once './view/list.php';
        
    }
    function deleteAssurance($id){
        $this->model->delete($id);
        $this->model->listAssurance();
    }
    function pageEditeAssurance($id){
        $assurance = $this->model->getAsuuranceById($id);
        require_once './view/edit.php';
    }
    function editAssurance($id,$lib,$montant,$bonus){
        $this->model->edit($id,$lib, $montant, $bonus);
        header("location : index.php");
    }
}