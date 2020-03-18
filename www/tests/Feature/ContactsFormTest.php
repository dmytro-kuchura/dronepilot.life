<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactsFormTest extends TestCase
{
    /**
     * A subscribe form test
     *
     * @return void
     */
    public function testContactsFormTest(): void
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->json('POST', '/api/v1/contacts', [
            'email' => 'example@domain.com',
            'name' => 'John Doe',
            'description' => 'Test contacts form from Unit Tests',
        ]);

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
    public function testSpamContactsFormTest()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->json('POST', '/api/v1/contacts', [
            'email' => 'example@domain.com',
            'name' => 'John Doe',
            'description' => 'Test contacts form from Unit Tests',
        ]);

        $response
            ->assertStatus(400)
            ->assertJson([
                'success' => false,
            ]);
    }
}
