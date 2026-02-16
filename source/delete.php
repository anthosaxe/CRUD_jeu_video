<?php
require_once './connect.php';

// Récupère l'ID 
$id = $_GET['id'];

// Requête de suppression
$sql = "DELETE FROM jeux_video WHERE ID = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

// Redirection
header('Location: ../index.php');
