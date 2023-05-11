<?php

/*
 * PaysUpdateCTRL.php
 */

$message = "";

require_once '../daos/ConnectionDB.php';
require_once '../daos/PaysDAOProcedural.php';

$pdo = null;

try {
    $idPays = "";
    $nomPays = "";
    // Connexion
    $pdo = getConnection("../conf/cours.ini");

    $btSelectionner = filter_input(INPUT_POST, "btSelectionner");
    $idPays = filter_input(INPUT_POST, "id_pays");
    if ($btSelectionner != null) {
        $pays = selectOnePays($pdo, $idPays);
        $idPays = $pays["id_pays"];
        $nomPays = $pays["nom_pays"];
    }

    $btModifier = filter_input(INPUT_POST, "btModifier");
    if ($btModifier != null) {
        $pk = filter_input(INPUT_POST, "id_pays");
        $tAttributesValues = array();
        $tAttributesValues["nom_pays"] = filter_input(INPUT_POST, "nom_pays");
        $message = updatePays($pdo, $tAttributesValues, $pk) . " pays modifié";
    }
    /*
     * SELECT ALL
     */
    $list = selectAllPays($pdo);
} catch (PDOException $e) {
    $message = $e->getMessage();
}

include "../boundaries/PaysUpdateIHM.php";
?>
