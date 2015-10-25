<?php

namespace DropboxFolder;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/DropboxFolder.php';
require __DIR__ . '/config/config.php';

define('APP_INFO_FILE', 'config' . DIRECTORY_SEPARATOR . 'app-info.json');

$dropboxFolder = new \DropboxFolder\DropboxFolder();
print_r($dropboxFolder->getAppInfo());