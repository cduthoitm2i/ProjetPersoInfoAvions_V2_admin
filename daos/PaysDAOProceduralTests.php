<?php

/*
  PaysDAOProceduralTests.php
 */

require_once './ConnectionDB.php';
require_once './PaysDAOProcedural.php';

try {
    // Connexion
    $pdo = getConnection("../conf/cours.ini");

    /*
     * TEST DU SELECT ALL
     */
    echo "<hr>SELECT ALL<hr>";
    $t = selectAllPays($pdo);
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
    $tAttributesValues['nom_pays'] = "RUSSIE";
    $affected = updatePays($pdo, $tAttributesValues, "RU");
    echo "Modification : $affected";

    $pdo = null;
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>
