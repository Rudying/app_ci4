<?php

if(!function_exists('generaToken')) {
    function generaToken() 
    {
        return md5(uniqid(mt_rand(), true));
    }
}