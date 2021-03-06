<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1,50) as $index){
            Event::create([

                'name' => $faker->sentence(2),
                'city' => $faker->city,
                'country' => $faker->country,
                'description' => $faker->paragraph(1,true)

            ]);
        }

        /*Event::create([
            'name' => 'IoT Workshop',
            'city' => 'Karachi',
            'country' => 'Pakistan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure temporibus tempora odio voluptatum molestiae et. Aspernatur, ipsa ipsam. Cumque vero fuga sapiente ratione, ipsa tempora quidem necessitatibus deleniti unde recusandae.',
        ]);

        Event::create([
            'name' => 'AI Workshop',
            'city' => 'Lahore',
            'country' => 'Pakistan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure temporibus tempora odio voluptatum molestiae et. Aspernatur, ipsa ipsam. Cumque vero fuga sapiente ratione, ipsa tempora quidem necessitatibus deleniti unde recusandae.',
        ]);

        Event::create([
            'name' => 'PHP Workshop',
            'city' => 'Islamabad',
            'country' => 'Pakistan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure temporibus tempora odio voluptatum molestiae et. Aspernatur, ipsa ipsam. Cumque vero fuga sapiente ratione, ipsa tempora quidem necessitatibus deleniti unde recusandae.',
        ]);*/
    }
}