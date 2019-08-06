<?php

require_once 'vendor/autoload.php';


$data = [];

for ($week = 4; $week <= 4; $week++) {

$a = file_get_contents('twdtd-w'.$week.'.txt');

$r = '/^[ ][|]\s+(?P<stars>\d+)\s+\s(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<kills>\d+)[ ][|]\s+(?P<deaths>\d+)\s+[|]/m';

preg_match_all($r, $a, $mat);

foreach ($mat['names'] as $i => $name) {
  $data[$name]['name'] = $name;
  $data[$name]['w' . $week][] = ['k' => $mat['kills'][$i], 'd' => $mat['deaths'][$i]];
 }
}

//var_dump($data); exit;
/*
usort($data , function($a, $b){
return $a['kills'] < $b['kills'];
});
*/


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    
]);

$template = $twig->load('index.html.twig');

echo $template->render(['data' => $data]);
