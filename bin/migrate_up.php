<?php

declare(strict_types=1);

use TomasChochola\Template\Mezzio\Bootstrap\Bootstrapper;
use TomasChochola\Template\Mezzio\Database\Migrations;
use TomasChochola\Template\Mezzio\Database\Migrator;

require_once __DIR__ . '/../vendor/autoload.php';

$kernel = Bootstrapper::bootstrap();

$migrator = $kernel->container->get(Migrator::class);
$migrations = $kernel->container->get(Migrations::class);

$migrator->forward($migrations);
