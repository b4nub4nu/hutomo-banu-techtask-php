<?php
/**
 * Created by PhpStorm.
 * User: Malakut Banu Hutomo <banu.hutomo@gmail.com>
 * Date: 2020-04-17
 * Time: 12:37
 */

namespace app\Http\Controllers;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Unauthorized
 *
 * @package app\Http\Controllers
 */
class UnauthorizedController
{

    /**
     * Sends 401
     *
     * @return JsonResponse
     */
    public function send401() : JsonResponse
    {
        return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

}
