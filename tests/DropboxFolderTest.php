<?php

namespace DropboxFolder;

class DropboxFolderTest extends \PHPUnit_Framework_TestCase
{
    private $dropboxFolder;
    
    public function setUp()
    {
        $this->dropboxFolder = new \DropboxFolder\DropboxFolder(REMOTE_PATH, LOCAL_PATH);
        $this->client = $this->dropboxFolder->initClient('\DropboxFolderTest\FakeClient');
    }
    
    public function testFakeClient()
    {
        $metadata = $this->dropboxFolder->getMetadata();
        $this->assertArrayHasKey('modified', $metadata);
        $this->assertArrayHasKey('is_dir', $metadata);
    }
    
}
