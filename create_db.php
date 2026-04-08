<?php
require_once "bootstrap.php";

use Doctrine\ORM\Tools\SchemaTool;

$tool = new SchemaTool($entityManager);
$classes = [$entityManager->getClassMetadata(App\Task::class)];
$tool->createSchema($classes);

echo "Base de données et tables créées !";