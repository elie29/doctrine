<?php

use App\Demo\Service\DemoServiceCampagne;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Application front controller
 */
define('BE_PATH', dirname(__DIR__));
define('DEV_MODE', true);

chdir(BE_PATH);

require 'vendor/autoload.php';
require 'config/bootstrap.php';

call_user_func(function(EntityManagerInterface $em) {

    $demo = new DemoServiceCampagne($em);
    dump($demo->getCampagne(221), $demo->getCampagne(1258));
    dump($demo->getActifCampagneOrderByCategorie());
    dump($demo->getActifCampagneOrderByMagicCall());

}, $entityManager);

// ------------------------- LOG ALL QUERIES ---------------------
dump($entityManager->getConfiguration()->getSQLLogger()->queries);
