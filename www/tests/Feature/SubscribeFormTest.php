<?php

namespace Tests\Feature;

use Tests\TestCase;

class SubscribeFormTest extends TestCase
{
    /**
     * A subscribe form test
     *
     * @return void
     */
    public function testSubscribeFormTest(): void
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->json('POST', '/api/v1/subscribe', ['email' => 'example@domain.com']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'success' => true,
            ]);
    }

    /**
     * A subscribe form test SPAM
     *
     * @return void
     */
    public function testSpamSubscribeFormTest()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->json('POST', '/api/v1/subscribe', ['email' => 'example@domain.com']);

        $response
            ->assertStatus(400)
            ->assertJson([
                'success' => false,
            ]);
    }
}
