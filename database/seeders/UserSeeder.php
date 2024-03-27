<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
      public function run(): void {
       DB::table('users')->insert ([
            [ 
        'role'  => 'admin',      
        'first_name' => 'James',
        'middle_name' => 'Pag-iwayan',
        'last_name' => 'Alingasa',
        'email' => 'j.alingasa@mlgcl.edu.ph',
        'birth_date' => null,
        'phone_number' => '09973668501',
        'address' => 'Brgy. Atabay',
        'passion' => 'Web Developer',
        'gender' => 'Male',
        'age' => null,
        'zip_code' => 6524,
        'status' => 'Single',
        'description' => 'Hello, my name is James P. Alingasa, and I am a student at MLG College Of Learning Inc., pursuing my passion for BSIT. With a deep-rooted commitment to lifelong learning and a drive to make a difference, I am dedicated to leveraging my education and experiences to create positive change in my life. My journey is fueled by curiosity, resilience, and a relentless pursuit of excellence. I am excited about the opportunities that lie ahead and eager to embark on a path of growth, discovery, and achievement. Together, let us dare to dream, inspire, and become the architects of our own destinies.',
        'interest' => 'random',
        'fb_url' => 'https://www.facebook.com/james.alingasa.13',
        'instagram_url' => 'https://www.instagram.com/jymes__/?hl=en',
        'linkedin_url' => 'https://ph.linkedin.com/in/james-alingasa-054a03259',
        'youtube_url' => 'https://www.youtube.com/@jamesalingasa',
        'municipality' => 'Hilongos',
        'religion' => 'Roman Catholic',
        'province' => 'Leyte',
        'password' => Hash::make('jamesalingasa'),
        // 'remember_token' => NULL,
        // 'created_at' => now(),
        // 'updated_at' => now(),
         ]
        
        ]);
    }
}
