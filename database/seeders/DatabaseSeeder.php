<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Listing::factory(6)->create();
        
        /* Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@gmail.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae cumque nostrum itaque eaque ad optio quos unde dignissimos exercitationem. Quam praesentium nesciunt voluptas eum odit a voluptate temporibus laborum officiis.'
        ]);

        Listing::create([
            'title' => 'Full Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@gmail.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae cumque nostrum itaque eaque ad optio quos unde dignissimos exercitationem. Quam praesentium nesciunt voluptas eum odit a voluptate temporibus laborum officiis.'
        ]); */
        


    }
}
