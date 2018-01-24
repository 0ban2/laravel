<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_teamo()
    {
        $this->get('/te-amo')
        ->assertStatus(200)
        ->assertSee('TE AMO');
    }

    /** @test */
    function it_loads_users_details_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200);
    }
}
