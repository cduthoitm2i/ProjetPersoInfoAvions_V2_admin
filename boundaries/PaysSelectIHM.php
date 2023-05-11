<!DOCTYPE html>
<!-- PaysSelectIHM.php -->
<html>
    <head>
        <title>PaysSelectIHM</title>
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
            <h1>PaysSelectIHM</h1>
            <table border="1">
                <thead>
                    <tr>
                        <?php
                        ?>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $body = "";
                    foreach ($list as $line) {
                        $body .= "<tr>\n";
                        $body .= "<td>" . $line[0] . "</td>\n";
                        $body .= "<td>" . $line[1] . "</td>\n";
                        $body .= "</tr>\n";
                    }
                    echo $body;
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