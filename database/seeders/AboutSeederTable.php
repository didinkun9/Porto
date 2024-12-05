<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'title' => 'About Title',
                'description' => 'Description lorem ipsum dolor sit amet',
                'image' => 'image.jpg',
                'name' => 'My Name',
                'github' => '',
                'role' => '1',
                'birthday' =>  Carbon::create('1997', '01', '15'),
                'is_active' => '1',
            ],
        ]);
    }
}