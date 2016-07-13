<?php
if (!function_exists('json_print')) {
    function json_print($value)
    {
        return json_encode($value, JSON_PRETTY_PRINT);
    }
}