<?php

use App\Demo\Service\DemoServiceCampagne;
use App\Demo\Service\DemoServiceCompetence;
use App\Demo\Service\DemoServiceEmail;
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

    dump('DemoServiceCampagne');
    $demo = new DemoServiceCampagne($em);
    dump($demo->getCampagne(221), $demo->getCampagne(1258));
    dump($demo->getActifCampagneOrderByCategorie());
    dump($demo->getActifCampagneOrderByMagicCall());
    dump($demo->save('Mit elam harot'));

    dump('DemoServiceCompetence');
    $demo = new DemoServiceCompetence($em);
    dump($demo->saveRandomMatriculeDescription('00010273', uniqid()));
    dump($demo->save('Lorem ipsum dolores', 'Dalat erom kinet'));

    dump('DemoServiceEmail');
    $demo = new DemoServiceEmail($em);
    dump($demo->save(158, 0, 'fr', 'Lorem metar engriv'));

}, $entityManager);

// ------------------------- LOG ALL QUERIES ---------------------
dump($entityManager->getConfiguration()->getSQLLogger()->queries);
