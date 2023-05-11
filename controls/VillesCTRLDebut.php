<?php

/*
 * VillesCTRL.php
 */

$message = "";

$action = filter_input(INPUT_GET, "action");
if ($action === null) {
    $action = filter_input(INPUT_POST, "action");
}


require_once '../daos/ConnectionDB.php';
require_once '../daos/VillesDAOProcedural.php';

$pdo = null;

try {
    // Connexion
    $pdo = getConnection("../conf/cours.ini");

    /*
     * TEST DU SELECT ONE
     */
//    echo "<hr>SELECT ONE<hr>";
//    $t = selectOne($pdo, "75011");
//    echo "<pre>";
//    var_dump($t);
//    echo "</pre>";

    /*
     * TEST DE L'UPDATE
     */
//    echo "<hr>UPDATE<hr>";
//    $tAttributesValues = array();
//    $tAttributesValues['nom_ville'] = "Praha";
//    $tAttributesValues['id_pays'] = "CZ";
//    $affected = update($pdo, $tAttributesValues, "75022");
//    echo "Modification : $affected";
} catch (PDOException $exc) {
    $message = $exc->getMessage();
}

/*
 * SELECT ALL
 */
if ($action === "selectAll") {
    $villes = selectAll($pdo);
    include "../boundaries/VillesSelectIHM.php";
}

/*
 * PRE-INSERT
 */
if ($action === "insert") {
    include "../boundaries/VillesInsertIHM.php";
}
?>
