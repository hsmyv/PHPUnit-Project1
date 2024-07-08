<?php

namespace Tests\Unit;

use App\Models\Beverage;
// use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;

    private $beverage;

    public function setUp(): void
    {
        parent::setUp();
        $this->beverage = Beverage::factory()->create();
    }
    /**
     * A basic unit test example.
     */
    public function test_beverage_has_name(): void
    {
        $this->assertNotEmpty($this->beverage->name);
    }

    public function test_beverage_has_type(): void
    {
        $this->assertNotEmpty($this->beverage->type);
    }
}
