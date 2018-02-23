<?php

/**
 * This file is used by doctrine command line.
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

define('BE_PATH', dirname(__DIR__));
define('DEV_MODE', true);

chdir(BE_PATH);

require 'vendor/autoload.php';
require 'bootstrap.php';

/*@var $entityManager Doctrine\ORM\EntityManagerInterface */

// Needed only for orm:covert-mapping purpose
$filter_include = require 'include.tables.php';
$include_reg = '/^(' . implode('|', $filter_include) . ').*$/';
$entityManager->getConfiguration()->setFilterSchemaAssetsExpression($include_reg);

return ConsoleRunner::createHelperSet($entityManager);