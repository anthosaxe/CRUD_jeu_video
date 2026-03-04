<?php
include './source/connect.php'
?>
<html class="mx-15 my-10">

<head>
    <link rel="stylesheet" href="./source/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.css" /><!--datatables pour avoir un tableau propre-->
</head>

<body class="border rounded p-1">
    <!-- le tableau-->
    <table id="jv_table" class="display">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Propriétaire</th>
                <th>Console</th>
                <th>Prix</th>
                <th>Nombre de joueurs max</th>
                <th>Commentaires</th>
                <th>Date de vente</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM jeux_video";
            $stmt = $pdo->query($sql);
            $jeux = $stmt->fetchAll();

            foreach ($jeux as $jeu): ?>
                <tr>
                    <td><?= $jeu['nom'] ?></td>
                    <td><?= $jeu['possesseur'] ?></td>
                    <td><?= $jeu['console'] ?></td>
                    <td><?= $jeu['prix'] ?></td>
                    <td><?= $jeu['nbre_joueurs_max'] ?></td>
                    <td><?= $jeu['commentaires'] ?></td>
                    <td><?= $jeu['date_vente'] ?></td>
                    <td>
                        <a class="border rounded p-1 bg-red-500" href="./source/delete.php?id=<?= $jeu['ID'] ?>" id="btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer ce jeu ?')">Supprimer</a>
                    </td>
                    <td>
                        <a class="border rounded p-1 bg-sky-500" href="./source/update.php?id=<?= $jeu['ID'] ?>" id="btn-update">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button class="my-5 rounded border px-4 py-2 bg-emerald-500"><a href="./source/create.php">Ajouter un jeu</a></button>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!--dependance de datatables, sert a faciliter la manipulation du DOM de base-->
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script> <!--datatables pour avoir un tableau propre-->
    <script src="./source/js/script.js"></script>
</body>

</html>