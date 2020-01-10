<?php

namespace Tests\Feature;

use App\Subscribers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApisTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_create_subscriber() {
        $data = [
        'name' =>  'henry Onyemaobi',
        'email' => 'henryonyemaobi@gmail.com',
        'state' => 'active'
        ];
        
        $this->withoutExceptionHandling();
        
        $this->json('POST', route('subscribers.store'), $data)
            ->assertStatus(200)
            ->assertSee(1)
            ->assertok();
    }


    public function test_can_list_subscribers() {
        $subscribers = factory(Subscribers::class, 2)->create()->map(function ($subscribers) {
            return $subscribers->only(['id','name','email','state']);
        });
        $this->get(route('subscribers.index'))
            ->assertSuccessful()
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> ['*' => [ 'id','name','email','state']],
                'links',
                'meta'
            ]);
    }

    public function test_can_showsubscriber() {
        $Subscribers = factory(Subscribers::class)->create();
        $this->get(route('subscribers.show', $Subscribers->id))
            ->assertok()
            ->assertJsonStructure([
                'data'
            ]);
    }
}
