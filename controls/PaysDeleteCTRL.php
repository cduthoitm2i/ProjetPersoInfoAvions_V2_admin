<?php

/*
 * PaysDeleteCTRL.php
 */

$message = "";

require_once '../daos/ConnectionDB.php';
require_once '../daos/PaysDAOProcedural.php';

$pdo = null;

try {
    // Connexion
    $pdo = getConnection("../conf/cours.ini");
    /*
     * INSERT
     */
    $idPays = filter_input(INPUT_POST, "id_pays");
    if ($idPays != null) {
        $message = deletePays($pdo, $idPays);
    }
    $list = selectAllPays($pdo);
} catch (PDOException $e) {
    $message = $e->getMessage();
}
include "../boundaries/PaysDeleteIHM.php";
?>
