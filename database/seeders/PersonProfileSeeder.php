<?php

namespace Database\Seeders;

use App\Models\PersonProfile;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PersonProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personProfiles = [
            [
                'name'          =>'Arif',
                'email'         =>'arif@arif.com',
                'profile_url'   => 'https://arif.com',
                'about'         => 'Software developers design, program, build, deploy and maintain software using many different skills and tools.', 
                ],
            [
                'name'          =>'Arman',
                'email'         =>'arman@arman.com',
                'profile_url'   => 'https://arman.com',
                'about'         => 'Software developers design, program, build, deploy and maintain software using many different skills and tools.', 
                ],
            [
                'name'          =>'asif',
                'email'         =>'asif@asif.com',
                'profile_url'   => 'https://asif.com',
                'about'         => 'Software developers design, program, build, deploy and maintain software using many different skills and tools.', 
                ],
            [
                'name'          =>'rafiu',
                'email'         =>'rafiu@rafiu.com',
                'profile_url'   => 'https://rafiu.com',
                'about'         => 'Software developers design, program, build, deploy and maintain software using many different skills and tools.', 
                ],
            [
                'name'          =>'ahmed',
                'email'         =>'ahmed@ahmed.com',
                'profile_url'   => 'https://ahmed.com',
                'about'         => 'Software developers design, program, build, deploy and maintain software using many different skills and tools.', 
                ],
        ];
        
        PersonProfile::insert($personProfiles);
}
}
