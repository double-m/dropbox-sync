<?php

namespace DropboxFolder;

class DropboxFolder
{
    public function getAppInfo()
    {
        return \Dropbox\AppInfo::loadFromJsonFile(APP_INFO_FILE);
    }
}
