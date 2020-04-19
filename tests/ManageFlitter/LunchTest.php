<?php
/**
 * Created by PhpStorm.
 * User: Malakut Banu Hutomo <banu.hutomo@gmail.com>
 * Date: 2020-04-17
 */

namespace ManageFlitter\Tests;

use app\Tools\JsonDataType;
use Silex\Application;
use Silex\WebTestCase;

/**
 * Class LunchControllerTest
 *
 * @package ManageFlitter\Tests
 */
class LunchControllerTest extends WebTestCase
{
    /**
     * @return Application
     */
    public function createApplication() : Application
    {
        return require __DIR__ . '/../../bootstrap/app.php';
    }

    /**
     * Test method for lunch
     */
    public function testLunch()
    {

        echo ' <--- ' . __METHOD__;

        // create client
        $client = $this->createClient();
        $client->request('POST', 'lunch');

        // check if the response is ok
        $this->assertTrue($client->getResponse()->isOk());

        // get response contents as JSON
        $jsonResponse = $client->getResponse()->getContent();
        $this->assertJson($jsonResponse);

        // check existence of the key "Lunch proposals"
        $data = JsonDataType::decodeJSON($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('Lunch proposals', $data);

    }
}