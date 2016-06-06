<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class GetinTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getin()
    {
        $user = [
            'username' => 'sally',
            'profile' => [
                'name' => 'Sally Clojurian',
                'address' => [
                    'city' => 'Austin',
                    'state' => 'TX'
                ]
            ]
        ];

        $this->assertEquals('Sally Clojurian', F\getin($user, ['profile', 'name']));
        $this->assertEquals('Austin', F\getin($user, ['profile', 'address', 'city']));
        $this->assertEquals('no zip code!', F\getin($user, ['profile', 'address', 'zip-code'], 'no zip code!'));
    }

    /**
     * @test
     */
    public function shouldReturnWithAssocArray()
    {
        $user = [
            'username' => 'jimy',
            'pets' => [
                ['name' => 'Rex', 'type' => 'dog'],
                ['name' => 'Sniffles', 'type' => 'hamster']
            ]
        ];

        $this->assertEquals('hamster', F\getin($user, ['pets', 1, 'type']));
        $this->assertFalse(F\getin($user, []));
    }
}
