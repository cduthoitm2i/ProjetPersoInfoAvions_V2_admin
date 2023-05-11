<?php

/*
 * AuthentificationCTRL
 */
$message = "";
$pseudo = "";
$mdp = "";

$btValider = filter_input(INPUT_POST, "btValider");

if ($btValider != null) {
    // 
    $pseudo = filter_input(INPUT_POST, "pseudo");
    $mdp = filter_input(INPUT_POST, "mdp");
    // 
    if ($pseudo == null || $mdp == null) {
        setcookie("pseudo", "");
        setcookie("mdp", "");
        $message = "Toutes les saisies sont obligatoires";
    } else {
        // 
        $message = "Jusque là tout va bien !!!";
        require_once '../daos/ConnectionDB.php';
        $pdo = getConnection("../conf/monsite.ini");
        //
        require_once '../daos/UtilisateursDAOProcedural.php';
        $count = selectOneByPseudoAndMdp($pdo, $pseudo, $mdp);
        if ($count == 1) {
            //
            $message = "Authentification réussie !!!";
            include '../boundaries/Accueil.php';
        } else {
            //
            $message = "Authentification ratée !!!";
            include '../boundaries/Authentification.php';
        }
    }
}
?>
