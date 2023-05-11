<?php

/*
 * CompagnieInsertCTRL.php
 */

$message = "";

require_once '../daos/ConnectionDB.php';
require_once '../daos/CompagnieDAOProcedural.php';

$pdo = null;

try {
    // Connexion
    $pdo = getConnection("../conf/monsite.ini");
    /*
     * INSERT
     */
    $idPays = filter_input(INPUT_POST, "id_pays");
    $nomPays = filter_input(INPUT_POST, "nom_pays");
    if ($idPays != null && $nomPays != null) {
        //    $tAttributesValues = array();
        $tAttributesValues['id_pays'] = $idPays;
        $tAttributesValues['nom_pays'] = $nomPays;
        $message = insertPays($pdo, $tAttributesValues);
    }
} catch (PDOException $e) {
    $message = $e->getMessage();
}
include "../boundaries/CompagnieInsertIHM.php";
?>
