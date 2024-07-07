<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;


class UserModelTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_user_has_first_name_attribute()
    {
        // Create user
        $user = User::create([
            'name' => 'Hasan',
            'email' => 'hsmusayev@gmail.com',
            'password' => 'hesen123',
        ]);


        $this->assertEquals('Hasan', $user->firstname);
    }
}
