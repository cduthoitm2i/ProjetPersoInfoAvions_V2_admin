<!DOCTYPE html>
<!-- AvionsDeleteIHM.php -->
<html>
    <head>
        <title>AvionsDeleteIHM</title>
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
            <h1>Suppression d'un avion</h1>
            <form action="../controls/AvionsCTRL.php" method="POST">
                <label>Quel avion ?</label>
                <select name="numero_serie_avion">
                    <?php
                    $options = "";
                    foreach ($avions as $enregistrement) {
                        $options .= "<option value='" . $enregistrement['numero_serie_avion'] . "'>";
                        $options .= $enregistrement['modele_avion'] . " / MSN&nbsp: " . $enregistrement['numero_serie_avion'];
                        $options .= "</option>\n";
                    }
                    echo $options;
                    ?>
                </select>

                <input type="submit" value="Supprimer"/>

                <input type="hidden" name="action" value="deleteValidation" />

            </form>

            <br>

            <label>
                <?php
                if (isSet($message)) {
                    echo $message;
                }
                ?>
            </label>


        </section>
        <footer>
            <?php
            include '../boundaries/partials/footer.php';
            ?>
        </footer>
    </body>
</html>
