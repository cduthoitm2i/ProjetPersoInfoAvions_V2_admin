<!DOCTYPE html>
<!-- PaysDeleteIHM.php -->
<html>
    <head>
        <title>CompagnieDeleteIHM</title>
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
            <h1>Supprimer une compagnie</h1>
            <form action="../controls/CompagnieDeleteCTRL.php" method="POST">
                <label>Quelle Compagnie ?</label>
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
