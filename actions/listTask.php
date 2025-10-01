<?php
    require("connectToDB.php");

    //Code SQL à executer
    $sql = $conn->prepare("SELECT * FROM task");
    $sql->execute();

    //On recupere les données qu'on met dans un tableau
    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

    //On recupere le nombre d'element du tableau
    $length = count($rows);

    var_dump($rows);

    //Si c'est inferieur, c'est que ya rien oh
    if($length < 1){
        echo "Aucune donnée";
    } else {
        echo "Ya données oh";
    }

