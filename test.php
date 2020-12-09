<?php
include __DIR__.'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\HttpHandler;
$log = new Logger('test');
            $handler = new HttpHandler(
                'https://devlgr.ovh/testlog/message.php',
                'zaFk96QILg1quN9T5nVOkh7VzKeTeZ8V','log_chomette'
            );
            $log->pushHandler($handler);
            $log->debug('debug');
            echo 'ok';