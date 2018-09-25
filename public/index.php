<?php 

chdir(__DIR__ . '/..');

require 'vendor/autoload.php';

$conf = parse_ini_file('config/config.ini', true);

$address = $conf['mgc']['gateway_address'];
$port = $conf['mgc']['gateway_port'];
$user = $conf['mgc']['gateway_user'];
$pass = $conf['mgc']['gateway_pass'];

$uri = "http://$address:$port";

echo $uri;
