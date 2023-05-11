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
            <h1>VillesSelectIHM</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>CP</th>
                        <th>Nom</th>
                        <th>Site</th>
                        <th>Photo</th>
                        <th>ID Pays</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $villesIntoTBody = "";
                    foreach ($villes as $enregistrement) {
                        $villesIntoTBody .= "<tr>\n";

                        $villesIntoTBody .= "<td>" . $enregistrement['cp'] . "</td>\n";
                        $villesIntoTBody .= "<td>" . $enregistrement['nom_ville'] . "</td>\n";
                        $villesIntoTBody .= "<td>" . $enregistrement['photo'] . "</td>\n";
                        $villesIntoTBody .= "<td>" . $enregistrement['site'] . "</td>\n";
                        $villesIntoTBody .= "<td>" . $enregistrement['id_pays'] . "</td>\n";

                        $villesIntoTBody .= "</tr>\n";
                    }
                    echo $villesIntoTBody;
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