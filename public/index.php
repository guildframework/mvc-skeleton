<?php

ini_set('display_errors', 1);
ini_set('memory_limit', '2024M');


use Guild\Mvc\Application;
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Composer autoloading
require getcwd(). '/vendor/autoload.php';
// Retrieve configuration
$appConfig = require getcwd(). '/config/application.config.php';
// Run the application!
$application = new Application($appConfig);
$application->run();