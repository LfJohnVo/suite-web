<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MinutasaltadireccionTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = App\Models\User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.minutasaltadireccion.index'));
            $browser->assertRouteIs('admin.minutasaltadireccion.index');
        });
    }
}
