<!DOCTYPE html>
<!-- VillesSelectIHM.php -->
<html>
    <head>
        <title>VillesSelectIHM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
            include '../boundaries/partials/header.php';
            ?>
        </header>
        <nav>
            <?php
            include '../boundaries/partials/nav.php';
            ?>
        </nav>
        <section id="section_principale">
            <h1>AvionsSelectIHM</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Modèle avion</th>
                        <th>Nom avion</th>
                        <th>Type avion</th>
                        <th>Numéro de série avion</th>
                        <th>Immatriculation essai</th>
                        <th>Date premier vol</th>
                        <th>Immatriculation compagnie</th>
                        <th>Nom compagnie</th>
                        <th>Config siège F</th>
                        <th>Config siège C</th>
                        <th>Config siège W</th>
                        <th>Config siège Y</th>
                        <th>Code Hex</th>
                        <th>Motorisation</th>
                        <th>Statut</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $avionsIntoTBody = "";
                    foreach ($avions as $enregistrement) {
                        $avionsIntoTBody .= "<tr>\n";

                        $avionsIntoTBody .= "<td>" . $enregistrement['modele_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['nom_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['type_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['numero_serie_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['immatriculation_essai_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['date_premier_vol_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['immatriculation_compagnie_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['nom_compagnie'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['config_siege_avion_F'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['config_siege_avion_C'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['config_siege_avion_W'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['config_siege_avion_Y'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['hex_code_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['motorisation_avion'] . "</td>\n";
                        $avionsIntoTBody .= "<td>" . $enregistrement['statut_avion'] . "</td>\n";
                        $avionsIntoTBody .= "</tr>\n";
                    }
                    echo $avionsIntoTBody;
                    ?> 
                </tbody>
            </table>

        </section>
        <footer>
            <?php
            include '../boundaries/partials/footer.php';
            ?>
        </footer>
    </body>
</html>