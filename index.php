<?php

require_once 'vendor/autoload.php';


$data = [];

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
  $data[$name]['name'] = $name;
  $data[$name]['w' . $week][] = ['k' => $mat['kills'][$i], 'd' => $mat['deaths'][$i]];
 }
}


// lol
foreach ($data as $name => $da) {
 if (stristr($name, '/') !== false) {
unset($data[$name]);
}
}



$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    
]);

$template = $twig->load('index.html.twig');

echo $template->render(['data' => $data]);
