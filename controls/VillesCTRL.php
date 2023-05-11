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
require_once '../daos/PaysDAOProcedural.php';

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
    echo $exc->getMessage();
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
/*
 * INSERT
 */
if ($action === "insertValidation") {
    $tAttributesValues = array();
    $tAttributesValues['cp'] = filter_input(INPUT_POST, "cp");
    $tAttributesValues['nom_ville'] = filter_input(INPUT_POST, "nomVille");
    $tAttributesValues['id_pays'] = filter_input(INPUT_POST, "idPays");
    $affected = insert($pdo, $tAttributesValues);
    $message = "Insertion : $affected";
    include "../boundaries/VillesInsertIHM.php";
}

/*
 * PRE-DELETE
 */
if ($action === "delete") {
    $villes = selectAll($pdo);
    include "../boundaries/VillesDeleteIHM.php";
}
/*
 * DELETE
 */
if ($action === "deleteValidation") {
    $cp = filter_input(INPUT_POST, "cp");
    $affected = delete($pdo, $cp);
    $message = "Suppression : $affected";
    $villes = selectAll($pdo);
    include "../boundaries/VillesDeleteIHM.php";
}

/*
 * PRE-UPDATE
 */
$cp = "";
$nomVille = "";
$idPays = "";
if ($action === "update") {
    $villes = selectAll($pdo);
    $pays = selectAllPays($pdo);
    include "../boundaries/VillesUpdateIHM.php";
}
/*
 * UPDATE-SELECTIONNER
 */
if ($action === "updateSelection") {
    $villes = selectAll($pdo);
    $cp = filter_input(INPUT_POST, "ville");
    $ville = selectOne($pdo, $cp);
    $nomVille = $ville["nom_ville"];
    $idPays = $ville["id_pays"];
    $pays = selectAllPays($pdo);
    include "../boundaries/VillesUpdateIHM.php";
}
/*
 * UPDATE
 */
if ($action === "updateValidation") {
    $tAttributesValues = array();
    $pk = filter_input(INPUT_POST, "cp");
    $tAttributesValues['nom_ville'] = filter_input(INPUT_POST, "nomVille");
    $tAttributesValues['id_pays'] = filter_input(INPUT_POST, "pays");
    $affected = update($pdo, $tAttributesValues, $pk);
    $message = "Modification : $affected";
    $villes = selectAll($pdo);
    $pays = selectAllPays($pdo);
    include "../boundaries/VillesUpdateIHM.php";
}
?>
