<?php

    function add($lib, $montant, $bonus){
        global $connexion;
        
        $sql = "INSERT INTO Assurance (libelle,montant,bonus)
                values('$lib',$montant, $bonus);";
        if (pg_query($connexion,$sql)){
            echo " ajout reussi";
        }else echo "Ajout non reussi";

        
    }
    function edit($id,$lib, $montant, $bonus){
        global $connexion;
        
        $sql = "UPDATE assurance 
            SET libelle='$lib', montant = $montant,  bonus = $bonus
            where id = $id;";
        pg_query($connexion,$sql);
    }
    function delete($id){
        global $connexion;
        $sql = "DELETE from assurance where id = $id;";
        pg_query($connexion,$sql);
    }
    function recupererListe(){
        global $connexion;
        $sql = "SELECT * from assurance;";
        $listeAssurance= pg_query($connexion,$sql);
        return pg_fetch_all($listeAssurance);
    }
    function getAsuuranceById($id){
        global $connexion;
        $sql = "SELECT * from assurance where id = $id;";
        $assureance= pg_query($connexion,$sql);
        return pg_fetch_all($assureance)[0];
    }
