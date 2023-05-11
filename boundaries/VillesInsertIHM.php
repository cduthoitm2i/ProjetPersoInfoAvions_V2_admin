<!DOCTYPE html>
<!-- VillesInsertIHM.php -->
<html>
    <head>
        <title>VillesInsertIHM</title>
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
            <h1>Nouvelle ville</h1>
            <form action="../controls/VillesCTRL.php" method="POST">
                <label>CP </label>
                <input type="text" name="cp" value="00007" size="5" />
                <label>Ville </label>
                <input type="text" name="nomVille" value="Nouvelle" />
<!--                Liste déroulante ? -->
                <label>ID pays </label>
                <input type="text" name="idPays" value="033" size="4" />

                <input type="submit" value="Ajouter"/>
                
                <input type="hidden" name="action" value="insertValidation" />
                
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
