<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$pays = isset($_GET['country']) ? trim($_GET['country']) : '';
if ($pays === '') {
    echo json_encode(['error' => 'Paramètre country requis']);
    exit;
}

$fichier = __DIR__ . '/../assets/data/universites_par_pays.json';
if (!is_file($fichier)) {
    echo json_encode(['error' => 'Données indisponibles']);
    exit;
}

$parPays = json_decode(file_get_contents($fichier), true);
if (!is_array($parPays)) {
    echo json_encode(['error' => 'Données invalides']);
    exit;
}

function normaliser($s) {
    $stop = ['the' => 1, 'of' => 1, 'and' => 1, 'is' => 1, 'in' => 1, 'do' => 1, 'da' => 1, 'de' => 1];
    $mots = preg_split('/[^a-z0-9]+/', strtolower($s));
    $out = [];
    foreach ($mots as $m) {
        $m = trim($m);
        if ($m !== '' && !isset($stop[$m])) $out[] = $m;
    }
    sort($out);
    return implode(' ', $out);
}

$cible = normaliser($pays);
$cle = null;
foreach (array_keys($parPays) as $c) {
    if (normaliser($c) === $cible) { $cle = $c; break; }
}
if ($cle === null) {
    foreach (array_keys($parPays) as $c) {
        $ci = normaliser($c);
        if (strlen($cible) >= 3 && (strpos($ci, $cible) !== false || strpos($cible, $ci) !== false)) {
            $cle = $c; break;
        }
    }
}

if ($cle === null) {
    echo json_encode(['error' => 'Aucune université pour ce pays', 'pays' => $pays]);
    exit;
}

echo json_encode([
    'pays' => $cle,
    'universities' => $parPays[$cle]
]);
