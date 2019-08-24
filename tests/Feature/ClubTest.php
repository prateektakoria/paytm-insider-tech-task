<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClubTest extends TestCase
{
    public function testArticlesAreListedCorrectly(){
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];

        $response = $this->json('GET', '/api/articles', [], $headers)
        ->assertStatus(200)
        ->assertJson()
        ->assertJsonStructure([
            '*' => ['id', 'body', 'title', 'created_at', 'updated_at'],
        ]);
    }
}
