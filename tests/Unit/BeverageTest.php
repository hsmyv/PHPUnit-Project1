<?php

namespace Tests\Unit;

use App\Exceptions\MinorCannotBuyAcoholicBeverageException;
use App\Models\Beverage;
use App\Models\User;
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



    public function test_a_minor_user_can_not_but_alcoholic_beverage()
    {
        $beverage =  Beverage::factory()->create([
            'type' => 'Alcoholic'
        ]);

        $user = User::factory()->create([
            'age' => 20
        ]);

        $this->actingAs($user);

        $this->expectException(MinorCannotBuyAcoholicBeverageException::class);
        $beverage->buy();

    }
}
