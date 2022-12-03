<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require '.lib/Obfuscator.php';
$topicFolders = scandir(__DIR__ . "/Topics");
$topicRunFilePaths = [];
foreach ($topicFolders as $key => $topicFolder) {
    if (in_array($topicFolder, ['.DS_STORE', '.', '..'])) {
        unset($topicFolders[$key]);
        continue;
    }
    $topicRunFilePaths[$topicFolder] = __DIR__ . "/Topics/$topicFolder/run.php";
}
foreach($topicRunFilePaths as $topicName => $topicRunFilePath) {
    $optimizedAppFilePath = __DIR__ . "/Topics/$topicName/Optimized/App";
    $archivedAppDir = __DIR__ . "/Archived/$topicName/";
    if (!file_exists($archivedAppDir)) {
        mkdir($archivedAppDir, 0777, true);
    }
    $archivedAppPath = $archivedAppDir . 'App.php';
    $sData = file_get_contents($optimizedAppFilePath . '.php');
    $base64Data = base64_encode($sData);
    $sData = str_replace(array('<?php', '<?', '?>'), '', $sData); // We strip the open/close PHP tags
    $sObfusationData = new PHPTools\Obfuscator($sData, "Obfuscated Class $topicName/Optimized/App - $base64Data");
    file_put_contents($archivedAppPath, '<?php ' . "\r\n" . $sObfusationData);
}