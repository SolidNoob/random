<?php

require 'vendor/autoload.php';


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('test');
$log->pushHandler(new StreamHandler('mylog.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

echo 'Hello World<br/>';

include 'feature01.php';

echo '<br/>This is master<br/>';


echo "<hr/>";

echo 'This is the feature02';

include "feature03.php";