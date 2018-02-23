<?php
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\Common\EventManager;
use Doctrine\DBAL\Event\Listeners\OracleSessionInit;
use Doctrine\DBAL\Logging\DebugStack;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;

AnnotationRegistry::registerLoader('class_exists');

// 1. Create the cache according to the environment
$cache = DEV_MODE ? new ArrayCache() : new FilesystemCache(BE_PATH . '/cache');

// 2. Create the annotation driver based on its reader
$pathsToEntities = realpath(BE_PATH . '/src');
$reader = new CachedReader(new AnnotationReader(), $cache, DEV_MODE);
$driver = new AnnotationDriver($reader, $pathsToEntities);

// 3. Create the configuration
$config = Setup::createConfiguration(DEV_MODE, BE_PATH . '/cache', $cache);
$config->setMetadataDriverImpl($driver);
$config->setSQLLogger(DEV_MODE ? new DebugStack() : null);

// 4. EventManager for Oracle Session
$eventManager = new EventManager();
$eventManager->addEventSubscriber(new OracleSessionInit());

// 5. Create the entity manager
$entityManager = EntityManager::create([
    'driver' => 'oci8',
    'user' => '',
    'password' => '',
    'host' => '',
    'port' => 12019,
    'dbname' => '',
    'charset' => 'UTF8',
    'persistent' => true,
    'pooled' => false // DRCP NOT ACTIVATED YET !!
], $config, $eventManager);