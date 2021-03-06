<?php
/**
 * Created by PhpStorm.
 * User: Malakut Banu Hutomo <banu.hutomo@gmail.com>
 * Date: 2020-04-17
 */

use app\Http\Controllers\LunchController;
use app\Http\Controllers\UnauthorizedController;

require_once __DIR__ . '/../bootstrap/app.php';

/**
 *
 * POST lunch/{name}
 * @see UserController::register
 * @access public
 *
 * @param string $name Name of the user      required
 * @param string $email E-mail of the user    required
 * @param string $password Password of the user  required
 * @param string $locale Locale of the user    optional
 *
 */
$app->post('/lunch', LunchController::class . '::lunch');


$restMethods = [
  'get',
  'post',
  'put',
  'patch',
  'delete'
];

foreach ($restMethods as $method) {
    if (method_exists($app, $method)) {
        $app->{$method}('/', UnauthorizedController::class . '::send401');
    }
}


