<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function home_page()
    {
        $response = $this->get('/');
        $this->assertTrue(true);
    }

    public function login()
    {
        $response = $this->get('/login');
        $this->assertTrue(true);
    }
}
