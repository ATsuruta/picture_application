<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function test_新しいユーザーを作成して返却する()
    {
        $data = [
            'name' => 'test asuka',
            'email' => 'test@email.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
        ];

        $response = $this->json('post', route('register'), $data);

        $user = User::first();
        $this->assertEquals($data['name'], $user->name);

        $response->assertStatus(201)
                 ->assertJson(['name' => $user->name]);
    }
}
