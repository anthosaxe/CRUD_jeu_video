<?php
include 'connect.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$possesseur = $_POST['possesseur'];
$console = $_POST['console'];
$prix = $_POST['prix'];
$nb_joueur = $_POST['nbre_joueurs_max'];
$commentaires = $_POST['commentaires'];

$sql = "UPDATE jeux_video SET nom=:nom, possesseur=:possesseur, console=:console, prix=:prix, nbre_joueurs_max=:nb_joueur, commentaires=:commentaires WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':possesseur', $possesseur);
$stmt->bindParam(':console', $console);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':nb_joueur', $nb_joueur);
$stmt->bindParam(':commentaires', $commentaires);
$stmt->execute();

header('Location: ../index.php');