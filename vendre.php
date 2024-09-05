<html lang="fr">

<head>

</head>

<body>
    <nav>

    </nav>
    <main>
        <details>
            <summary>Mettre un bien en vente / location</summary>
            <form method="POST">
                <p>
                    <label for="bie_type">Type du bien :</label>
                    <select name="bie_type" id="bie_type">
                        <option value=1>Appartement</option>
                        <option value=2>Maison</option>
                        <option value=3>Terrain</option>
                    </select>
                </p>

                <p>
                    <label for="bie_caracteristique">Caractéristique :</label>
                    <select name="bie_caracteristique" id="bie_caracteristique">
                        <option value=1>studio</option>
                        <option value=2>F2</option>
                        <option value=3>F3</option>
                        <option value=4>F4</option>
                    </select>
                </p>

                <p>
                    <label for="bie_adresse">adresse du bien :</label>
                    <input type="text" id="bie_adresse" name="bie_adresse" placeholder="Ex: 15 rue du Colonel Moutarde" maxlength="500>"
                        </p>

<p>
    <label for="bie_statut">Statut :</label>
    <select name="bie_statut">
        <option value="1">En vente</option>
        <option value="2">En location</option>
    </select></p>

                <p>
                    <label for="bie_prix">Prix du bien :</label>
                    <input type="number" id="bie_prix" name="bie_prix" step="1" min="0">
                </p>

                <input type="submit" id="btSubmit" value="Envoyer">
                <input type="reset">
            </form>
        </details>
    </main>
</body>

</html>