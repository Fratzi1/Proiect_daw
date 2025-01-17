<?php
    $db_pass = trim(file_get_contents("dbpass.txt"));

    // Sintaxa: mysqli_connect(host, user,pass, database_name)
    $link = new mysqli("localhost", "v",$db_pass,'proiect_daw');

    if(!$link){
        echo ('Error!unable to connect to MySql!');
        exit;
    } else {
        // echo('Succesfully connected to Mysql');
    }
?>