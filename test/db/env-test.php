<?php
require_once '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../../.env');
$dotenv->load();
echo $_ENV['DB_HOST'];

?>