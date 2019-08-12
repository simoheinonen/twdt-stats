<?php

require_once 'vendor/autoload.php';

$squads = ['mythril' => 'Pirates', 'beam' => 'Pirates', 'kado' => 'Pirates', '2pacz' => 'Pirates', 'murder' => 'Pirates', 'major crisis' => 'Pirates', 'henry saari' => 'Pirates', 'skyforger' => 'Pirates', 'falconpunch' => 'Pirates', 'lupin' => 'Pirates', 'singer' => 'Pirates', 'kim' => 'Pirates', 'coupe' => 'Pirates', 'mosi' => 'Pirates', 'j-b-inc' => 'Pirates', 'afri' => 'Pirates', 'rodney' => 'Pirates', 'cloth' => 'Pirates', 'beast' => 'Pirates', 'bluff' => 'Pirates', '7roll' => 'Pirates', 'avantgarde' => 'Pirates', 'lasenza' => 'Paddington', 'zidane' => 'Paddington', 'eric clapton' => 'Paddington', 'kentaro' => 'Paddington', 'thix' => 'Paddington', 'heaven' => 'Paddington', 'shayde' => 'Paddington', 'tiny' => 'Paddington', 'spawnisen' => 'Paddington', 'spectacular' => 'Paddington', 'exalt' => 'Paddington', 'midoent' => 'Paddington', 'magnum size' => 'Paddington', 'oder' => 'Paddington', 'tj hazuki' => 'Paddington', 'destruct' => 'Paddington', 'yojimbo^' => 'Paddington', 'scurvy' => 'Paddington', 'dtiss' => 'Paddington', 'missa' => 'Paddington', 'jeffpotatoes' => 'Paddington', 'whitelivesmatter' => 'Paddington', 'caos' => 'Lag & Luck', 'burnt' => 'Lag & Luck', 'trasher' => 'Lag & Luck', 'jamal' => 'Lag & Luck', 'ardour' => 'Lag & Luck', 'olde' => 'Lag & Luck', 'paky dude' => 'Lag & Luck', 'doughnut' => 'Lag & Luck', 'cripple' => 'Lag & Luck', 'mean gene' => 'Lag & Luck', 'mr. homo' => 'Lag & Luck', 'afghan' => 'Lag & Luck', 'let' => 'Lag & Luck', 'spacedust' => 'Lag & Luck', 'wiibimbo' => 'Lag & Luck', 'zeebu' => 'Lag & Luck', 'snoopie' => 'Lag & Luck', 'pure_luck' => 'Lag & Luck', 'seriel killer' => 'Lag & Luck', 'mercede$' => 'Lag & Luck', 'blt_12' => 'Lag & Luck', 'at' => 'Lag & Luck', 'skuff' => 'Lag & Luck', 'turban' => 'Mist', 'flew' => 'Mist', 'tripin' => 'Mist', 'pineapple expres' => 'Mist', 'jones' => 'Mist', 'mikkiz' => 'Mist', 'maito_chi' => 'Mist', 'violence' => 'Mist', 'amnesti' => 'Mist', 'biet' => 'Mist', 'dutch baser' => 'Mist', 'tok' => 'Mist', 'rampage' => 'Mist', 'fram' => 'Mist', 'draft' => 'Mist', 'jackiechan>' => 'Mist', 'glyde' => 'Mist', 'public assassin' => 'Mist', 'bosshawk' => 'Mist', 'jizzron phillips' => 'Mist', 'yoast' => 'Mist', 'phreek' => 'Mist', 'okyo' => 'Gryffindor', 'dak' => 'Gryffindor', 'casket' => 'Gryffindor', 'ogron' => 'Gryffindor', 'nowon' => 'Gryffindor', 'rasaq' => 'Gryffindor', 'commodo' => 'Gryffindor', 'davy' => 'Gryffindor', 'rab' => 'Gryffindor', 'holy ship' => 'Gryffindor', 'yeh' => 'Gryffindor', 'kira_yamato~' => 'Gryffindor', 'wvlf' => 'Gryffindor', 'rtallen' => 'Gryffindor', 'paradise' => 'Gryffindor', 'ellis d.' => 'Gryffindor', 'markmrw' => 'Gryffindor', 'banks' => 'Gryffindor', 'terminator 17.5' => 'Gryffindor', 'anonym' => 'Gryffindor', 'legacy' => 'Gryffindor', 'shaw' => 'Gryffindor', 'racka' => 'WIN OR DIE', 'geio' => 'WIN OR DIE', 'cape' => 'WIN OR DIE', 'dreamwin' => 'WIN OR DIE', 'poseidon' => 'WIN OR DIE', 'skatarius' => 'WIN OR DIE', 'jurassic' => 'WIN OR DIE', 'bitsaver' => 'WIN OR DIE', 'sakke' => 'WIN OR DIE', 'jessup' => 'WIN OR DIE', 'wirah' => 'WIN OR DIE', 'uprise' => 'WIN OR DIE', 'king baba' => 'WIN OR DIE', 'children' => 'WIN OR DIE', 'rozay' => 'WIN OR DIE', 'nipple nibbler' => 'WIN OR DIE', 'joeses' => 'WIN OR DIE', 'sea bass' => 'WIN OR DIE', 'unlimited' => 'WIN OR DIE', 'davinci' => 'WIN OR DIE', 'topshot' => 'WIN OR DIE', 'wavy run' => 'WIN OR DIE', 'tripacan' => 'WIN OR DIE', 'vys' => 'Fish', 'attacks' => 'Fish', 'morph' => 'Fish', 'myollnir' => 'Fish', 'bacon' => 'Fish', 'zizzo' => 'Fish', 'undercut' => 'Fish', 'aprix' => 'Fish', 'raples' => 'Fish', 'maketso' => 'Fish', 'bram' => 'Fish', 'inmate' => 'Fish', 'greenman' => 'Fish', 'voth' => 'Fish', 'sprackle' => 'Fish', 'erias' => 'Fish', 'melanoma' => 'Fish', 'ixt' => 'Fish', 'swagger' => 'Fish', 'hellrazor' => 'Fish', 'jebass' => 'Fish', 'clay' => 'Fish', 'iron survivor' => 'Haze', 'lockdown' => 'Haze', 'zapata' => 'Haze', 'ra' => 'Haze', 'delectable' => 'Haze', 'hulk' => 'Haze', 'wbm' => 'Haze', 'hellkite' => 'Haze', 'rough' => 'Haze', 'cuckold' => 'Haze', 'thrill' => 'Haze', 'kovalchuk' => 'Haze', 'ixador' => 'Haze', 'ridge racer' => 'Haze', 'big sean' => 'Haze', 'spookedone' => 'Haze', 'rucci' => 'Haze', 'felix_da_kat' => 'Haze', 'willby' => 'Haze', 'poni' => 'Haze', 'bige' => 'Haze', 'x' => 'Haze',
    'harder' => 'Mist',
    'poid' => 'Mist',
];

$aliases = [
    'pineapple express' => 'pineapple expres',
];

$leagues = ['twdtd', 'twdtj'];

foreach ($leagues as $league) {
    $content = file_get_contents($league . '.txt');
    $matches = preg_split("/\n\n/", $content);

    $gamesPlayed = [];

    $week = 1;

    foreach ($matches as $i => $match) {
        if ($i !== 0 && $i % 8 === 0) {
            $week++;
        }

        if ($week === 1) {
            $regex = '/^[ ][|]\s+(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<stars>\d+)[ ][|]\s+(?P<kills>\d+)\s+[|]\s+(?P<deaths>\d+)\s+[|]/m';
        } else {
            $regex = '/^[ ][|]\s+(?P<stars>\d+)\s+(?P<names>.*?)\s+(<MVP>){0,}\s+(?P<kills>\d+)[ ][|]\s+(?P<deaths>\d+)\s+[|]/m';
        }

        foreach (explode("\n", $match)  as $index => $row) {
            if ($index === 0) {
                preg_match('/[[](?P<league>.*)[]]\s+(?P<home>.*)[ ]vs[.][ ](?P<away>.*?(?=\s{2}))\s+(?P<home_score>\d+) - (?P<away_score>\d+)/', $row, $matches);
                $home = $matches['home'];
                $away = $matches['away'];

                @$gamesPlayed[$home]++;
                @$gamesPlayed[$away]++;

                $league = $matches['league'];
                $league = str_replace(['1', '2', '3', '4', '5'], '', $league);

                continue;
            }

            preg_match($regex, $row, $matches);

            if (!$matches) {
                continue;
            }

            $pilot = str_replace(array_keys($aliases), array_values($aliases), $matches['names']);

            if (stristr($pilot, '/') !== false) {
                continue;
            }

            $team = $squads[strtolower($pilot)];

            if (isset($gamesPlayed[$team])) { // trades complicate things so default to prev game
                $game = $gamesPlayed[$team];
            }

            $data = [
                'pilot' => $pilot,
                'stars' => (int) $matches['stars'],
                'kills' => (int) $matches['kills'],
                'deaths' => (int) $matches['deaths'],
                'team' => $team,
                'game' => $game,
                'league' => $league,
                'week' => $week,
            ];

            echo implode(',', $data) . PHP_EOL;
        }
    }

}
