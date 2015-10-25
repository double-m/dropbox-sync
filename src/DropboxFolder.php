<?php

namespace DropboxFolder;
use \Dropbox as dbx;

class DropboxFolder
{
    private $clientId;
    private $localPath;
    private $remotePath;
    private $dbxClient;

    public function __construct($remotePath, $localPath, $appTokenFile, $clientId='PHP-Example/1.0')
    {
        $this->remotePath = $remotePath;
        $this->localPath = $localPath;
        $this->clientId = $clientId;
        
        $this->init($appTokenFile);
    }

    private function init($appTokenFile)
    {
        $appTokenJson = file_get_contents($appTokenFile);
        $parse = json_decode($appTokenJson);
        $this->dbxClient = new dbx\Client($parse->access_token, $this->clientId);
    }

    public function getAccountInfo()
    {
        return $this->dbxClient->getAccountInfo();
    }
    
    public function getMetadata()
    {
        try {
            $metadata = $this->dbxClient->getMetadataWithChildren($this->remotePath);
            return $metadata;
        } catch (Dropbox\Exception $e) {
            echo 'Caught Dropbox Exception: ', $e->getMessage(), PHP_EOL;
            return false;
        }
    }
}
