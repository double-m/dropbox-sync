<?php

namespace DropboxFolder;

use Dropbox as dbx;

class DropboxClient extends dbx\Client
{
    public function __construct($parameters) {
        $appTokenJson = file_get_contents($parameters['tokenFile']);
        $parse = json_decode($appTokenJson);
        
        parent::__construct($parse->access_token, $parameters['id']);
    }

}