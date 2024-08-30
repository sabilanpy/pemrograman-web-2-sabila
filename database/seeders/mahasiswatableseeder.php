<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;


class mahasiswatableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert ([
            'nama'=> 'Sabila Nopiyanti',
            'email' => 'sabilanpy03@gmail.com',
        ]);
    }
}
