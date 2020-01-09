<?php

use Illuminate\Database\Seeder;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Generate 10 subscribers
        factory(App\Subscribers::class, 10)->create()->each(function ($subscriber) {
            $subscriber->fields()->save(factory(App\Fields::class)->make());
        });
    }
}
