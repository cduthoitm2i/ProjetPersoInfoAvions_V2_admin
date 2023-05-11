<!DOCTYPE html>
<!-- AvionsInsertIHM.php -->
<html>
    <head>
        <title>AvionsInsertIHM</title>
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
            <h1>Insertion avion</h1>

            <form action="../controls/AvionsCTRL.php" method="POST">
                <label>Modèle avion&nbsp; </label><br>
                <input type="text" name="modele_avion" value="Airbus A380-861" size="25" placeholder="Airbus A318-111" required/><br><br>
                <label>Nom avion&nbsp; </label><br>
                <input type="text" name="nom_avion" value="A380" size="25" placeholder="A318" required/><br><br>
                <label>Type avion&nbsp; </label><br>
                <input type="text" name="type_avion" value="861" size="25" placeholder="111" required/><br><br>
                <label>Numéro de série avion&nbsp; </label><br>
                <input type="text" name="numero_serie_avion" value="9" size="25" placeholder="2035" required/><br><br>
                <label>Immatriculation essai avion&nbsp; </label><br>
                <input type="text" name="immatriculation_essai_avion" value="F-WWEA" size="25" placeholder="D-AUAD"/><br><br>
                <label>Date premier vol&nbsp; </label><br>
                <input type="date" name="date_premier_vol_avion" value="2006-08-25" size="25" /><br><br>
                <label>Immatriculation compagnie avion&nbsp; </label><br>
                <input type="text" name="immatriculation_compagnie_avion" value="A6-EDJ" size="25" placeholder="C-FPAI"/><br><br>
                <label>Nom compagnie&nbsp; </label><br>
                <input type="text" name="nom_compagnie" value="Emirates" size="25" placeholder="Air France" required/><br><br>
                <label>Configuration siège F&nbsp; </label><br>
                <input type="text" name="config_siege_avion_F" value="F14" size="25" placeholder="F14"/><br><br>
                <label>Configuration siège C&nbsp; </label><br>
                <input type="text" name="config_siege_avion_C" value="C76" size="25" placeholder="C70"/><br><br>
                <label>Configuration siège W&nbsp; </label><br>
                <input type="text" name="config_siege_avion_W" value="" size="25" placeholder="W60"/><br><br>
                <label>Configuration siège Y&nbsp; </label><br>
                <input type="text" name="config_siege_avion_Y" value="Y427" size="25" placeholder="Y341"/><br><br>
                <label>Code hexadécimal avion&nbsp; </label><br>
                <input type="text" name="hex_code_avion" value="8960EB" size="25" placeholder="7C4926"/><br><br>
                <label>Motorisation avion&nbsp; </label><br>
                <input type="text" name="motorisation_avion" value="4 x GP7270" size="25" placeholder="4 x RR Trent 972"/><br><br>
                <label>Statut avion&nbsp; </label><br>
                <select type="text" name="statut_avion" value="Active (parked)" required>
                    <option value="--Merci de choisir une option--"></option>
                    <option value="stored">Stored</option>
                    <option value="scrapped">Scrapped</option>
                    <option value="active-parked">Active (parked)</option>
                    <option value="active">Active</option>
                </select><br>

                <br>
                <input type="submit" value="Ajouter"/>
                
                <input type="hidden" name="action" value="insertValidation" />
                </table>    
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
