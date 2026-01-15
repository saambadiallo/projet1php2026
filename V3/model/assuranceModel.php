<?php
class AssuranceModel{
    private $database;
    function __construct($database){
        $this->database = $database;
    }

    function add($lib, $montant, $bonus){
        global $connexion;
        
        $sql = "INSERT INTO Assurance (libelle,montant,bonus)
                values(?,?,?);";
        $codeExecute = $this->database->prepare($sql);        
        if ($codeExecute->execute([$lib,$montant, $bonus])){
            echo " ajout reussi";
        }else echo "Ajout non reussi";

        
    }
    function edit($id,$lib, $montant, $bonus){
        global $connexion;
        
        $sql = "UPDATE assurance 
            SET libelle= ?, montant = ?,  bonus = ?
            where id = ?;";
        $codeExecute= $this->database->prepare($sql);
        $codeExecute->execute([$lib, $montant, $bonus,$id]);
    }
    function delete($id){
        global $connexion;
        $sql = "DELETE from assurance where id = ?;";
        try {
            $codeExecute= $this->database->prepare($sql);
            $codeExecute->execute($id);
            $codeExecute->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOExecption $e) {
            echo "Suppression echoué".$e->getMessage();
        }
        
    }
    function recupererListe(){
        global $connexion;
        $sql = "SELECT * FROM assurance" ;
        $resultat = $this->database->prepare($sql);
        $resultat->execute();
        return $resultat->fetchAll();
    }
    
    function getAsuuranceById($id){
        global $connexion;
        $sql = "SELECT * from assurance where id = ?;";
        $resultat= $this->database->prepare($sql);
        $resultat->execute([$id]);
        return $resultat->fetch();
    }
}
