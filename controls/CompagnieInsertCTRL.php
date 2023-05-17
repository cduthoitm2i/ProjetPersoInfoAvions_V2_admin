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
    $idCompagnie = filter_input(INPUT_POST, "id_compagnie");
    $nomCompagnie = filter_input(INPUT_POST, "nom_compagnie");
    if ($idCompagnie != null && $nomCompagnie != null) {
        //    $tAttributesValues = array();
        $tAttributesValues['id_compagnie'] = $idCompagnie;
        $tAttributesValues['nom_compagnie'] = $nomCompagnie;
        $message = insertCompagnie($pdo, $tAttributesValues);
    }
} catch (PDOException $e) {
    $message = $e->getMessage();
}
include "../boundaries/CompagnieInsertIHM.php";
?>
