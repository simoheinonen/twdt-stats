<?php

require_once 'vendor/autoload.php';

$csv = isset($_GET['csv']);
#$csv = true;
$data = [];

$squads = ['mythril' => 'Pirates', 'beam' => 'Pirates', 'kado' => 'Pirates', '2pacz' => 'Pirates', 'murder' => 'Pirates', 'major crisis' => 'Pirates', 'henry saari' => 'Pirates', 'skyforger' => 'Pirates', 'falconpunch' => 'Pirates', 'lupin' => 'Pirates', 'singer' => 'Pirates', 'kim' => 'Pirates', 'coupe' => 'Pirates', 'mosi' => 'Pirates', 'j-b-inc' => 'Pirates', 'afri' => 'Pirates', 'rodney' => 'Pirates', 'cloth' => 'Pirates', 'beast' => 'Pirates', 'bluff' => 'Pirates', '7roll' => 'Pirates', 'avantgarde' => 'Pirates', 'lasenza' => 'Paddington', 'zidane' => 'Paddington', 'eric clapton' => 'Paddington', 'kentaro' => 'Paddington', 'thix' => 'Paddington', 'heaven' => 'Paddington', 'shayde' => 'Paddington', 'tiny' => 'Paddington', 'spawnisen' => 'Paddington', 'spectacular' => 'Paddington', 'exalt' => 'Paddington', 'midoent' => 'Paddington', 'magnum size' => 'Paddington', 'oder' => 'Paddington', 'tj hazuki' => 'Paddington', 'destruct' => 'Paddington', 'yojimbo^' => 'Paddington', 'scurvy' => 'Paddington', 'dtiss' => 'Paddington', 'missa' => 'Paddington', 'jeffpotatoes' => 'Paddington', 'whitelivesmatter' => 'Paddington', 'caos' => 'Lag & Luck', 'burnt' => 'Lag & Luck', 'trasher' => 'Lag & Luck', 'jamal' => 'Lag & Luck', 'ardour' => 'Lag & Luck', 'olde' => 'Lag & Luck', 'paky dude' => 'Lag & Luck', 'doughnut' => 'Lag & Luck', 'cripple' => 'Lag & Luck', 'mean gene' => 'Lag & Luck', 'mr. homo' => 'Lag & Luck', 'afghan' => 'Lag & Luck', 'let' => 'Lag & Luck', 'spacedust' => 'Lag & Luck', 'wiibimbo' => 'Lag & Luck', 'zeebu' => 'Lag & Luck', 'snoopie' => 'Lag & Luck', 'pure_luck' => 'Lag & Luck', 'seriel killer' => 'Lag & Luck', 'mercede$' => 'Lag & Luck', 'blt_12' => 'Lag & Luck', 'at' => 'Lag & Luck', 'skuff' => 'Lag & Luck', 'turban' => 'Mist', 'flew' => 'Mist', 'tripin' => 'Mist', 'pineapple expres' => 'Mist', 'jones' => 'Mist', 'mikkiz' => 'Mist', 'maito_chi' => 'Mist', 'violence' => 'Mist', 'amnesti' => 'Mist', 'biet' => 'Mist', 'dutch baser' => 'Mist', 'tok' => 'Mist', 'rampage' => 'Mist', 'fram' => 'Mist', 'draft' => 'Mist', 'jackiechan>' => 'Mist', 'glyde' => 'Mist', 'public assassin' => 'Mist', 'bosshawk' => 'Mist', 'jizzron phillips' => 'Mist', 'yoast' => 'Mist', 'phreek' => 'Mist', 'okyo' => 'Gryffindor', 'dak' => 'Gryffindor', 'casket' => 'Gryffindor', 'ogron' => 'Gryffindor', 'nowon' => 'Gryffindor', 'rasaq' => 'Gryffindor', 'commodo' => 'Gryffindor', 'davy' => 'Gryffindor', 'rab' => 'Gryffindor', 'holy ship' => 'Gryffindor', 'yeh' => 'Gryffindor', 'kira_yamato~' => 'Gryffindor', 'wvlf' => 'Gryffindor', 'rtallen' => 'Gryffindor', 'paradise' => 'Gryffindor', 'ellis d.' => 'Gryffindor', 'markmrw' => 'Gryffindor', 'banks' => 'Gryffindor', 'terminator 17.5' => 'Gryffindor', 'anonym' => 'Gryffindor', 'legacy' => 'Gryffindor', 'shaw' => 'Gryffindor', 'racka' => 'WIN OR DIE', 'geio' => 'WIN OR DIE', 'cape' => 'WIN OR DIE', 'dreamwin' => 'WIN OR DIE', 'poseidon' => 'WIN OR DIE', 'skatarius' => 'WIN OR DIE', 'jurassic' => 'WIN OR DIE', 'bitsaver' => 'WIN OR DIE', 'sakke' => 'WIN OR DIE', 'jessup' => 'WIN OR DIE', 'wirah' => 'WIN OR DIE', 'uprise' => 'WIN OR DIE', 'king baba' => 'WIN OR DIE', 'children' => 'WIN OR DIE', 'rozay' => 'WIN OR DIE', 'nipple nibbler' => 'WIN OR DIE', 'joeses' => 'WIN OR DIE', 'sea bass' => 'WIN OR DIE', 'unlimited' => 'WIN OR DIE', 'davinci' => 'WIN OR DIE', 'topshot' => 'WIN OR DIE', 'wavy run' => 'WIN OR DIE', 'tripacan' => 'WIN OR DIE', 'vys' => 'Fish', 'attacks' => 'Fish', 'morph' => 'Fish', 'myollnir' => 'Fish', 'bacon' => 'Fish', 'zizzo' => 'Fish', 'undercut' => 'Fish', 'aprix' => 'Fish', 'raples' => 'Fish', 'maketso' => 'Fish', 'bram' => 'Fish', 'inmate' => 'Fish', 'greenman' => 'Fish', 'voth' => 'Fish', 'sprackle' => 'Fish', 'erias' => 'Fish', 'melanoma' => 'Fish', 'ixt' => 'Fish', 'swagger' => 'Fish', 'hellrazor' => 'Fish', 'jebass' => 'Fish', 'clay' => 'Fish', 'iron survivor' => 'Haze', 'lockdown' => 'Haze', 'zapata' => 'Haze', 'ra' => 'Haze', 'delectable' => 'Haze', 'hulk' => 'Haze', 'wbm' => 'Haze', 'hellkite' => 'Haze', 'rough' => 'Haze', 'cuckold' => 'Haze', 'thrill' => 'Haze', 'kovalchuk' => 'Haze', 'ixador' => 'Haze', 'ridge racer' => 'Haze', 'big sean' => 'Haze', 'spookedone' => 'Haze', 'rucci' => 'Haze', 'felix_da_kat' => 'Haze', 'willby' => 'Haze', 'poni' => 'Haze', 'bige' => 'Haze', 'x' => 'Haze',
'harder' => 'Mist',
];

$gamecount = [];

for ($week = 1; $week <= 4; $week++) {

$a = file_get_contents('twdtd-w'.$week.'.txt');

$week1r = '/^[ ][|]\s+(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<stars>\d+)[ ][|]\s+(?P<kills>\d+)\s+[|]\s+(?P<deaths>\d+)\s+[|]/m';

$r = '/^[ ][|]\s+(?P<stars>\d+)\s+(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<kills>\d+)[ ][|]\s+(?P<deaths>\d+)\s+[|]/m';

if ($week === 1) {
preg_match_all($week1r, $a, $mat);
} else {
preg_match_all($r, $a, $mat);
}
foreach ($mat['names'] as $i => $name) {
 if (stristr($name, '/') !== false) {
continue;
}

if ($name === 'pineapple express') {
$name = 'pineapple expres';
}


  $data[$name]['name'] = $name;
  $data[$name]['w' . $week][] = ['k' => $mat['kills'][$i], 'd' => $mat['deaths'][$i]];

@$gamecount[$name]++;

$foo = [
  'name' => $name,
  'stars' => $mat['stars'][$i],
  'k' => $mat['kills'][$i],
  'd' => $mat['deaths'][$i],
  'team' => $squads[strtolower($name)],
  'game' => $gamecount[$name],
];

if ($csv) {
echo implode(',', $foo) . PHP_EOL;

}
 }
}
if ($csv) {
exit;
}


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    
]);

$template = $twig->load('index.html.twig');

echo $template->render(['data' => $data]);

