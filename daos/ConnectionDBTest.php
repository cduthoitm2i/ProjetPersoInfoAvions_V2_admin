<?php

/*
 * ConnectionDBTest.php
 * Utilisation de cours.ini
 */

include './ConnectionDB.php';

// Récupération du contenu du fichier cours.ini dans un tableau associatif


$pdo = getConnection("../conf/cours.ini");
var_dump($pdo);
?>
