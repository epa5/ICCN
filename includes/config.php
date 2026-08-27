<?php
$hote = "localhost";
$nom_bdd = "virunga";
$utilisateur_bdd = "epaphras";
$mdp_bdd = "epaphras2026";

define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_UTILISATEUR', 'epaphrasmabesse5@gmail.com');
define('SMTP_MOT_DE_PASSE', 'zzdy ejrh dyii izms');
define('SMTP_DE', 'epaphrasmabesse5@gmail.com');
define('SMTP_NOM', 'Parc National des Virunga');

try {
    $pdo = new PDO("mysql:host=$hote;dbname=$nom_bdd;charset=utf8mb4", $utilisateur_bdd, $mdp_bdd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}