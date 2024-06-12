<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\PseudoTypes\IntegerValue;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        /* DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@example.com',
            'password' => Hash::make('password'),
        ]); */
    }
}
