<?php

namespace DropboxFolder;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'DropboxFolder.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'DropboxClient.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

define('APP_INFO_FILE', 'src' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'app-token.json');

$dropboxFolder = new \DropboxFolder\DropboxFolder(REMOTE_PATH, LOCAL_PATH);
$dropboxFolder->initClient('\DropboxFolder\DropboxClient', array(
    'tokenFile' => APP_INFO_FILE,
    'id' => 'MyDbxFolderApp'
));
print_r($dropboxFolder->getMetadata());
