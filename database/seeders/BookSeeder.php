<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // create many books
        for ($i = 0 ; $i<100 ;$i ++) {
             Book::create([
                'name' => "name$i" ,
                'description' => "description$i"
            ]);
        }
    }
}
