<?php
function enregistrerVisite(PDO $pdo, string $email) {
    $requete = $pdo->prepare("SELECT id FROM historique_consultation WHERE email = ?");
    $requete->execute([$email]);

    if ($requete->fetch()) {
        // Déjà venu(e) avant → on met juste à jour la dernière activité
        $pdo->prepare("UPDATE historique_consultation SET derniere_activite = NOW() WHERE email = ?")
            ->execute([$email]);
    } else {
        // Première visite → on enregistre les deux dates
        $pdo->prepare("INSERT INTO historique_consultation (email, premiere_visite, derniere_activite) VALUES (?, NOW(), NOW())")
            ->execute([$email]);
    }
}