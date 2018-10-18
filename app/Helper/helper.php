<?php

if (!function_exists('criptografa')) {
    function criptografa($login, $passwd)
    {
        return base64_encode(md5($login.$passwd, true));
    }
}