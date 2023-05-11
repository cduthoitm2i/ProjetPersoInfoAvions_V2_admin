<?php

/*
 * PaysSelectCTRL.php
 */

$message = "";

require_once '../daos/ConnectionDB.php';
require_once '../daos/PaysDAOProcedural.php';

$pdo = null;

try {
    // Connexion
    $pdo = getConnection("../conf/cours.ini");
    /*
     * SELECT ALL
     */
    $list = selectAllPays($pdo);
    include "../boundaries/PaysSelectIHM.php";
} catch (PDOException $e) {
    
}
?>
