<?php
function addClasses($path) {
    $scandir = scandir($_SERVER["DOCUMENT_ROOT"].$path);
    if (empty($scandir))
        return;
    foreach ($scandir as $nameFile ) {
        if (substr($nameFile,-4) <> '.php') {
            continue;
        }
        require_once $_SERVER["DOCUMENT_ROOT"].$path . '/' . $nameFile;
    }
}

addClasses('/wp-content/themes/wedoMain/classes');