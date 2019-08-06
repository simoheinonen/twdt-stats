<?php

require_once 'vendor/autoload.php';

$a = file_get_contents('twdtd-w4.txt');

$r = '/^[ ][|]\s+(?P<stars>\d+)\s+\s(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<kills>\d+)[ ][|]\s+(?P<deaths>\d+)\s+[|]/m';

preg_match_all($r, $a, $mat);

$data = [];

foreach ($mat['names'] as $i => $name) {
  $data[$name]['name'] = $name;
  @$data[$name]['kills'] += $mat['kills'][$i];
  @$data[$name]['deaths'] += $mat['deaths'][$i];
}
usort($data , function($a, $b){
return $a['kills'] < $b['kills'];
});



$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    
]);

$template = $twig->load('index.html.twig');

echo $template->render(['data' => $data]);
