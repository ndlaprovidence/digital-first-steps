<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__ . "/src"];
$isDevMode = true;

$dbParams = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
];

$config = Setup::createAttributeMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);