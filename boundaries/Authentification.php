<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
        <style>
            section, p{margin: 0.3%; padding: 0.3%;}
            input, button{padding: 3px;}
            .etiquette{
                display: inline-block; width: 150px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php
            include '../boundaries/partials/header.php';
            ?>
        </header>
        <nav>
            <?php
            //include '../boundaries/partials/nav.php';
            ?>
        </nav>
        <section id="center">
            <article>
                <fieldset>
                    <legend>&nbsp;&nbsp;&nbsp;Authentification&nbsp;&nbsp;&nbsp;</legend>
                    <form action="../controls/AuthentificationCTRL.php" method="post" id="formLogin">
                        <p>
                            <label for="pseudo" class="etiquette">Pseudo</label>
                            <input type="text" class="obligatoire" name="pseudo" id="pseudo" placeholder="Pseudo ?" value="p"/>
                            <label class="texteRouge">*</label>
                        </p>
                        <p>
                            <label for="mdp" class="etiquette">Mot de passe</label>
                            <input type="password" class="obligatoire" name="mdp" id="mdp" placeholder="Mot de passe ?" value="b"/>
                            <label class="texteRouge">*</label>
                        </p>

                       
                        <br>
                        <p id="pButtons">
                            <label class="etiquette">&nbsp;</label>
                            <button type="reset" name='btReinitialiser' id='btReinitialiser' value="R&eacute;initialiser">
                                R&eacute;initialiser
                            </button>
                            <input type="submit" name='btValider' id='btValider' value="Valider"/>
                        </p>
                    </form>
                </fieldset>
            </article>
            <p id="message" class="message  p_centre">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
            </p>

        </section>
        <footer>
            <?php
            include '../boundaries/partials/footer.php';
            ?>
        </footer>
    </body>
</html>