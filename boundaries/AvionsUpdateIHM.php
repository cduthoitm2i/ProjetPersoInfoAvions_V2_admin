<!DOCTYPE html>
<!-- VillesUpdateIHM.php -->
<html>
    <head>
        <title>VillesUpdateIHM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
        <style>#cp_lecture_seul{
                background: red;
                border: 0px;
            }</style>
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
            <h1>Modification d'un avion</h1>
            <form action="../controls/AvionsCTRL.php" method="POST">
                <label>Quel avion ?</label>
                <select name="ville">
                    <?php
                    $options = "";
                    foreach ($villes as $enregistrement) {
                        $options .= "<option value='" . $enregistrement['cp'] . "'>";
                        $options .= $enregistrement['nom_ville'];
                        $options .= "</option>\n";
                    }
                    echo $options;
                    ?>
                </select>
                <input type="submit" value="Sélectionner"/>
                <input type="hidden" name="action" value="updateSelection" />
            </form>

            <br>

            <form action="../controls/AvionsCTRL.php" method="POST">
                <label>CP </label>
                <input type="text" name="cp" value="<?php echo $cp ?>" size="5" id="cp_lecture_seul" readonly="readonly"/>
                <label>Ville </label>
                <input type="text" name="nomVille" value="<?php echo $nomVille ?>" />
                <label>Pays </label>

                <select name="pays">
                    <?php
                    $options = "";
                    foreach ($pays as $enregistrement) {
                        if ($enregistrement['id_pays'] == $idPays) {
                            $options .= "<option value='" . $enregistrement['id_pays'] . "' selected='selected'>";
                            $options .= $enregistrement['nom_pays'];
                            $options .= "</option>\n";
                        } else {
                            $options .= "<option value='" . $enregistrement['id_pays'] . "'>";
                            $options .= $enregistrement['nom_pays'];
                            $options .= "</option>\n";
                        }
                    }
                    echo $options;
                    ?>
                </select>
                <input type="hidden" value="<?php echo $idPays ?>" />
                <input type="submit" value="Modifier"/>

                <input type="hidden" name="action" value="updateValidation" />

            </form>

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
