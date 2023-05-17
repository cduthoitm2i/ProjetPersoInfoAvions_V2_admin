<!DOCTYPE html>
<!-- CompagnieInsertIHM.php -->
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
                <label>ID compagnie </label>
                <input type="text" name="id_compagnie" value="12" size="4" />
                <label>Ville </label>
                <input type="text" name="nom_compagnie" value="Frontier Airlines" />
                <input type="submit" value="Ajouter"/>
            </form>

            <br>

            <label>
                <?php
                if (isSet($message)) {
                    echo $message . " compagnie ajoutée";
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
