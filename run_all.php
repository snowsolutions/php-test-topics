<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$topicFolders = scandir(__DIR__ . "/Topics");
$topicRunFilePaths = [];
echo "Available topics:\n";
foreach ($topicFolders as $key => $topicFolder) {
    if (in_array($topicFolder, ['.DS_STORE', '.', '..'])) {
        unset($topicFolders[$key]);
        continue;
    }
    $topicRunFilePaths[$topicFolder] = __DIR__ . "/Topics/$topicFolder/run.php";
    echo "- $topicFolder\n";
}
foreach($topicRunFilePaths as $topicName => $topicRunFilePath) {
    $originalOutput = '';
    $optimizedOutput = '';
    echo "--------------------\n";
    echo "Topic: $topicName\n";
    echo "+ Original\n";
    $originalOutput = shell_exec("php $topicRunFilePath original");
    echo $originalOutput;
    echo "+ Optimized\n";
    $optimizedOutput = shell_exec("php $topicRunFilePath optimized");
    if (empty($optimizedOutput)) {
        echo "[You did not solve the topic yet]\n";
    } else {
        if (str_contains($optimizedOutput,"error")) {
            echo "[Your optimized code has some error please run single topic test for specific error log]\n";
        } else {
            echo $optimizedOutput;
        }
    }
    echo "--------------------\n";
}

