<?php

/*
 * AvionsCTRL.php
 */

$message = "";

$action = filter_input(INPUT_GET, "action");
if ($action === null) {
    $action = filter_input(INPUT_POST, "action");
}


require_once '../daos/ConnectionDB.php';
require_once '../daos/AvionsDAOProcedural.php';
require_once '../daos/CompagnieDAOProcedural.php';

$pdo = null;

try {
    // Connexion
    $pdo = getConnection("../conf/monsite.ini");

} catch (PDOException $exc) {
    echo $exc->getMessage();
}

/*
 * SELECT ALL
 */
if ($action === "selectAll") {
    $avions = selectAll($pdo);
    include "../boundaries/AvionsSelectIHM.php";
}

/*
 * PRE-INSERT
 */
if ($action === "insert") {
    include "../boundaries/AvionsInsertIHM.php";
}
/*
 * INSERT
 */
if ($action === "insertValidation") {
    $tAttributesValues = array();
    $tAttributesValues['modele_avion'] = filter_input(INPUT_POST, "modele_avion");
    $tAttributesValues['nom_avion'] = filter_input(INPUT_POST, "nom_avion");
    $tAttributesValues['type_avion'] = filter_input(INPUT_POST, "type_avion");
    $tAttributesValues['numero_serie_avion'] = filter_input(INPUT_POST, "numero_serie_avion");
    $tAttributesValues['immatriculation_essai_avion'] = filter_input(INPUT_POST, "immatriculation_essai_avion");
    $tAttributesValues['date_premier_vol_avion'] = filter_input(INPUT_POST, "date_premier_vol_avion");
    $tAttributesValues['immatriculation_compagnie_avion'] = filter_input(INPUT_POST, "immatriculation_compagnie_avion");
    $tAttributesValues['nom_compagnie'] = filter_input(INPUT_POST, "nom_compagnie");
    $tAttributesValues['config_siege_avion_F'] = filter_input(INPUT_POST, "config_siege_avion_F");
    $tAttributesValues['config_siege_avion_C'] = filter_input(INPUT_POST, "config_siege_avion_C");
    $tAttributesValues['config_siege_avion_W'] = filter_input(INPUT_POST, "config_siege_avion_W");
    $tAttributesValues['config_siege_avion_Y'] = filter_input(INPUT_POST, "config_siege_avion_Y");
    $tAttributesValues['hex_code_avion'] = filter_input(INPUT_POST, "hex_code_avion");
    $tAttributesValues['motorisation_avion'] = filter_input(INPUT_POST, "motorisation_avion");
    $tAttributesValues['statut_avion'] = filter_input(INPUT_POST, "statut_avion");

    $affected = insert($pdo, $tAttributesValues);
    $message = "Insertion : $affected";
    include "../boundaries/AvionsInsertIHM.php";
}

/*
 * PRE-DELETE
 */
if ($action === "delete") {
    $avions = selectAll($pdo);
    include "../boundaries/AvionsDeleteIHM.php";
}
/*
 * DELETE
 */
if ($action === "deleteValidation") {
    $numero_serie_avion = filter_input(INPUT_POST, "numero_serie_avion");
    $affected = delete($pdo, $numero_serie_avion);
    $message = "Suppression : $affected";
    $avions = selectAll($pdo);
    include "../boundaries/AvionsDeleteIHM.php";
}

/*
 * PRE-UPDATE
 */
$cp = "";
$nomVille = "";
$idPays = "";
if ($action === "update") {
    $avions = selectAll($pdo);
    $compagnie = selectAllCompagnie($pdo);
    include "../boundaries/AvionsUpdateIHM.php";
}
/*
 * UPDATE-SELECTIONNER
 */
if ($action === "updateSelection") {
    $avions = selectAll($pdo);
    $cp = filter_input(INPUT_POST, "ville");
    $ville = selectOne($pdo, $cp);
    $nomVille = $ville["nom_ville"];
    $idPays = $ville["id_pays"];
    $compagnie = selectAllCompagnie($pdo);
    include "../boundaries/AvionsUpdateIHM.php";
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
    $avions = selectAll($pdo);
    $compagnie = selectAllCompagnie($pdo);
    include "../boundaries/AvionsUpdateIHM.php";
}
?>
