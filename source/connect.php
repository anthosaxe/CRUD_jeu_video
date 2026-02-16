<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'jeux_video');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Création de la connexion PDO
$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;

$pdo = new PDO($dsn, DB_USER, DB_PASS);
