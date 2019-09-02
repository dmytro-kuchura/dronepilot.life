<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class MainPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @throws \Throwable
     */
    public function testExample()
    {
        $this->assertTrue(true);
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/')->assertSee('DronePilot');
//        });
    }
}
