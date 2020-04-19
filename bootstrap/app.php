<?php
/**
 * Created by PhpStorm.
 * User: Malakut Banu Hutomo <banu.hutomo@gmail.com>
 * Date: 2020-04-17
 */

define( 'ROOT', __DIR__ . '/../' );

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
define('APP_ENV','production');

if (APP_ENV !== 'production') {
    $app[ 'debug' ] = true;
}

$app[ 'twitter' ] = require_once __DIR__ . '/../config/twitter.php';

require_once __DIR__ . '/../app/routes.php';

return $app;