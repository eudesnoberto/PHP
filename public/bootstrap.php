<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', true);

require '../vendor/autoload.php';



$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();