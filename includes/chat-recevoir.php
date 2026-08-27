<?php
require_once __DIR__ . '/config.php';
header('Content-Type: application/json');

$session = trim($_GET['session'] ?? '');
if ($session === '') { echo json_encode(['messages' => []]); exit; }

$stmt = $pdo->prepare("SELECT sender, message, cree_le FROM chat_messages WHERE session_id = ? ORDER BY id ASC");
$stmt->execute([$session]);
$messages = [];
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
    $messages[] = [
        'sender' => $r['sender'],
        'text'   => $r['message'],
        'time'   => date('H:i', strtotime($r['cree_le'])),
    ];
}
echo json_encode(['messages' => $messages]);
