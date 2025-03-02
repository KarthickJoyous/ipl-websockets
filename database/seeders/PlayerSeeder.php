<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlayerSeeder extends Seeder
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

        $players = collect([
            [
                'name' => 'Noor Ahmad',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Ravichandaran Ashwin',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Devon Conway',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Syed Khaleel Ahmed',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Rachin Ravindra',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Anshul Kamboj',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Rahul Tripathi',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Sam Curran',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Gurjapneet Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Nathan Ellis',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Deepak Hooda',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Jamie Overton',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Vijay Shankar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Vansh Bedi',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Andre Siddarth',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Shreyas Gopal',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Ramakrishna Ghosh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Kamlesh Nagarkoti',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Mukesh Choudhary',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Shaik Rasheed',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'KL Rahul',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Mitchell Starc',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'T. Natarajan',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Jake Fraser-Mcgurk',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Mukesh Kumar',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Harry Brook',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Ashutosh Sharma',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Mohit Sharma',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Faf Du Plessis',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Sameer Rizvi',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Donovan Ferreira',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Dushmantha Chameera',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Vipraj Nigam',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Karun Nair',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Madhav Tiwari',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Tripurana Vijay',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Manvanth Kumar L',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Ajay Mandal',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Darshan Nalkande',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Jos Buttler',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Mohammad Siraj',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Kagiso Rabada',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Prasidh Krishna',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Washington Sundar',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Sherfane Rutherford',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Gerald Coetzee',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Glenn Phillips',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'R. Sai Kishore',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Mahipal Lomror',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Gurnoor Singh Brar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Mohd. Arshad Khan',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Karim Janat',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Jayant Yadav',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Ishant Sharma',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Kumar Kushagra',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Kulwant Khejroliya',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Manav Suthar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Anuj Rawat',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Nishant Sindhu',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Venkatesh Iyer',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Anrich Nortje',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Quinton De Kock',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Angkrish Raghuvanshi',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Spencer Johnson',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Moeen Ali',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Rahmanullah Gurbaz',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Vaibhav Arora',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Ajinkya Rahane',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Rovman Powell',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Umran Malik',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Manish Pandey',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Anukul Roy',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Luvnith Sisodia',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Mayank Markande',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Rishabh Pant',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Avesh Khan',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Akash Deep',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'David Miller',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Abdul Samad',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Mitchell Marsh',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Shahbaz Ahamad',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Aiden Markram',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Matthew Breetzke',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Shamar Joseph',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'M. Siddharth',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Arshin Kulkarni',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Rajvardhan Hangargekar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Yuvraj Chaudhary',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Prince Yadav',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Akash Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Digvesh Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Himmat Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Aryan Juyal',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Trent Boult',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Deepak Chahar',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Will Jacks',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Naman Dhir',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Allah Ghazanfar',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Mitchell Santner',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Ryan Rickelton',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Lizaad Williams',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Reece Topley',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Robin Minz',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Karn Sharma',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Vignesh Puthur',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Arjun Tendulkar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Bevan John Jacobs',
                'overseas' => true,
                'capped' => false
            ],
            [
                'name' => 'Venkata Satyanarayana Penmetsa',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Raj Angad Bawa',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Shrijith Krishnan',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Ashwani Kumar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Shreyas Iyer',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Yuzvendra Chahal',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Arshdeep Singh',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Marcus Stoinis',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Marco Jansen',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Nehal Wadhera',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Glenn Maxwell',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Priyansh Arya',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Josh Inglis',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Azmatullah Omarzai',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Lockie Ferguson',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Vyshak Vijaykumar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Yash Thakur',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Harpreet Brar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Aaron Hardie',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Vishnu Vinod',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Xavier Bartlett',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Kuldeep Sen',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Pravin Dubey',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Pyla Avinash',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Suryansh Shedge',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Musheer Khan',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Harnoor Pannu',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Jofra Archer',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Tushar Deshpande',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Wanindu Hasaranga',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Maheesh Theekshana',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Nitish Rana',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Fazalhaq Farooqi',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Kwena Maphaka',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Akash Madhwal',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Vaibhav Suryavanshi',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Shubham Dubey',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Yudhvir Charak',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Ashok Sharma',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Kunal Rathore',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Kumar Kartikeya Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Josh Hazlewood',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Phil Salt',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Jitesh Sharma',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Bhuvneshwar Kumar',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Liam Livingstone',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Rasikh Dar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Krunal Pandya',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Tim David',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Jacob Bethell',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Suyash Sharma',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Devdutt Padikkal',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Nuwan Thushara',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Romario Shepherd',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Lungisani Ngidi',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Swapnil Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Mohit Rathee',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Abhinandan Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Swastik Chhikara',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Manoj Bhandage',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Ishan Kishan',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Mohammad Shami',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Harshal Patel',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Abhinav Manohar',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Rahul Chahar',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Adam Zampa',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Simarjeet Singh',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Eshan Malinga',
                'overseas' => true,
                'capped' => false
            ],
            [
                'name' => 'Brydon Carse',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Jaydev Unadkat',
                'overseas' => false,
                'capped' => true
            ],
            [
                'name' => 'Kamindu Mendis',
                'overseas' => true,
                'capped' => true
            ],
            [
                'name' => 'Zeeshan Ansari',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Sachin Baby',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Aniket Verma',
                'overseas' => false,
                'capped' => false
            ],
            [
                'name' => 'Atharva Taide',
                'overseas' => false,
                'capped' => false
            ]
        ])->map(function ($player) use ($timestamp) {
            return $player + $timestamp;
        })->toArray();
        
        DB::table('players')->insert($players);
    }
}
