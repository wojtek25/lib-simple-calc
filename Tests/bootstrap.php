<?php

spl_autoload_register(function ($class) {

    /*
     * Load the file 'SimpleCalc.php', when necessary.
     */
    if ($class === 'Gajdaw\TddExamples\SimpleCalc\SimpleCalc') {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'SimpleCalc.php';
    }

});
