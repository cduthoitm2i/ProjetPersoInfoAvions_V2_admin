<!DOCTYPE html>
<!-- PaysUpdateIHM.php -->
<html>
    <head>
        <title>PaysUpdateIHM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
        <style>#id_pays_lecture_seul{
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
            <h1>Modification d'un pays</h1>
            <form action="../controls/PaysUpdateCTRL.php" method="POST">
                <label>Quel pays ?</label>
                <select name="id_pays">
                    <?php
                    $options = "";
                    foreach ($list as $record) {
                        $options .= "<option value='" . $record['id_pays'] . "'>";
                        $options .= $record['nom_pays'];
                        $options .= "</option>\n";
                    }
                    echo $options;
                    ?>
                </select>
                <input type="submit" value="Sélectionner" name="btSelectionner"/>
            </form>

            <br>

            <form action="../controls/PaysUpdateCTRL.php" method="POST">
                <label>ID pays </label>
                <input type="text" name="id_pays" value="<?php echo $idPays ?>" size="5" id="id_pays_lecture_seul" readonly="readonly"/>
                <label>Ville </label>
                <input type="text" name="nom_pays" value="<?php echo $nomPays ?>" />
                <label>Pays </label>

                <input type="submit" value="Modifier" name="btModifier"/>
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
