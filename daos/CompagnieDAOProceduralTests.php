<?php

/*
  PaysDAOProceduralTests.php
 */

require_once './ConnectionDB.php';
require_once './PaysDAOProcedural.php';

try {
    // Connexion
    $pdo = getConnection("../conf/monsite.ini");

    /*
     * TEST DU SELECT ALL
     */
    echo "<hr>SELECT ALL<hr>";
    $t = selectAllCompagnie($pdo);
    echo "<pre>";
    var_dump($t);
    echo "</pre>";

    /*
     * TEST DU SELECT ONE
     */
//    echo "<hr>SELECT ONE<hr>";
//    $t = selectOnePays($pdo, "75011");
//    echo "<pre>";
//    var_dump($t);
//    echo "</pre>";

    /*
     * TEST DE L'INSERT
     */
//    echo "<hr>INSERT<hr>";
//    $tAttributesValues = array();
//    $tAttributesValues['id_pays'] = "RU";
//    $tAttributesValues['nom_ville'] = "Russie";
//    $affected = insertPays($pdo, $tAttributesValues);
//    echo "Insertion : $affected";

    /*
     * TEST DU DELETE
     */
//    echo "<hr>DELETE<hr>";
//    $affected = deletePays($pdo, "RU");
//    echo "Suppression : $affected";

    /*
     * TEST DE L'UPDATE
     */
    echo "<hr>UPDATE<hr>";
    $tAttributesValues = array();
    $tAttributesValues['nom_compagnie'] = "RUSSIE";
    $affected = updateCompagnie($pdo, $tAttributesValues, "RU");
    echo "Modification : $affected";

    $pdo = null;
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>
