<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /* Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Naga CIty',
            'email' => 'mark@gmailcom',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, facere ipsam cupiditate illo sapiente voluptas neque eaque molestias delectus veritatis dicta quos facilis exercitationem qui nisi sed necessitatibus, amet eum?',
        ]);

        Listing::create([
            'title' => 'Full-Stack Developer',
            'tags' => 'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'Nabua',
            'email' => 'cspc@gmailcom',
            'website' => 'https://www.stark.com',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, facere ipsam cupiditate illo sapiente voluptas neque eaque molestias delectus veritatis dicta quos facilis exercitationem qui nisi sed necessitatibus, amet eum?',
        ]); */

        Listing::factory(6)->create();

    }
}
