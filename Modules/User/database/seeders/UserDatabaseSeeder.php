<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Database\Seeders\ReligionSeeder;
use Modules\User\Database\Seeders\BloodTypeSeeder;
use Modules\User\Database\Seeders\NationalitySeeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            BloodTypeSeeder::class,
            NationalitySeeder::class,
            ReligionSeeder::class,
        ]);
    }
}
