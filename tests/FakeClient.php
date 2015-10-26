<?php

namespace DropboxFolderTest;

class FakeClient
{
    public function getMetadataWithChildren()
    {
        return array(
            'read_only' => null,
            'hash' => '1234567890abcdefghijklmnopqrstuv',
            'revision' => 12345,
            'bytes' => 0,
            'thumb_exists' => null,
            'rev' => '123abc456cde',
            'modified' => 'Sun, 25 Oct 2015 22:58:17 +0000',
            'size' => '0 bytes',
            'path' => '/private/test-dir',
            'is_dir' => 1,
            'modifier' => null,
            'root' => 'dropbox',
            'contents' => array(
                '0' => array(
                        'rev' => '1a2b3c4d5e6f',
                        'thumb_exists' => null,
                        'path' => '/private/test-dir/example.txt',
                        'is_dir' => null,
                        'client_mtime' => 'Sun, 25 Oct 2015 22:58:30 +0000',
                        'icon' => 'page_white_text',
                        'read_only' => null,
                        'modifier' => null,
                        'bytes' => 205,
                        'modified' => 'Sun, 25 Oct 2015 22:58:30 +0000',
                        'size' => '205 bytes',
                        'root' => 'dropbox',
                        'mime_type' => 'text/plain',
                        'revision' => 13579
                    )
                ),
            'icon' => 'folder'
        );
    }
}
