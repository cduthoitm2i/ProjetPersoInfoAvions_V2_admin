<?php

/*
  CompagnieDAOProcedural.php
 */
/*
  LE DAO de la table [compagnie] de la BD 
 */

function selectAllCompagnie(PDO $pdo): array {
    /*
     * Renvoie un tableau ordinal de tableaux associatifs
     */
    $list = array();
    try {
        $cursor = $pdo->query("SELECT * FROM compagnie");
        // Renvoie un tableau ordinal de tableaux associatifs
        $list = $cursor->fetchAll();
//        foreach ($list as $line) {
//            $body .= "<tr>\n";
//
//            $body .= "<td>" . $line[0] . "</td>\n";
//            $body .= "<td>" . $line[1] . "</td>\n";
//
//            $body .= "</tr>\n";
//        }
    } catch (PDOException $e) {
        $list["message"] = "Veuillez téléphoner ...";
    }
    return $list;
}

/**
 *
 * @param PDO $pdo
 * @param string $id
 * @return array
 */
function selectOneCompagnie(PDO $pdo, string $id): array {
    /*
     * Renvoie un tableau associatif
     */
    try {
        $sql = "SELECT * FROM compagnie WHERE id_compagnie = ?";
        $cursor = $pdo->prepare($sql);
        $cursor->bindValue(1, $id);
        $cursor->execute();
        // Renvoie un tableau associatif
        $line = $cursor->fetch(PDO::FETCH_ASSOC);
        if ($line === FALSE) {
            $line["message"] = "Enregistrement inexistant !";
        }
        $cursor->closeCursor();
    } catch (PDOException $e) {
        //$line["Error"] = $e->getMessage();
        $line["Error"] = "Une erreur s'est produite, veuillez téléphoner à votre administrateur de BD, monsieur Antonino !!!";
    }
    return $line;
}

/**
 *
 * @param PDO $pdo
 * @param array $tAttributesValues
 * @return int
 */
function insertCompagnie(PDO $pdo, array $tAttributesValues): int {
    $affected = 0;
    try {
        $sql = "INSERT INTO compagnie(id_compagnie, nom_compagnie) VALUES(?,?)";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["id_compagnie"]);
        $statement->bindValue(2, $tAttributesValues["nom_compagnie"]);

        $statement->execute();
        $affected = $statement->rowcount();
    } catch (PDOException $e) {
        $affected = -1;
        echo $e->getMessage();
    }
    return $affected;
}

/**
 *
 * @param PDO $pdo
 * @param string $id
 * @return int
 */
function deleteCompagnie(PDO $pdo, string $id): int {
    $affected = 0;
    try {
        $sql = "DELETE FROM compagnie WHERE id_compagnie = ?";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $affected = $statement->rowcount();
    } catch (PDOException $e) {
        $affected = -1;
    }
    return $affected;
}

/**
 * 
 * @param PDO $pdo
 * @param array $tAttributesValues
 * @param string $pk
 * @return int
 */
function updateCompagnie(PDO $pdo, array $tAttributesValues, string $pk): int {
    $affected = 0;
    try {
        $sql = "UPDATE compagnie SET nom_compagnie = ? WHERE id_compagnie = ?";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["nom_compagnie"]);
        $statement->bindValue(2, $pk);

        $statement->execute();
        $affected = $statement->rowcount();
    } catch (PDOException $e) {
        $affected = -1;
    }
    return $affected;
}

?>
