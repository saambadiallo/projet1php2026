<?php

function addFormAssurance(){
    require_once('./view/add.php');
}
function ajoutAssurance($lib,$montant,$bonus){
    add($lib,$montant,$bonus);
    //$liste = recupererListe();
    //header("location:./view/list.php");
    ///require_once './view/list.php';
    listAssurance();

}
function listAssurance(){
    $liste = recupererListe();
    //var_dump($liste);
    require_once './view/list.php';
    
}
function deleteAssurance($id){
    delete($id);
    listAssurance();
}
function pageEditeAssurance($id){
    require_once './view/edit.php';
    //header("location:./view/edit.php?id=$id");
}
function editAssurance($id,$lib,$montant,$bonus){
    edit($id,$lib, $montant, $bonus);
    listAssurance();
}