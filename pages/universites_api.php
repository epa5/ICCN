<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$pays = isset($_GET['country']) ? trim($_GET['country']) : '';
if ($pays === '') {
    echo json_encode(['error' => 'Paramètre country requis']);
    exit;
}

// hipolabs utilise des noms de pays au format CLDR qui diffèrent parfois
// de ceux renvoyés par countriesnow / restcountries. On essaie le nom
// direct, sinon les synonymes connus, jusqu'à obtenir des résultats.
$CORRESPONDANCES = [
    'Brunei'                            => 'Brunei Darussalam',
    'Russia'                            => 'Russian Federation',
    'Taiwan'                            => 'Taiwan, Province of China',
    'Laos'                              => 'Lao People\'s Democratic Republic',
    'Venezuela'                         => 'Venezuela, Bolivarian Republic of',
    'Vatican City State (Holy See)'     => 'Holy See (Vatican City State)',
    'Turkey'                            => 'Turkiye',
    'Syria'                             => 'Syrian Arab Republic',
    'Vietnam'                           => 'Viet Nam',
    'Macau'                             => 'Macao',
    'Ivory Coast'                       => 'Côte d\'Ivoire',
    'Cote d\'Ivoire'                    => 'Côte d\'Ivoire',
    'Democratic Republic of the Congo'  => 'Congo, the Democratic Republic of the',
    'DR Congo'                          => 'Congo, the Democratic Republic of the',
    'South Korea'                       => 'Korea, Republic of',
    'North Korea'                       => 'Korea, Democratic People\'s Republic of',
    'Tanzania'                          => 'Tanzania, United Republic of',
    'United States of America'          => 'United States',
    'Iran'                              => 'Iran, Islamic Republic of',
    'Moldova'                           => 'Moldova, Republic of',
    'Bolivia'                           => 'Bolivia, Plurinational State of',
    'Palestine'                         => 'Palestine, State of',
];

function requeterHipolabs($pays) {
    $url = 'http://universities.hipolabs.com/search?country=' . urlencode($pays);

    $reponse = false;

    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5); // evite que la page reste bloquee si l'API est lente
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $reponse = curl_exec($ch);
        curl_close($ch);
    } elseif (ini_get('allow_url_fopen')) {
        $contexte = stream_context_create(['http' => ['timeout' => 5]]);
        $reponse = @file_get_contents($url, false, $contexte);
    }

    if ($reponse === false) {
        return null;
    }

    return json_decode($reponse, true);
}

$CORRESPONDANCES = array_change_key_case($CORRESPONDANCES, CASE_LOWER);

$candidats = [$pays];
$cle = strtolower($pays);
if (isset($CORRESPONDANCES[$cle])) {
    $candidats[] = $CORRESPONDANCES[$cle];
}

$resultats = [];
$paysUtilise = $pays;
foreach ($candidats as $c) {
    $res = requeterHipolabs($c);
    if ($res === null) {
        $resultats = [];
        break;
    }
    if ($res !== []) {
        $resultats = $res;
        $paysUtilise = $c;
        break;
    }
}

$universites = [];
foreach ($resultats as $u) {
    if (isset($u['name']) && $u['name'] !== '') {
        $universites[] = $u['name'];
    }
}
sort($universites);

echo json_encode([
    'pays' => $paysUtilise,
    'universities' => $universites
]);