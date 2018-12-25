<?php
require_once 'classes/App.php';
App::init();

function d($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function dd($var) {
    d($var);
    die;
}