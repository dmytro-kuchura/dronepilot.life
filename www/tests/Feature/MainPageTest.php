<?php

namespace Tests\Feature;

use Tests\TestCase;

class MainPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMainPageTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
