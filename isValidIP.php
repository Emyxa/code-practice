<?php

/**
 * My way
 */
function isValidIP(string $str): bool
{
    $components = explode(".", $str);

    if (count($components) !== 4) {
        return false;
    }
    foreach ($components as $component) {

        if (!is_numeric($component)) {
            return false;
        }

        if (isLeadingZero($component)) {
            return false;
        }

        if (isNotInRange($component)) {
            return false;
        }
    }

    return true;
}

function isLeadingZero($component)
{
    if ((int)$component > 0 && substr($component, 0, 1) == 0) {
        return true;
    }
}

function isNotInRange($component)
{
    if ($component < 0 || $component > 255) {
        return true;
    }
}

var_dump(isValidIP('0.0.0.0'));
var_dump(isValidIP('123.456.789.0'));

/**
 * Easy PHP way
 */
function isValidIPDefault(string $str): bool
{
    return filter_var($str, FILTER_VALIDATE_IP);
}
var_dump(isValidIPDefault('0.0.0.0'));
var_dump(isValidIPDefault('123.456.789.0'));