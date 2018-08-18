<?php
include 'phpQuery.php';

$url=file_get_contents('http://php.net/manual/en/');

$phpq=phpQuery::newDocument($url);

$exist = $phpq->find('.chunklist');

echo $exist;

?>
