<?php
/**
 * [test_topic] Autoload Mechanism
 * [test_topic_req] Requirements
 * [test_topic_req] Implement autoload mechanism so we won't need to 
 * [test_topic_req] require php files when we need to use a class
 * 
 * [test_topic_scope] Scope to apply: under Optmized folder only
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (array_key_exists(1, $argv)) {
    if ($argv[1] === "original") {
        require "Original/App.php";
        (new Original\App());
    }
    if ($argv[1] === "optimized") {
        require "Optimized/App.php";
        (new Optimized\App());
    }
} else {
    echo "You need to choose run mode";
}
