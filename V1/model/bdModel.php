<?php
    $serveur = "localhost";
    $port = "5432";
    $user="postgres";
    $pwd = "passer";
    $dbname= "bdiage2026";
    $connexion = pg_connect("host=$serveur port = $port dbname = $dbname user = $user password = $pwd");
    if($connexion){
        echo " Success";
    }else{
        echo "Erreur de connexion";
    }