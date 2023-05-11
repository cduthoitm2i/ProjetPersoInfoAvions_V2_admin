<?php

/*
  AvionsDAOProcedural.php
 */
/*
  LE DAO de la table [avion] de la BD [cduthoit59_bd_avions_airbus_v2 ]
 */

/**
 *
 * @param PDO $pdo
 * @return array
 */
function selectAll(PDO $pdo): array {
    /*
     * Renvoie un tableau ordinal de tableaux associatifs
     */
    $list = array();
    try {
        $cursor = $pdo->query("SELECT * FROM avion");
        // Renvoie un tableau ordinal de tableaux associatifs
        $list = $cursor->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $message = array("message" => "Veuillez téléphoner ...");
        $list[] = $message;
    }
    return $list;
}

/**
 *
 * @param PDO $pdo
 * @param string $id
 * @return array
 */
function selectOne(PDO $pdo, string $id): array {
    /*
     * Renvoie un tableau associatif
     */
    try {
        $sql = "SELECT * FROM avion WHERE numero_serie_avion = ?";
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
function insert(PDO $pdo, array $tAttributesValues): int {
    $affected = 0;
    try {
        $sql = "INSERT INTO avion(modele_avion,nom_avion,type_avion,numero_serie_avion,immatriculation_essai_avion,date_premier_vol_avion,immatriculation_compagnie_avion,nom_compagnie,config_siege_avion_F,config_siege_avion_C,config_siege_avion_W,config_siege_avion_Y,hex_code_avion,motorisation_avion,statut_avion) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["modele_avion"]);
        $statement->bindValue(2, $tAttributesValues["nom_avion"]);
        $statement->bindValue(3, $tAttributesValues["type_avion"]);
        $statement->bindValue(4, $tAttributesValues["numero_serie_avion"]);
        $statement->bindValue(5, $tAttributesValues["immatriculation_essai_avion"]);
        $statement->bindValue(6, $tAttributesValues["date_premier_vol_avion"]);
        $statement->bindValue(7, $tAttributesValues["immatriculation_compagnie_avion"]);
        $statement->bindValue(8, $tAttributesValues["nom_compagnie"]);
        $statement->bindValue(9, $tAttributesValues["config_siege_avion_F"]);
        $statement->bindValue(10, $tAttributesValues["config_siege_avion_C"]);
        $statement->bindValue(11, $tAttributesValues["config_siege_avion_W"]);
        $statement->bindValue(12, $tAttributesValues["config_siege_avion_Y"]);
        $statement->bindValue(13, $tAttributesValues["hex_code_avion"]);
        $statement->bindValue(14, $tAttributesValues["motorisation_avion"]);
        $statement->bindValue(15, $tAttributesValues["statut_avion"]);
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
 * @param string $id
 * @return int
 */
function delete(PDO $pdo, string $id): int {
    $affected = 0;
    try {
        $sql = "DELETE FROM villes WHERE cp = ?";

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
function update(PDO $pdo, array $tAttributesValues, string $pk): int {
    $affected = 0;
    try {
        $sql = "UPDATE villes SET nom_ville = ?,id_pays = ? WHERE cp = ?";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["nom_ville"]);
        $statement->bindValue(2, $tAttributesValues["id_pays"]);
        $statement->bindValue(3, $pk);

        $statement->execute();
        $affected = $statement->rowcount();
    } catch (PDOException $e) {
        $affected = -1;
    }
    return $affected;
}
?>
