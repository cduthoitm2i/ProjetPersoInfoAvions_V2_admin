<!DOCTYPE html>
<!-- PaysDeleteIHM.php -->
<html>
    <head>
        <title>PaysDeleteIHM</title>
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
            <h1>Supression d'un pays</h1>
            <form action="../controls/PaysDeleteCTRL.php" method="POST">
                <label>Quel Pays </label>
                <select name="id_pays">
                    <?php
                    $options = "";
                    foreach ($list as $line) {
                        $options .= "<option value='$line[0]'>$line[1]</option>\n";
                    }
                    echo $options;
                    ?> 
                </select>
                <input type="submit" value="Supprimer"/>
            </form>

            <br>

            <label>
                <?php
                if (isSet($message)) {
                    echo $message . " pays supprimé";
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
