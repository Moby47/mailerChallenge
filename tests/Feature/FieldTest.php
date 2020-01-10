<?php

namespace Tests\Feature;

use App\Fields;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FieldTest extends TestCase
{
    use RefreshDatabase;
    

    public function test_can_delete_field() {
        $data = [
            'id' =>  47
            ];
            
            $this->json('POST', route('deleteField'), $data)
                ->assertSee(1);
    }
}
