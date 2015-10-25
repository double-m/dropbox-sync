# Dropbox Sync

Synchronize a local folder with a remote folder of a Dropbox account.

## Status

Not yet functioning - this is a work in progress.

## Usage

### Installation

```
$ cd /path/to/dropbox-sync
$ composer install
```

Complete the OAuth 2 authorization flow to get the token (see [here](https://www.dropbox.com/developers-v1/core/start/php)), then configure your app using every `.dist` file in `config/`.

### First start

```
$ time php app.php
```

### Schedule

I'll use the `cron` service.

