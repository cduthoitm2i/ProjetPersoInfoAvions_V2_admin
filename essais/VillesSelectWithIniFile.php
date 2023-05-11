<?php

// --- VillesSelectWithIniFile.php
header("Content-Type: text/html; charset=UTF-8");

try {
    // Connexion
    // Récupération du contenu du fichier cours.ini dans un tableau associatif
    $tProprietes = parse_ini_file("../conf/monsite.ini");

    // Récupération une à une des valeurs des clés du tableau associatif
    $host = $tProprietes["serveur"];
    $db = $tProprietes["bd"];
    $user = $tProprietes["ut"];
    $pwd = $tProprietes["mdp"];

    // Utilisation des variables dans le DSN et les autres paramètres
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$db;", $user, $pwd);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

    // Préparation et exécution du SELECT SQL
    $select = "SELECT * FROM avion";
    $curseur = $pdo->query($select);
    $curseur->setFetchMode(PDO::FETCH_NUM);

    $lsContenu = "";

    // On boucle sur les lignes en récupérant le contenu des colonnes 1 et 2
    foreach ($curseur as $enregistrement) {
        // Récupération des valeurs par concaténation et interpolation
        $lsContenu .= "$enregistrement[0]-$enregistrement[1]-$enregistrement[2]-$enregistrement[3]-$enregistrement[4]-$enregistrement[5]-$enregistrement[6]-$enregistrement[7]-$enregistrement[8]-$enregistrement[9]-$enregistrement[10]-$enregistrement[11]-$enregistrement[12]-$enregistrement[13]-$enregistrement[14]-$enregistrement[15]-$enregistrement[16]-$enregistrement[17]-$enregistrement[18]<br>";
    }
    // Fermeture du curseur (facultatif)
    $curseur->closeCursor();
}
// Gestion des erreurs
catch (PDOException $e) {
    $lsContenu = "Echec de l'exécution : " . $e->getMessage();
}

// Déconnexion (facultative)
$pdo = null;

// Affichage du contenu
echo $lsContenu;
?>