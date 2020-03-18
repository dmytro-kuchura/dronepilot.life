<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMainPageTest()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
