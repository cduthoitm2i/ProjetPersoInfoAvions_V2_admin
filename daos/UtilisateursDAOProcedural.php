<?php

/*
  UtilisateursDAOProcedural.php
 */
/*
  LE DAO de la table [utilisateurs] de la BD [cours]
 */

/**
 * 
 * @param PDO $pdo
 * @param string $pseudo
 * @param string $mdp
 * @return int
 */
// On déclare une fonction nommée selectOneByPseudoAndMdp qui a des paramètres pour la connexion BD de type PDO et le p et le mdp de typ chaine
// La fonction renvoie un nombre
function selectOneByPseudoAndMdp(PDO $pdo, string $pseudo, string $mdp): int {
    // On déclare une variable locale de type nombre qui va servir pour le retour de la fonction
    $count = 0;

    // On déclare une variable locale pour stockée le teexte de la requête SQL
    $sql = "SELECT COUNT(*) FROM utilisateurs WHERE pseudo=? AND mdp=?";
    // Variable pour compiler (-> binaire)
    $cursor = $pdo->prepare($sql);
    // Valorise le 1e paramètre (donc le 1e ?)
    $cursor->bindValue(1, $pseudo);
    $cursor->bindValue(2, $mdp);
    // execute
    $cursor->execute();
    // Lit l'enregistement à partir du curseur vers une nouvelle variable
    $record = $cursor->fetch();
    // On attribue à count la 1e case du tableau (colonne)
    $count = $record[0];
    // Renvoie la valeur de count (0 ou 1)
    return $count;
}

//function selectAllUtilisateurs(PDO $pdo): array {
//    /*
//     * Renvoie un tableau ordinal de tableaux associatifs
//     */
//    $list = array();
//    try {
//        $cursor = $pdo->query("SELECT * FROM utilisateurs");
//        // Renvoie un tableau ordinal de tableaux associatifs
//        $list = $cursor->fetchAll();
//    } catch (PDOException $e) {
//        $list["message"] = "Veuillez téléphoner ...";
//    }
//    return $list;
//}
//
///**
// *
// * @param PDO $pdo
// * @param string $id
// * @return array
// */
//function selectOnePays(PDO $pdo, string $id): array {
//    /*
//     * Renvoie un tableau associatif
//     */
//    try {
//        $sql = "SELECT * FROM pays WHERE id_pays = ?";
//        $cursor = $pdo->prepare($sql);
//        $cursor->bindValue(1, $id);
//        $cursor->execute();
//        // Renvoie un tableau associatif
//        $line = $cursor->fetch(PDO::FETCH_ASSOC);
//        if ($line === FALSE) {
//            $line["message"] = "Enregistrement inexistant !";
//        }
//        $cursor->closeCursor();
//    } catch (PDOException $e) {
//        //$line["Error"] = $e->getMessage();
//        $line["Error"] = "Une erreur s'est produite, veuillez téléphoner à votre administrateur de BD, monsieur Antonino !!!";
//    }
//    return $line;
//}
//
///**
// *
// * @param PDO $pdo
// * @param array $tAttributesValues
// * @return int
// */
//function insertPays(PDO $pdo, array $tAttributesValues): int {
//    $affected = 0;
//    try {
//        $sql = "INSERT INTO pays(id_pays, nom_pays) VALUES(?,?)";
//        $statement = $pdo->prepare($sql);
//
//        $statement->bindValue(1, $tAttributesValues["id_pays"]);
//        $statement->bindValue(2, $tAttributesValues["nom_pays"]);
//
//        $statement->execute();
//        $affected = $statement->rowcount();
//    } catch (PDOException $e) {
//        $affected = -1;
//        echo $e->getMessage();
//    }
//    return $affected;
//}
//
///**
// *
// * @param PDO $pdo
// * @param string $id
// * @return int
// */
//function deletePays(PDO $pdo, string $id): int {
//    $affected = 0;
//    try {
//        $sql = "DELETE FROM pays WHERE id_pays = ?";
//
//        $statement = $pdo->prepare($sql);
//        $statement->bindValue(1, $id);
//        $statement->execute();
//
//        $affected = $statement->rowcount();
//    } catch (PDOException $e) {
//        $affected = -1;
//    }
//    return $affected;
//}
//
///**
// * 
// * @param PDO $pdo
// * @param array $tAttributesValues
// * @param string $pk
// * @return int
// */
//function updatePays(PDO $pdo, array $tAttributesValues, string $pk): int {
//    $affected = 0;
//    try {
//        $sql = "UPDATE pays SET nom_pays = ? WHERE id_pays = ?";
//        $statement = $pdo->prepare($sql);
//
//        $statement->bindValue(1, $tAttributesValues["nom_pays"]);
//        $statement->bindValue(2, $pk);
//
//        $statement->execute();
//        $affected = $statement->rowcount();
//    } catch (PDOException $e) {
//        $affected = -1;
//    }
//    return $affected;
//}
?>
