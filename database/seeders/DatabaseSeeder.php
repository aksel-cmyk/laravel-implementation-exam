<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\Education;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
        ]);
        $resume = Resume::create([
            'name' => 'Axle-John DG. Jebulan',
            'position' => 'Information Technology',
            'phone' => '0945-887-4613',
            'email' => 'jebulanaxlejohn29@gmail.com',
            'address' => '185 Marungko Angat, Bulacan',
            'objective' => 'An adaptable and highly organized IT professional, seeking to contribute my skills in a forward-thinking organization while expanding my knowledge and delivering excellence.',
            'date_of_birth' => '2003-10-16',
            'place_of_birth' => 'Makati City',
            'age' => '21',
            'height' => "5'8\"",
            'weight' => '63 kg',
            'religion' => 'Catholic',
            'nationality' => 'Filipino',
            'civil_status' => 'Single',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       
        $skills = [
            'Organized & Efficient',
            'Excellent Time Management',
            'Adaptability & Flexibility',
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'resume_id' => $resume->id,
                'skill' => $skill,
            ]);
        }

        
        $educations = [
            ['level' => 'Tertiary', 'degree' => 'Bachelor of Science in Information Technology', 'institution' => 'Baliwag Polytechnic College', 'years' => '2021 - Present', 'address' => 'Brgy. Poblacion Baliuag, Bulacan'],
            ['level' => 'Secondary', 'degree' => 'General Academics Strand', 'institution' => 'St. Joseph Kalinangan Integrated School', 'years' => '2020 - 2021',  'address' => 'Sulucan, Angat, Bulacan'],
            ['level' => 'Primary', 'degree' => 'Dr. Antonio C. Villarama Memorial School', 'institution' => 'St. Joseph Kalinangan Integrated School', 'years' => '2010 - 2015', 'address' => 'Marungko, Angat, Bulacan'],
        ];

        foreach ($educations as $education) {
            Education::create([
                'resume_id' => $resume->id,
                'level' => $education['level'],
                'degree' => $education['degree'],
                'institution' => $education['institution'],
                'years' => $education['years'],
                'address' => $education['address'],
            ]);
    }
}
}
