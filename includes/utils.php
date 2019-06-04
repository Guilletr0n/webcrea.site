<?php

function isNotEmpty($input) {
    $test = filter_var($input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if ($test !== false) {
        return $test !== '';
    }
    return false;
}

function isEmail($input) {
    $test = filter_var($input, FILTER_SANITIZE_EMAIL);
    if ($test !== false) {
        return filter_var($test, FILTER_VALIDATE_EMAIL) !== false;
    }
}

function isPhone($input) {
    return preg_match('/^([+][1-9]{2}|0)[1-9][0-9]{8}$/', $input) === 1;
}

function getPageName() {
    return str_replace('.php', '', basename($_SERVER['PHP_SELF']));
}

function isCurrentPage($test) {
    return $test === getPageName();
}
