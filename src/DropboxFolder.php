<?php

namespace DropboxFolder;

class DropboxFolder
{
    private $localPath;
    private $remotePath;
    private $client;

    public function __construct($remotePath, $localPath)
    {
        $this->remotePath = $remotePath;
        $this->localPath = $localPath;
    }

    public function initClient($clientClass, $parameters=array())
    {
        $this->client = new $clientClass($parameters);
    }

    public function getAccountInfo()
    {
        return $this->client->getAccountInfo();
    }
    
    public function getMetadata()
    {
        try {
            $metadata = $this->client->getMetadataWithChildren($this->remotePath);
            return $metadata;
        } catch (Dropbox\Exception $e) {
            echo 'Caught Dropbox Exception: ', $e->getMessage(), PHP_EOL;
            return false;
        }
    }
}
