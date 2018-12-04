<?php
function format($string) {
    $value = trim($string);
    $value = addslashes($value);
    return $value;
}
?>