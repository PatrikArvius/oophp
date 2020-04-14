<?php
/**
 * Set error reporting settings
 */
error_reporting(-1); //Reports all type of errors
ini_set("display_errors", 1); //Display all errors

/**
 * Exception handler
 */
set_exception_handler(function ($e) {
    echo "<p>Anax: Uncaught exception:</p><p>Line "
    . $e->getLine()
    . "in file "
    . $e->getFile()
    . "</p><p><code>"
    . get_class($e)
    . "</code></p><p>"
    . $e->getMessage()
    . "</p><p>Code: "
    . $e->getCode()
    . "</p><pre>"
    . $e->getTraceAsString()
    . "</pre>";
});