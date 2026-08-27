<?php
/**
 * Webhook Twilio : recu quand le proprietaire repond dans son WhatsApp.
 * Twilio POSTe ici : Body, From, To, etc.
 */
require_once __DIR__ . '/includes/config.php';

$corps = trim($_POST['Body'] ?? '');
$qui   = trim($_POST['From'] ?? '');

// On ignore les notifications generees (celles qui commencent par 💬 venant du site)
if (str_starts_with($corps, '💬')) {
    http_response_code(200); echo 'OK'; exit;
}
// On ignore les messages entrants d'un numero inconnu (seulement le proprio repond)
$numeroProprio = getenv('TWILIO_WHATSAPP_TO');
if ($numeroProprio) {
    $whitespace = [''];
    $numeroAttendu = 'whatsapp:' . $numeroProprio;
    if ($qui !== '' && $qui !== $numeroAttendu) {
        http_response_code(200); echo 'OK'; exit;
    }
}

if ($corps !== '' && mb_strlen($corps) <= 1000) {
    // Router vers la conversation la plus recente
    $stmt = $pdo->query("SELECT session_id FROM chat_messages WHERE sender='visiteur' ORDER BY id DESC LIMIT 1");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $session = $row['session_id'] ?? 'principal';

    $stmt = $pdo->prepare("INSERT INTO chat_messages(session_id, sender, message) VALUES (?, 'proprietaire', ?)");
    $stmt->execute([$session, $corps]);
}

http_response_code(200);
echo 'OK';
