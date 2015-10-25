<?php

namespace DropboxFolder;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/DropboxFolder.php';
require __DIR__ . '/config/config.php';

define('APP_INFO_FILE', 'config' . DIRECTORY_SEPARATOR . 'app-token.json');

$dropboxFolder = new \DropboxFolder\DropboxFolder(REMOTE_PATH, LOCAL_PATH, APP_INFO_FILE, 'MMDbxFolderApp');
print_r($dropboxFolder->getMetadata());
