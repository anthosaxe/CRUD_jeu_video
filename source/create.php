<html class="mx-50 my-20">

<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="m-20%"  id="formupdate">
        <form action="create-traitement.php" method="post">
            <input type="hidden" name="id" value="<?php echo $jeu['ID']; ?>">
            <table class="w-full">
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" value=""></td>
                </tr>
                <tr>
                    <td>Propriétaire :</td>
                    <td><input type="text" name="possesseur" value=""></td>
                </tr>
                <tr>
                    <td>Console :</td>
                    <td><input type="text" name="console" value=""></td>
                </tr>
                <tr>
                    <td>Prix :</td>
                    <td><input type="text" name="prix" value=""></td>
                </tr>
                <tr>
                    <td>Nombre de joueurs maximum :</td>
                    <td><input type="text" name="nbre_joueurs_max" value=""></td>
                </tr>
                <tr>
                    <td>Commentaires :</td>
                    <td><input type="text" name="commentaires" value=""></td>
                </tr>
            </table>
            <button class="my-5 rounded border px-4 py-2" type="submit">Ajouter</button>
        </form>
    </div>
</body>

</html>