<?php

/*
  VillesDAOProceduralTests.php
 */

require_once './ConnectionDB.php';
require_once './VillesDAOProcedural.php';

try {
    // Connexion
    $pdo = getConnection("../conf/cours.ini");

    /*
     * TEST DU SELECT ALL
     */
    echo "<hr>SELECT ALL<hr>";
    $t = selectAll($pdo);
    echo "<pre>";
    var_dump($t);
    echo "</pre>";

    /*
     * TEST DU SELECT ONE
     */
//    echo "<hr>SELECT ONE<hr>";
//    $t = selectOne($pdo, "75011");
//    echo "<pre>";
//    var_dump($t);
//    echo "</pre>";

    /*
     * TEST DE L'INSERT
     */
//    echo "<hr>INSERT<hr>";
//    $tAttributesValues = array();
//    $tAttributesValues['cp'] = "99999";
//    $tAttributesValues['nom_ville'] = "Villeneuve";
//    $tAttributesValues['id_pays'] = "033";
//    $affected = insert($pdo, $tAttributesValues);
//    echo "Insertion : $affected";

    /*
     * TEST DU DELETE
     */
//    echo "<hr>DELETE<hr>";
//    $affected = delete($pdo, "99999");
//    echo "Suppression : $affected";

    /*
     * TEST DE L'UPDATE
     */
    echo "<hr>UPDATE<hr>";
    $tAttributesValues = array();
    $tAttributesValues['nom_ville'] = "Praha";
    $tAttributesValues['id_pays'] = "CZ";
    $affected = update($pdo, $tAttributesValues, "75022");
    echo "Modification : $affected";

    $pdo = null;
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>
