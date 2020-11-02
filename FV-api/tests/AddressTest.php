<?php

namespace Tests;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use Src\AddressHandler;

class AddressTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnAddress()
    {
        $expected = 'Jalan%20Klang%20Lama%2C%20Taman%20Sepute, Kuala%20Lumpur, 58200';
        $uri = 'http://127.0.0.1:8000/api/submitAddress';
        $params = [
            'address' => 'Jalan%20Klang%20Lama%2C%20Taman%20Sepute',
            'address2' => 'Kuala%20Lumpur',
            'address3' => '58200'
        ];

        $request = Request::create($uri, 'POST', $params);
        $data = $request->all();

        $addressHandler = new AddressHandler();
        $response = $addressHandler->addHandler($data);

        static::assertEquals($expected, $response);
    }
}
