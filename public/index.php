<?php
use App\Demo\Entity\TCampagne;

/**
 * Application front controller
 */
define('BE_PATH', dirname(__DIR__));
define('DEV_MODE', true);

chdir(BE_PATH);

require 'vendor/autoload.php';
require 'config/bootstrap.php';

$campagne = $entityManager->getRepository(TCampagne::class);
dump($campagne->find(221), $campagne->find(1542));

// ------------------------- LOG ALL QUERIES ---------------------
dump($entityManager->getConfiguration()->getSQLLogger()->queries);
