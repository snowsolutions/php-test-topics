<?php
/**
 * [test_topic] Cache mechanism
 * [test_topic_req] Requirements
 * [test_topic_req] There are duplicated lines in the data.txt file
 * [test_topic_req] Try to implement a cache mechanism to optimize
 * [test_topic_req] the process
 * 
 * [test_topic_scope] Scope to apply: under Optmized folder only
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('data_path', __DIR__ . '/data.txt');
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
