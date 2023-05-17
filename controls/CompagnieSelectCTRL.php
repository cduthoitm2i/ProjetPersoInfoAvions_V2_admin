<?php

/*
 * CompagnieSelectCTRL.php
 */

$message = "";

require_once '../daos/ConnectionDB.php';
require_once '../daos/CompagnieDAOProcedural.php';

$pdo = null;

try {
    // Connexion
    $pdo = getConnection("../conf/monsite.ini");
    /*
     * SELECT ALL
     */
    $list = selectAllCompagnie($pdo);
    include "../boundaries/CompagnieSelectIHM.php";
} catch (PDOException $e) {
    
}
?>
