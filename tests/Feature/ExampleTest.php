<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * AssertSee checks string or array withing resposne
     */
    public function test_about_page_returns_string_or_array()
    {
        $response = $this->get('/about');
        $response->assertSee(['PHP', 'PHPUnit']);
        // $response->assertSee('About');
    }
}
