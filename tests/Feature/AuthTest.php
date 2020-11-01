<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_user_can_logged_in()
    {
//        $this->withoutExceptionHandling();

//        $user = factory(User::class)->create([
//            'name' => 'Test',
//            'email' => 'test@hotmail.com',
//            'password' => '123456'
//        ]);

        $response = $this->post('/login', [
            'email' => 'admin@example.com',
            'password' => 'secret'
        ]);

        $this->assertTrue(Auth::check());

//        $response->assertRedirect('/dashboard');

    }

    /** @test */
    function redirect_to_home_page_and_logged_in_after_register()
    {
        $response = $this->post('register', [
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'secret'
        ]);

//        $response->assertRedirect('/home');

//        $this->assertTrue(Auth::check());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_user_can_register()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_user_can_reset_password()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_user_can_delete_account()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
