<?php
echo '<p>';
echo '<strong>Hostname:</strong> '.gethostname().'<br>';
echo '<strong>Memory usages:</strong> '.convert(memory_get_usage(true)).' <br>';
echo '<strong>REMOTE_ADDR:</strong> '.$_SERVER['REMOTE_ADDR'].' <br>';
echo '</p>';

if (!empty($_GET)) {
	echo '<pre>';
	echo '<strong>$_GET</strong>'.PHP_EOL;
	print_r($_GET);
	echo '</pre>';
}

phpinfo();


function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}