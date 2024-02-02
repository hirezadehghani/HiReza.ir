<?php
$target_folder = $_SERVER['DOCUMENT_ROOT'] . '/../../../main-app/storage/app/public'; //go one back from public_html
$files_in_folder = scandir($target_folder); 
print_r($files_in_folder);
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
symlink($target_folder, $linkFolder);
echo 'Symlink  @ Cpanel type virtual host completed (var_dump to be sure)';
var_dump($linkFolder);
