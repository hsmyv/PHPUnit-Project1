<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Beverage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;
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

    public function test_a_user_can_visit_a_beverage_page_and_see_beverages()
    {
        $beverage = Beverage::factory()->create();
        $response = $this->get('/beverage');
        $response->assertSee($beverage->name);
        $response->assertStatus(200);
    }
}
