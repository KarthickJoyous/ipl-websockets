<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = [
            'created_at' => now(),
            'updated_at' => now()
        ];

        $teams = collect([
            [
                'name' => 'Chennai Super Kings',
                'code' => 'CSK',
                'logo' => asset('images/teams/CSK.avif')
            ],
            [
                'name' => 'Delhi Capitals',
                'code' => 'DC',
                'logo' => asset('images/teams/DC.avif')
            ],
            [
                'name' => 'Gujarat Titans',
                'code' => 'GT',
                'logo' => asset('images/teams/GT.avif')
            ],
            [
                'name' => 'Kolkata Knight Riders',
                'code' => 'KKR',
                'logo' => asset('images/teams/KKR.avif')
            ],
            [
                'name' => 'Lucknow Super Giants',
                'code' => 'LSG',
                'logo' => asset('images/teams/LSG.avif')
            ],
            [
                'name' => 'Mumbai Indians',
                'code' => 'MI',
                'logo' => asset('images/teams/MI.avif')
            ],
            [
                'name' => 'Punjab Kings',
                'code' => 'PBKS',
                'logo' => asset('images/teams/PBKS.avif')
            ],
            [
                'name' => 'Rajasthan Royals',
                'code' => 'RR',
                'logo' => asset('images/teams/RR.avif')
            ],
            [
                'name' => 'Royal Challengers Bengaluru',
                'code' => 'RCB',
                'logo' => asset('images/teams/RCB.avif')
            ],
            [
                'name' => 'Sunrisers Hyderabad',
                'code' => 'SRH',
                'logo' => asset('images/teams/SRH.avif')
            ]
        ])->map(function ($team) use ($timestamp) {
            return $team + $timestamp;
        })->toArray();
        
        DB::table('teams')->insert($teams);
    }
}
