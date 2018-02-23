<?php

/**
 * Application front controller
 */
define('BE_PATH', dirname(__DIR__));
define('DEV_MODE', true);

chdir(BE_PATH);

require 'vendor/autoload.php';
require 'config/bootstrap.php';

dump($entityManager);