<?php
function d($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function dd($var) {
    d($var);
    die;
}