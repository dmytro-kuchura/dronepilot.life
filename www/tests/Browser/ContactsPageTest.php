<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContactsPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @throws \Throwable
     */
    public function testOpenPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')->assertSee('Hey Thr!');
        });
    }

    public function testSubmitForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                ->type('name', 'Dmitry')
                ->type('email', 'kuchura.d@test.com')
                ->type('comments', 'Test')
                ->press('Send')
                ->assertSee('Hey Thr!');
        });
    }
}
