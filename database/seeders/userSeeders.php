<?php

namespace Database\Seeders;

use App\Models\AuthUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthUser::query()->create( [
            "username" => "ciman",
            "email" => "ciman027@gmail.com",
            "password" => "ciman123"
        ]);
    }
}
