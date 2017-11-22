<?php
if(empty($argv[1])) die('fail');
$c = $argv[1];

include($c.'.php');
$c = new $c();
$c->run();