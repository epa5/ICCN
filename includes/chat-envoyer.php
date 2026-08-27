<?php
require_once __DIR__ . '/config.php';
header('Content-Type: application/json');

$entree = json_decode(file_get_contents('php://input'), true);
$texte   = trim($entree['message'] ?? '');
$session = trim($entree['session'] ?? '');

if ($texte === '' || $session === '') {
    echo json_encode(['ok' => false, 'erreur' => 'Message ou session vide']);
    exit;
}
if (mb_strlen($texte) > 1000) $texte = mb_substr($texte, 0, 1000);

// 1. Stocker le message dans la base
$stmt = $pdo->prepare("INSERT INTO chat_messages(session_id, sender, message) VALUES (?, 'visiteur', ?)");
$stmt->execute([$session, $texte]);

// 2. Envoyer au proprio via Twilio (si configure)
$sid   = getenv('TWILIO_ACCOUNT_SID');
$token = getenv('TWILIO_AUTH_TOKEN');
$de    = getenv('TWILIO_WHATSAPP_FROM');    // ex: whatsapp:+14155238886
$vers  = getenv('TWILIO_WHATSAPP_TO');      // ex: whatsapp:+243971127831
if (empty($vers)) $vers = 'whatsapp:+243971127831';

$envoye = false;
if ($sid && $token && $de && $vers) {
    $url = "https://api.twilio.com/2010-04-01/Accounts/$sid/Messages.json";
    $post = [
        'From' => $de,
        'To'   => $vers,
        'Body' => "💬 Nouveau message du site :\n\n$texte\n\n(Répond directement ici, le visiteur verra ta réponse.)",
    ];
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($post),
        CURLOPT_USERPWD        => "$sid:$token",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 15,
    ]);
    $rep = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $envoye = ($code >= 200 && $code < 300);
    if (!$envoye) error_log("Twilio send failed ($code): " . substr((string)$rep, 0, 400));
}

echo json_encode(['ok' => true, 'envoye_twilio' => $envoye]);
