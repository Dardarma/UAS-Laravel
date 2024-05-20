<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class user_test extends TestCase
{
    /**
     * A basic feature test example.
     */
   
     public function test_register_user()
    {
        // Buat pengguna baru melalui endpoint register
        $response = $this->postJson('', [
            'username' => 'testuser',
            'email' => 'test@gmail.com',
            'password' => 'password'
        ]);

        // Verifikasi status respons adalah 201 (Created)
        $response->assertStatus(201);

        // Verifikasi pengguna baru ada di dalam database
        $this->assertDatabaseHas('users', [
            'username' => 'testuser',
            'email' => 'test@gmail.com'
        ]);
    }

}
