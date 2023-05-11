<!DOCTYPE html>
<!-- PaysInsertIHM.php -->
<html>
    <head>
        <title>CompagnieInsertIHM</title>
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
            <h1>Nouvelle compagnie</h1>
            <form action="../controls/CompagnieInsertCTRL.php" method="POST">
                <label>ID pays </label>
                <input type="text" name="id_pays" value="RU" size="4" />
                <label>Ville </label>
                <input type="text" name="nom_pays" value="RUSSIE" />
                <input type="submit" value="Ajouter"/>
            </form>

            <br>

            <label>
                <?php
                if (isSet($message)) {
                    echo $message . " pays ajouté";
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
