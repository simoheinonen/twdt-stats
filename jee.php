<?php

$a = <<< AAA
[TWDTD]  Paddington vs. Mist               32 - 50                       04 Aug 2019 19:16:40
 ,-D*-------------------,-------K----D---R1-R2-R3-R4---Rtg--LO---Note------------------Time--.
 | 40 Paddington       /       31 | 50 |  8 16  6  1 | 370 | 0 | Lose (-18)            11:07 |
 |--------------------'           |    |             |     |   |                             |
 |  8  Eric Clapton             5 | 10 |  1  3  1  0 |  68 | 0 | KO > turban            9:07 |
 |  7  Exalt                    3 | 10 |  1  2  0  0 |  61 | 0 | KO > Tripin            9:30 |
 | 10  LaSenza                 13 | 10 |  4  7  2  0 | 102 | 0 | KO > yoast            11:07 |
 |  7  Tiny                     4 | 10 |  1  3  0  0 |  63 | 0 | KO > Tripin            8:22 |
 |  8  zidane                   6 | 10 |  1  1  3  1 |  76 | 0 | KO > yoast             6:31 |
 +----------------------,---------+----+-------------+-----+---+-----------------------------+
 | 40 Mist             /       50 | 32 | 16 25  9  0 | 606 | 1 | Win (+18)             11:07 |
 |--------------------'           |    |             |     |   |                             |
 |  8  Jones                    9 |  6 |  2  4  3  0 | 110 | 0 |                             |
 |  8  pineapple expres        12 |  7 |  1  9  2  0 | 119 | 0 |                             |
 |  9  Tripin                   7 |  9 |  4  1  2  0 | 113 | 1 |                             |
 |  9  turban            <MVP> 15 |  6 |  6  8  1  0 | 140 | 0 |                             |
 |  6  yoast                    7 |  4 |  3  3  1  0 | 124 | 0 |                             |
 `-----------------------------------------------------------------I=IN---O=OUT---#=DEATHS---'
AAA;

$r = '/^[ ][|]\s+(?P<stars>\d+)\s+\s(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<kills>\d+)[ ][|]\s+(?P<deaths>\d+)\s+[|]/m';

preg_match_all($r, $a, $mat);

$data = [];

foreach ($mat['names'] as $i => $name) {
 $d = [
 'name' => $name,
 'kills' => $mat['kills'][$i],
 'deaths' => $mat['deaths'][$i],
];

echo implode("\t", $d) . PHP_EOL;
}

/* prints

Eric Clapton    5       10
Exalt   3       10
LaSenza 13      10
Tiny    4       10
zidane  6       10
Jones   9       6
pineapple expres        12      7
Tripin  7       9
turban  15      6
yoast   7       4

*/
