<?php
include __DIR__.'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\HttpHandler;
$log = new Logger('test');
            $handler = new HttpHandler(
                'test.com',
                'x23455'
            );
            $log->pushHandler($handler);
            $log->debug('debug');