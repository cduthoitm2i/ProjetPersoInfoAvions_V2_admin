<?php

/*
 * UtilisateursDAOProceduralTests.php
 */

// On charge en mémoire du code PHP qui contient pour le coup des fonctions
// once : une fois donc et si c'est déjà chargé ne recharge pas pour éviter une erreur fatale
require_once './ConnectionDB.php';
require_once './UtilisateursDAOProcedural.php';

// Sollicite la fonction qui permet une connexion BD avec comme paramètre un fichier ini
// qui contient lui-même des paramètres de connexion à la BD (protocole, hôte, port, nom de la BD, ...)
$pdo = getConnection("../conf/monsite.ini");
// Sollicite la fonction qui permet d'authentifier un user
// elle a comme paramètre une connexion BD et le pseudo et le mot de passe
if (selectOneByPseudoAndMdp($pdo, "p", "b") == 1) {
    echo "ok";
} else {
    echo "KO";
}
// Affichage résultat de la fonction précédente (0 ou hein)
//echo $count;
?>
